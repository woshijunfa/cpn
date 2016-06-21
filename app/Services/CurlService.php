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

class CurlService
{
    public $url = '';
    public $header = '';
    public $cookie = '';

    public $content = '';
    public $status = 0;
    public $contentType = '';
    public $isSuccess = false;


    function __construct($url,$header,$cookie) 
    {
        $this->url = $url;
        $this->header = $header;
        $this->cookie = $cookie;
    }

    public function get()
    {
        try 
        {
            $ch = curl_init();
            curl_setopt($ch, CURLOPT_URL, $this->url);
            curl_setopt($ch, CURLOPT_HEADER, 1);
            curl_setopt($ch, CURLOPT_HTTPHEADER , $this->header);
            curl_setopt($ch, CURLOPT_COOKIE,$this->cookie);  

            curl_setopt($ch, CURLOPT_TIMEOUT, 10);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            $this->content = curl_exec($ch);
            $this->status = curl_getinfo($ch,CURLINFO_HTTP_CODE); 
            $this->contentType = curl_getinfo($ch,CURLINFO_CONTENT_TYPE); 

            if ($pos = strpos($this->content,'<!DOCTYPE')) 
            {
                $this->content = substr($this->content,$pos);
            }
            
            curl_close($ch);    
            $this->isSuccess = true;
            return true;        
        } 
        catch (Exception $e) 
        {
            return false;
        }
    }

    public function getHtml()
    {
        if (!$this->isSuccess || $this->status != 200 ) return false;

        //判断是否是html
        if (strpos($this->contentType,'text/html') !== false) 
        {
            return $this->content;
        }

        return false;
    }


}


