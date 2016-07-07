<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
use Config;
use Hash;
use DB;

class UserService extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_service';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $primaryKey = 'user_id';

    protected $fillable = [
                                'user_id',
                                'service_version',
                                'begin_at',
                                'end_at',
                                'created_at',
                                'updated_at'
                            ];


    //创建订单
    //成功返回对象，失败返回false
    public static function createUserService($order)
    {
        if (empty($order)) return false;

        $userService = self::find($order->user_id);

        //没有买过服务，去创建服务
        if (empty($userService)) 
        {
            $serviceInfo = [];
            $serviceInfo['user_id'] = $order->user_id;
            $serviceInfo['order_id'] = $order->order_id;
            $serviceInfo['service_version'] = $order->version;
            $serviceInfo['begin_at'] = date("Y-m-d H:i:s");
            $serviceInfo['end_at'] = date("Y-m-d H:i:s",strtotime("+"+$order->count+" years"));

            $info = self::create($serviceInfo);
            return empty($info) ? false : $info;
        }

        //更新服务
        //和之前服务同等质量，则延期
        //比之前服务质量高，则升级+延期
        //比之前服务质量低，则延期
        $userService->service_version = self::isBigerThan($order->version,$userService->service_version) ? $order->version : $userService->service_version;

        $baseDate = $userService->end_at > date("Y-m-d H:i:s") ? $userService->end_at : date("Y-m-d H:i:s");
        $endDate = date("Y-m-d H:i:s",strtotime("+"+$order->count+" years",strtotime($baseDate)));
        $userService->end_at = $endDate;        
        $userService->save();

        return $userService;
    }


    public static function isBigerThan($ver1,$ver2)
    {
        $table = [
            'sv3'=>[],
            'mv3'=>['sv3'],
            'bv3'=>['sv3','mv3'],
            'ev3'=>['sv3','mv3','bv3']
        ];

        return in_array($ver2,$table[$ver1]);
    }
}