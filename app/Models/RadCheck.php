<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
use Config;
use Hash;
use DB;

class RadCheck extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'radcheck';
    public $timestamps = false;

    protected $connection = 'radius';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $primaryKey = 'id';

    protected $fillable = [
                                'id',
                                'username',
                                'attribute',
                                'op',
                                'value'
                            ];


    public static function genAcc($userName,$password)
    {
        if (empty($userName) || empty($password)) return false;

        //已经存在直接返回
        $acc = self::where('username',$userName)->first();
        if (!empty($acc)) return true;

        //插入
        $info = [];
        $info['username'] = $userName;
        $info['value'] = $password;
        $info['op'] = '==';
        $info['attribute'] = 'Password';

        $info = self::create($info);
        if (empty($info)) return false;
        return $info;
    }
}
