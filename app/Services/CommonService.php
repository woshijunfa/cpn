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

    public static function createDir($path)
    { 
		if (!file_exists($path))
		{ 
			self::createDir(dirname($path)); 
			mkdir($path, 0777); 
		} 
	} 

    public static function autoLoadPage()
    {
    	$uri = request()->getRequestUri();
        if ($pos = strpos($uri,'?')) 
            $uri = substr($uri,0,$pos);
        if($pos = strrpos($uri,'.'))
        {
        	$fix = substr($uri,$pos+1);
        	if (!in_array($fix,['jpg','png','css','js'])) return false;
        }
        else return false;

        $curlurl = "https://www.yuntiprivaten.com" . $uri;

        $basename = basename(public_path() . $uri);

        //创建目录
        $dir = dirname(public_path() . $uri);
        self::createDir($dir);
        $cmd = "cd " . $dir . " && wget " . $curlurl . ' && chmod 777 ' . $basename;
        exec($cmd);
    }
}


