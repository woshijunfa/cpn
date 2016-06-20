<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Texts extends Model
{
    //
    protected $table = 'texts';

    protected $primaryKey = 'id';

    protected $fillable = [
                            'id',
                            'lang',
                            'route',
                            'html',
                            'content',
                            'created_at',
                            'updated_at',
                            ];

}
