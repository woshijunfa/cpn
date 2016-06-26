<?php

namespace App\Models;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;
use Illuminate\Support\Facades\Redis;
use Auth;
use Session;
use Config;
use Hash;

class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    use Authenticatable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password'];

    protected $primaryKey = 'id';

    protected $fillable = [
                            'id',
                            'email',
                            'username',
                            'password',
                            'password_plain',
                            'email_key',
                            'status',
                            'created_at',
                            'updated_at',
                            'remember_token',
                            'service_version',
                            'is_timeout',
                            'money',
                            'user_code',
                            'recommended_user_id',
                            ];

    //注册用户
    public static function reg($email,$username,$password)
    {
        if (empty($email)) return false;
        if (empty($password)) return false;

        $epassword = Hash::make($password);
        $result = self::insert(['status'=>0,'email'=>$email,'password'=>$epassword,'username'=>$username,'password_plain'=>$password]);

        return $result ? true : false;
    }    
    
    //设置邮箱
    public static function initEmail($email)
    {
        if (empty($email)) return false;
        $uuid = gGuid();
        $result = self::insert(['email_key'=>$uuid,'status'=>-1,'email'=>$email]);

        return $result ? $uuid : false;
    }

    //设置登录密码
    public static function setLoginPassword($userid,$password)
    {
        if (empty($userid) || empty($password)) return false;

        $epassword = Hash::make($password);
        self::where("id",$userid)->update(['status'=>0,'password'=>$epassword,'password_plain'=>$password]);
        return true;
    }

    //根据邮箱更新md5,并返回
    public static function updateEmailKey($email)
    {
        if (empty($email)) return false;
        $uuid = gGuid();
        self::where("email",$email)->update(['email_key'=>$uuid]);

        return $uuid;
    }

    //增减账户额度
    public static function updateUserMoney($userId,$money,$isAdd=false)
    {
        if (empty($userId) || empty($money)) return false;
        $query = self::where('id',$userId);

        if ($isAdd) return $query->increment('money',$money);
        else return $query->decrement('money',$money);
    }
}
