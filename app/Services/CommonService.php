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
    	if (strtoupper(request()->getMethod()) != 'GET') return false;

    	$uri = request()->getRequestUri();
        if ($pos = strpos($uri,'?')) 
            $uri = substr($uri,0,$pos);
        if($pos = strrpos($uri,'.'))
        {
        	$fix = substr($uri,$pos+1);
        	if (!in_array($fix,['jpg','png','css','js','ttf','woff'])) return false;
        }
        else return self::autoLoadHtml();

        $curlurl = "https://www.yuntiprivaten.com" . $uri;

        $basename = basename(public_path() . $uri);

        //创建目录
        $dir = dirname(public_path() . $uri);
        self::createDir($dir);
        $cmd = "cd " . $dir . " && wget " . $curlurl . ' && chmod 777 ' . $basename;
        exec($cmd);
    }

    public static function autoLoadHtml()
    {
    	$uri = request()->getRequestUri();
    	$simUri = $uri;
        if ($pos = strpos($uri,'?')) $simUri = substr($uri,0,$pos);

    	$curlurl = "https://www.yuntiprivaten.com" . $uri;

        $headerInfo = [
            'Accept'=>'text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,*/*;q=0.8',
            'Connection'=>'keep-alive',
            'Accept-Language'=>'en-US,en;q=0.8,zh-CN;q=0.6,zh;q=0.4',
            'Cache-Control'=>'no-cache',
        ];

        // $cookie = '_dallas_session=BAh7CEkiD3Nlc3Npb25faWQGOgZFVEkiJTViZjRlODRkOTNmY2Y5YjgzODZmNmMxNjhmN2ExMjFjBjsAVEkiGXdhcmRlbi51c2VyLnVzZXIua2V5BjsAVFsHWwZpAiaiSSIiJDJhJDEwJE1VNEFLNzNDTFJWWEhLaXhVSUJ4bk8GOwBUSSIQX2NzcmZfdG9rZW4GOwBGSSIxTmVhUnlqSk00MW1MTVpjaDg3cTNnbGJOYnFFY2N0aWV0eitsNzVqTUo4az0GOwBG--9c1a4d74fc9e5a4506d4660a0f91da477e10d66c';
        $cookie = '_dallas_session=BAh7CEkiD3Nlc3Npb25faWQGOgZFVEkiJTVjMDIxMjRkNjJjMmYyYmEyMWM5M2UyMDMyYTZjOWE4BjsAVEkiGXdhcmRlbi51c2VyLnVzZXIua2V5BjsAVFsHWwZpAn6jSSIiJDJhJDEwJEJULnVzZzZ1NHlFV3QyakMvSENMY08GOwBUSSIQX2NzcmZfdG9rZW4GOwBGSSIxOVozMFNLOGEvc1o1ZGw1dEc5eVI1aU95QmlqWEFXa0xYMFJrdFJHUDZ6dz0GOwBG--bd810e7bf3acd6019a405fb6e62f3b4f5d97c689';
        $curlService = new CurlService($curlurl,$headerInfo,$cookie);
        $result = $curlService->get();
        if (!$result) return false;

        $htmlContent = $curlService->getHtml();
        if (empty($htmlContent)) return false;

        //存储到制定路径的指定模板
        $bladePath = base_path() .'/resources/views/autocopy'. $simUri . '.blade.php';
		self::createDir(dirname($bladePath));
		exec("rm -f " . $bladePath);
		file_put_contents($bladePath,$htmlContent,0777);

        //生成指定文件路由
        $routePath = app_path() . '/Http/routes.php';
        $content = file_get_contents($routePath);
        $addContent = "Route::get('".$simUri."', 'CopyController@autoNavi');
";
		if (!strpos($content,$addContent))
		{
			file_put_contents($routePath,$addContent,FILE_APPEND);
		}

		return true;
    }

}


