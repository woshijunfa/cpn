<?php
/**
 * Created by PhpStorm.
 * User: chenjunfa
 * Date: 3/15/16
 * Time: 16:34
 */

namespace App\Services;
use App\Models\Order;
use App\Models\User;
use App\Models\UserService;
use App\Models\RadCheck;
use App\Models\UserLog;
use App\Models\Withdraw;
use App\Models\RadUserGroup;
use Log;
use Config;
use Exception;

class OrderService
{
    public static function successPay($order)
    {
        if (empty($order)) return false;

        //修改订单支付状态
        $updateInfo = [
            'status' => 'success_pay',
            'pay_at' => date("Y-m-d H:i:s")
        ];

        Order::updateOrderByOrderId($order->order_id,$updateInfo);

        //更新账户余额
        User::updateUserMoney($order->user_id,$order->account_money,false);
        if (!empty($order->account_money)) 
        {
            UserLog::log([  'user_id'=>$order->user_id,
                            'type'=>'money',
                            'value1'=>'主账户支付订单'.$order->order_no,
                            'value2'=>'-'.$order->account_money]);
        }

        $userInfo = User::find($order->user_id);

        //更新推荐人有效字段
        User::onUserPayOrder($order->user_id);

        //生成记录
        $service = UserService::createUserService($order);

        //开通账号
        RadCheck::genAcc($userInfo->username,$userInfo->password_plain);

        //设置分组
        RadUserGroup::addUserGroup($userInfo->username,$service->service_version);

        return true;
    }

    public static function transferMoney($user,$money)
    {
        if (empty($user) || empty($money)) return false;

        User::updateUserSubMoney($user->id,$money,false);
        User::updateUserMoney($user->id,$money,true);

        UserLog::log([  'user_id'=>$user->id,
                        'type'=>'money',
                        'value1'=>'推荐账户转入金额',
                        'value2'=>'+'.$money]);

        UserLog::log([  'user_id'=>$user->id,
                        'type'=>'sub_money',
                        'value1'=>'转入主账户金额',
                        'value2'=>'-' . $money]);

    }

    public static function withdrawMoney($user,$info)
    {
        if (empty($user) || empty($info)) return false;

        User::updateUserSubMoney($user->id,$info['amount'],false);


        UserLog::log([  'user_id'=>$user->id,
                        'type'=>'sub_money',
                        'value1'=>'提现金额到账户' . $info['receiver_account'] .' 姓名:' . $info['receiver_name'],
                        'value2'=>'-' . $info['amount']]);

        $info = [
            'user_id'   =>  $user->id,
            'amount'    =>  $user->sub_money,
            'alipay_account'    => $info['receiver_account'],
            'account_name'      => $info['receiver_name'],
            'amount'             => $info['amount']
        ];
        //
        return Withdraw::createDraw($info);
    }
}


