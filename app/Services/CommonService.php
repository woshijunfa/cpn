<?php
/**
 * Created by PhpStorm.
 * User: chenjunfa
 * Date: 3/15/16
 * Time: 16:34
 */

namespace App\Services;
use App\Models\UserSmsLog;
use App\Services\EmailSerivce;
use Log;
use Config;
use Exception;

class CommonService
{
    public static function LogException($e)
    {
        Log::info($e);
        return app("App\Services\ExceptionMailer")->addException($e);

    }
}


