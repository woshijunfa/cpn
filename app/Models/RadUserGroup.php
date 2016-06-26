<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
use Config;
use Hash;
use DB;

class RadUserGroup extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'radusergroup';
    public $timestamps = false;

    protected $connection = 'radius';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $primaryKey = 'id';

    protected $fillable = [
                                'username',
                                'groupname',
                                'priority'
                            ];


    public static function addUserGroup($userName,$group)
    {
        if (empty($userName) || empty($group)) return false;

        //已经存在直接返回
        self::where('username',$userName)->delete();

        //插入
        $info = [];
        $info['username'] = $userName;
        $info['groupname'] = $group;
        $info['priority'] = '1';

        $info = self::create($info);
        if (empty($info)) return false;
        return $info;
    }
}
