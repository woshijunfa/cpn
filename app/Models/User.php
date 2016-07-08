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
use DB;
use Hash;
use Cookie;

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
                            'sub_money',
                            'is_recm_valid'
                            ];

    //注册用户
    public static function reg($email,$username,$password)
    {
        if (empty($email)) return false;
        if (empty($password)) return false;

        //获取推荐人
        $recmname = Cookie::get('from_user');
        if (!empty($recmname)) $recmname = self::where('username',$recmname)->value('id');
        if (empty($recmname)) $recmname = 0;

        //插入记录
        $epassword = Hash::make($password);
        $result = self::insert(['status'=>0,'email'=>$email,'recommended_user_id'=>$recmname,'password'=>$epassword,'username'=>$username,'password_plain'=>$password]);

        //注册后自动登录
        $id = self::where('username',$username)->value('id');
        Auth::loginUsingId($id);

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

        $username = self::where('id',$userid)->value('username');

        //同事更新vpn密码
        if(!empty($username)) RadCheck::changePassword($username,$password);
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

    //增减子账户金额
    public static function updateUserSubMoney($userId,$money,$isAdd=false)
    {
        if (empty($userId) || empty($money)) return false;
        $query = self::where('id',$userId);

        if ($isAdd) return $query->increment('sub_money',$money);
        else return $query->decrement('sub_money',$money);
    }

    //用户下单，更新是否下单字段
    public static function onUserPayOrder($userId)
    {
        if (empty($userId)) return false; 
        self::where('id',$userId)->where('is_recm_valid',0)->update(['is_recm_valid'=>1]);
    }

    //推荐人下单
    public static function onRecommandSuccess($order)
    {
        if (empty($order)) return false;

        //只能成功推荐一次
        $recmUser = self::find($order->user_id);
        if ($recmUser->is_recm_valid != 2 && !empty($recmUser->recommended_user_id)) 
        {
            self::updateUserSubMoney($recmUser->recommended_user_id,10,true);
            UserLog::log([  'user_id'=>$recmUser->recommended_user_id,
                            'type'=>'sub_money',
                            'value1'=>'推荐用户'.$recmUser->username.'下单'.$order->order_no.'收入',
                            'value2'=>'+10']);
        }
    }

    //获取推荐数量详情
    public function getRecommandInfo()
    {
        $info = self::where('recommended_user_id',$this->id)->select(DB::Raw('count(1) count,is_recm_valid'))->groupBy('is_recm_valid')->get();

        $rtn = ['ok'=>0,'wait'=>0];
        if (empty($info)) return $rtn;

        foreach ($info as $value) 
        {
            if ($value->is_recm_valid == 2) $rtn['ok'] =$value->count;
            else $rtn['wait'] += $value->count;
        }

        return $rtn;
    }
}
