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
                            'password',
                            'email_key',
                            'status',
                            'created_at',
                            'updated_at'
                            ];


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

        $password = Hash::make($password);
        self::where("id",$userid)->update(['status'=>0,'password'=>$password]);
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
}
