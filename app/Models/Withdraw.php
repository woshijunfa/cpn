<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WithDraw extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'withdraw';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $primaryKey = 'id';

    protected $fillable = [
                            'id',
                            'user_id',
                            'amount',
                            'alipay_account',
                            'account_name',
                            'status',
                            'comment',
                            'created_at',
                            'updated_at'
                            ];

    //创建订单
    //成功返回对象，失败返回false
    public static function createDraw($info)
    {
        if (empty($info)) return false;

        $info = self::create($info);

        return empty($info) ? false : true;
    }


}
