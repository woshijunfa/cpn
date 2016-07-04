<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserLog extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'user_log';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $primaryKey = 'id';

    protected $fillable = [
                            'id',
                            'user_id',
                            'type',
                            'value1',
                            'value2',
                            'value3',
                            'value4',
                            'created_at',
                            'updated_at'
                            ];


    public static function log($values)
    {
        if (empty($values)) return false;
        $result = self::insert($values);

        return $result ? true : false;
    }

}
