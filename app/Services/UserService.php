<?php

namespace App\Services;
use App\Models\UserService as ms;
use Auth;

class UserService
{
    public static function sendRegiestEmail($email,$uuid)
    {
        $data = compact("email",'uuid');
        $title = "欢迎选择天梯vpn,请验证您的邮箱";

        $result = EmailSerivce::sendBladeEmail([$email=>$email],$title,"passport.registerEmail",$data);

        return $result;
    }

    public static function sendResetPasswordEmail($email,$uuid)
    {
        $data = compact("email",'uuid');
        $title = "天梯vpn重置密码,请验证您的邮箱";

        $result = EmailSerivce::sendBladeEmail([$email=>$email],$title,"passport.resetPasswordEmail",$data);

        return $result;
    }

    public static function isUserInVpnService($userId = NULL)
    {
        if (empty($userId)) 
        {
            $user = Auth::user();
            if (empty($user)) return false;
            $userId = $user->id;
        }

        if (empty($userId)) return false;
        $service = ms::getUserServiceById($userId);

        return !empty($service) && $service->end_at > date("Y-m-d H:i:s");

    }

}
