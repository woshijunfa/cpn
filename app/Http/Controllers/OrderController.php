<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Models\Order;
use App\Services\UserService;
use App\Services\OrderService;
use App\Services\HttpSslService;
use App\Http\Controllers\Controller;
use Input;
use Auth;
use Session;
use Redirect;
use Hash;
use Log;
use Config;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createOrder()
    {

        //版本
        $serviceVersion = Input::get('plan_id');
        if (!in_array($serviceVersion,['sv3','mv3','bv3','ev3'])) $serviceVersion = 'mv3';

        //数量
        $count = Input::get('quantity');
        if ($count != 2) $count = 1;

        //用户信息
        $userInfo = Auth::user();

        $mPrice = ['sv3'=> 180,'mv3'=>240,'bv3'=>600,'ev3'=>3600];

        $price = $mPrice[$serviceVersion];

        //生成订单，信息
        $order = Order::createOrder($serviceVersion,$price,$count,$userInfo);
        if (empty($order)) return $this->errorPage();

        return $this->showOrder($order->order_id);
    }

    public function showOrder($orderId)
    {
        $user = Auth::user();

        //获取订单信息
        if (empty($orderId)) return $this->errorPage();
        $order = Order::where('order_id',$orderId)->orWhere('order_no',$orderId)->first();

        //订单信息有效性校验
        if (empty($order) || $order->user_id != $user->id)  return $this->errorPage();

        //根据订单状态显示不同模板
        if ($order->status == 'be_pay') return view("autocopy.admin.orders.be_pay",compact('order','user'));
        if ($order->status == 'success_pay')
        {
            //支付成功1天内展示位设置界面
            if ($order->pay_at < date('Y-m-d H:i:s',strtotime('+1 days'))) 
                return view("autocopy.admin.orders.just_pay",compact('order','user'));
            return view("autocopy.admin.orders.success_pay",compact('order','user'));
        }

        return  $this->errorPage();
    }

    //支付订单
    public function payOrder($orderId)
    {
        $user = Auth::user();

        //获取订单信息
        if (empty($orderId)) return $this->errorPage();
        $order = Order::find($orderId);

        //订单信息有效性校验
        if (empty($order) || $order->user_id != $user->id)  return $this->errorPage();

        //根据订单状态显示不同模板
        if ($order->status != 'be_pay') return $this->errorPage();

        $updateOrderInfo = [];
        if (!empty(Input::get('use_account_money')))
        {
            $accountMoney = $user->money <= 0 ? 0 : $user->money;

            $tmpPrice = $order->total_price - $order->rec_desc_money;
            $updateOrderInfo['account_money'] = $user->money > $tmpPrice ? $tmpPrice : $user->money;
            $updateOrderInfo['pay_money'] = $tmpPrice - $updateOrderInfo['account_money'];
        }

        //更新账户金额
        Order::updateOrderByOrderId($order->order_id,$updateOrderInfo);

        //跳转到支付平台
        $url = Config::get('pay.order_url') . "?order_no=" . $order->order_no;
        return Redirect($url);
    }

    //支付成功post通知
    public function paySuccessPost()
    {
        $isok = HttpSslService::sslCheckSign();
        if (!$isok) return $this->json(-1);

        $orderNo = Input::get("order_no");
        $payStatus = Input::get("pay_status");

        if (empty($orderNo) || $payStatus !== "success") return $this->json(-1);

        $orderInfo = Order::where('order_no',$orderNo)->first();
        if (empty($orderInfo))
        {
            Log::info("order_no：" . $orderNo . " 没有对应订单");
            return $this->json(-1);
        } 

        if ($orderInfo->status == 'success_pay') return $this->json(0);
        if ($orderInfo->status != 'be_pay') return $this->json(-1);

        $isok = OrderService::successPay($orderInfo);
        if (!$isok) return $this->json(-1);

        return $this->json(0);
    }

    //支付结果
    public function payReturn()
    {
        //参数监测
        $orderNo = Input::get('order_no');
        if (empty($orderNo))
        {
            Log::info("payReturn 没有 order_no");
            return $this->errorPage();
        } 

        $orderInfo = Order::where('order_no',$orderNo)->first();
        if (empty($orderInfo))
        {
            Log::info("order_no：" . $orderNo . " 没有对应订单");
            return $this->errorPage();
        } 

        return Redirect('/admin/orders/' . $orderInfo->order_id);
    }
}
