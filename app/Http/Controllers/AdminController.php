<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\RadAcct;
use App\Models\Order;
use App\Models\User;
use App\Models\Withdraw;
use App\Models\UserLog;
use App\Models\RadCheck;
use App\Models\UserService;
use App\Services\OrderService;
use App\Http\Controllers\Controller;
use View;
use Auth;
use Input;
use Config;

class AdminController extends Controller
{
    //显示首页
    public function accountings($type='')
    {
        $beginTime = '';
        if ($type == 'today') $beginTime = date("Y-m-d H:i:s",strtotime(date('Y-m-d',time())));
        else if ($type == 'this_week') $beginTime = date("Y-m-d H:i:s",strtotime(date('Y-m-d',time() - 7*24*3600)));
        else if ($type == 'this_month') $beginTime = date("Y-m-d H:i:s",strtotime(date('Y-m',time())));

        $userInfo = Auth::user();
    	$history = RadAcct::getHistory($userInfo->username,$beginTime);
        if (empty($history)) $history = [];

    	return view("autocopy.admin.accountings",compact('type','history'));
    }

    //amdin主页信息
    public function admin()
    {
    	$user = Auth::user();
    	
    	#今天情况
    	$info = RadAcct::getTodayInfo($user->username);

    	if (empty($info['today_acctinputoctets'])) $info['today_acctinputoctets'] = 0;
    	if (empty($info['today_acctoutputoctets'])) $info['today_acctoutputoctets'] = 0;
    	if (empty($info['today_acctsessiontime'])) $info['today_acctsessiontime'] = 0;

        #本月情况
        $monthInfo = RadAcct::getMonthDetial($user->username);
        if (empty($monthInfo)) $monthInfo = [];
        $detial = [];
        $totalSize = 0;
        foreach ($monthInfo as $value)
        {

            $detial[(int)($value['day'])] = $value['size'];
            $totalSize += $value['size'];
        } 

        $dayCount = date('t',time());
        for ($i=1; $i <= $dayCount; $i++) 
        {
            if (empty($detial[$i])) $detial[$i] = 0;
            $detial[$i] = round($detial[$i]/(1024*1024),2);
        }
        ksort($detial);

        $per = 0;
        $taocanSize = UserService::getUserTaocanLiuliang($user->id);
        if ($taocanSize > 0) 
        {
            $per = (int)($totalSize*100/$taocanSize);
        }

    	return view("autocopy.admin",compact('info','detial','totalSize','taocanSize','per','user'));
    }

    //显示订单列表
    public function getOrders()
    {
        $user = Auth::user();

        $orders = Order::where('user_id',$user->id)->select('order_no','created_at','status','total_price')->get();

        return view('autocopy.admin.orders',compact('orders'));
    }

    public function getCreditAccount()
    {
        $user = Auth::user();

        $creditLog = UserLog::where('user_id',$user->id)->where('type','money')->get();
        if (empty($creditLog)) $creditLog = [];
        return view('autocopy.admin.credit_account',compact('user','creditLog'));        
    }

    public function getCreditReferral()
    {
        $user = Auth::user();

        $creditLog = UserLog::where('user_id',$user->id)->where('type','sub_money')->get();
        if (empty($creditLog)) $creditLog = [];
        return view('autocopy.admin.credit_referral',compact('user','creditLog'));        
    }

    public function transfersNew()
    {
        $user = Auth::user();
        return view('autocopy.admin.transfers.new',compact('user'));        
    }

    public function postTransfers()
    {
        $user = Auth::user();
        $amout = Input::get('transfer_amount');
        if (empty($amout) || $user->amout > $user->sub_money) return $this->errorPage('转账金额有误');

        OrderService::transferMoney($user,$amout);

        return Redirect('/admin/credit_account');
    }

    public function getWithdraw()
    {
        $user = Auth::user();
        return view('autocopy.admin.withdrawals.new',compact('user'));
    }

    public function postWithdraw()
    {
        $values = Input::get('withdrawal');
        if (empty($values['amount']) || empty($values['receiver_account']) || empty($values['receiver_name'])) 
        {
            return $this->errorPage('请检查提现信息');
        }
        $amout = $values['amount'];
        $user = Auth::user();
        if ($amout < 20 || $amout > $user->sub_money || $amout > 1000) return $this->errorPage('提现金额有误，必须在20-1000元内');

        OrderService::withdrawMoney($user,$values);

        return Redirect('/admin/credit_referral');
    }

    //推荐详情
    public function referral()
    {
        $user = Auth::user();
        $recmInfo = $user->getRecommandInfo();
        $url = Config::get('app.url') . '?r=' . $user->username;
        return view('autocopy.admin.referral',compact('user','recmInfo','url'));
    }

    //测试账号
    public function testacc()
    {
        $user = Auth::user();
        $recmInfo = $user->getRecommandInfo();
        $url = Config::get('app.url') . '?r=' . $user->username;
        return view('autocopy.admin.test',compact('user','recmInfo','url'));
    }

    public function testaccpost()
    {
        $user = Auth::user();
        if ($user->testcount >= 2) return $this->json(1,[],"您已经获取过测试账号两次");
        $obj = RadCheck::where("username","test")->first();

        $str = "用户名：test 密码：" . $obj->value;

        User::where('id',$user->id)->update(['testcount'=>$user->testcount+1]);

        return $this->json(0,[],$str);
    }
}
