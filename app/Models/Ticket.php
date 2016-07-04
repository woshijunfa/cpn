<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'ticket';

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $primaryKey = 'id';

    protected $fillable = [
                            'id',
                            'user_id',
                            'title',
                            'yys',
                            'system',
                            'content',
                            'pid',
                            'status',
                            'is_mm',
                            'created_at',
                            'updated_at'
                            ];


    public static function createTicket($values)
    {
        if (empty($values)) return false;
        $result = self::insert($values);

        return $result ? true : false;
    }

    public function updateTime()
    {
        $this->updated_at = date("Y-m-d H:i:s",time());
        $this->save();
    }


}
