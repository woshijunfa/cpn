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

        $userInfo = User::find($order->user_id);

        //更新推荐人账户余额
        if (empty($userInfo))
        {
            Log::info("order中的userid没有对应用户 orderInfo:" . json_encode($order));
            return false;
        }
        User::updateUserMoney($userInfo->recommended_user_id,10,true);

        //生成记录
        $service = UserService::createUserService($order);

        //开通账号
        RadCheck::genAcc($userInfo->username,$userInfo->password_plain);

        //设置分组
        RadUserGroup::addUserGroup($userInfo->username,$service->service_version);

        return true;
    }

}


