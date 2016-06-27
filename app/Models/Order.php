<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
use Config;
use Hash;
use DB;

class Order extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'vpn_order';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $primaryKey = 'order_id';

    protected $fillable = [
                                'order_id',
                                'order_name',
                                'version',
                                'price',
                                'total_price',
                                'status',
                                'pay_at',
                                'created_at',
                                'updated_at',
                                'comment',
                                'pay_money',
                                'account_money',
                                'rec_desc_money',
                                'order_no',
                                'user_id',
                                'count'
                            ];


    //创建订单
    //成功返回对象，失败返回false
    public static function createOrder($version,$price,$count,$userInfo)
    {
        $orderInfo = [];
        $orderInfo['order_name'] = "套餐-" . $version . '数量-' . $count;
        $orderInfo['version'] = $version;
        $orderInfo['price'] = $price;
        $orderInfo['total_price'] = $price * $count;
        $orderInfo['status'] = 'be_pay';
        $orderInfo['rec_desc_money'] = $userInfo->recommended_user_id > 0 ? 10 : 0;
        $orderInfo['pay_money'] = $price * $count - $orderInfo['rec_desc_money'];
        $orderInfo['order_no'] =  date("YmdHis",time()) . rand(1000, 9999);
        $orderInfo['user_id'] = $userInfo->id;
        $orderInfo['count'] = $count;

        $info = self::create($orderInfo);
        if (empty($info)) return false;
        return $info;
    }

    public static function updateOrderByOrderId($orderId,$udpateInfo)
    {
        if (empty($orderId) || empty($udpateInfo)) return false;

        return self::where('order_id',$orderId)->update($udpateInfo);
    }
}
