<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\RadAcct;
use App\Http\Controllers\Controller;
use View;
use Auth;

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

    	return view("autocopy.admin",compact('info','detial','totalSize'));
    }

}
