<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Auth;
use Session;
use Config;
use Hash;
use DB;

class RadAcct extends Model
{
    protected $connection = 'radius';

    public $timestamps = false;
    
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'radacct';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $primaryKey = 'radacctid';

    protected $fillable = [
                            'radacctid',
                            'acctsessionid',
                            'acctuniqueid',
                            'username',
                            'groupname',
                            'realm',
                            'nasipaddress',
                            'nasportid',
                            'nasporttype',
                            'acctstarttime',
                            'acctstoptime',
                            'acctsessiontime',
                            'acctauthentic',
                            'connectinfo_start',
                            'connectinfo_stop',
                            'acctinputoctets',
                            'acctoutputoctets',
                            'calledstationid',
                            'callingstationid',
                            'acctterminatecause',
                            'servicetype',
                            'framedprotocol',
                            'framedipaddress',
                            'acctstartdelay',
                            'acctstopdelay',
                            'xascendsessionsvrkey'
                            ];

    //获取连接历史
    public static function getHistory($username,$beginTime='',$endTime='',$limit=100)
    {
        if (empty($username)) return false;

        $query = self::where("username",$username);
        if (!empty($beginTime)) $query = $query->where("acctstarttime",'>=',$beginTime);
        if (!empty($endTime)) $query = $query->where("acctstoptime",'<=',$endTime);
        if (!empty($limit)) $query = $query->take($limit); 
        
        return $query   ->select('acctstarttime','acctstoptime','acctsessiontime','acctinputoctets','acctoutputoctets')
                        ->orderBy('radacctid','desc')
                        ->get();
    }

    //获取今天用户信息
    public static function getTodayInfo($username)
    {
        if (empty($username)) return false;

        $beginTime = date("Y-m-d H:i:s",strtotime(date('Y-m-d',time())));

        $info = self::where("username",$username)
                    ->where('acctstarttime','>=',$beginTime)
                    ->select(DB::raw("SUM(acctinputoctets) as today_acctinputoctets,SUM(acctoutputoctets) as today_acctoutputoctets,SUM(acctsessiontime) as today_acctsessiontime"))
                    ->first();

        return empty($info) ? [] : $info->toArray();
    }

    //获取本月的情况
    public static function getMonthDetial($username)
    {
        if (empty($username)) return false;
        $beginTime = date("Y-m-d H:i:s",strtotime(date('Y-m',time())));

        $info = self::where("username",$username)
            ->where('acctstarttime','>=',$beginTime)
            ->select(DB::raw("SUM(acctinputoctets) + SUM(acctoutputoctets) as size,DATE_FORMAT(acctstarttime,'%d') as day"))
            ->groupBy("day")
            ->get();

        return empty($info) ? false : $info->toArray();
    }

}
