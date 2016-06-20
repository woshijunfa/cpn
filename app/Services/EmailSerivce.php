<?php
/**
 * Created by PhpStorm.
 * User: Eric
 * Date: 3/15/16
 * Time: 16:34
 */

namespace App\Services;
use Log;
use Config;
use View;

class EmailSerivce
{

    /**
     * 发送邮件
     * @param $title 标题
     * @param $content 内容
     * @param array $receiver 接收人 array('receiver@domain.org', 'other@domain.org' => 'A name')
     * @return int
     */
    public static function sendEmail($title , $content , $receiver = null)
    {
        try 
        {
            //邮箱配置相关获取
            $mailHost = Config::get('mail.host');
            $mailport = Config::get('mail.port');
            $mailEncryption = Config::get('mail.encryption');
            $userName = Config::get('mail.username');
            $password = Config::get('mail.password');

            //port实例化
            $transport = \Swift_SmtpTransport::newInstance($mailHost, $mailport, $mailEncryption);
            $transport->setUsername($userName);
            $transport->setPassword($password);

            //邮件对象实例化
            $mailer = \Swift_Mailer::newInstance($transport);
            $message = \Swift_Message::newInstance();
            $message->setFrom([$userName => 'ShareApi']);

            if(empty($receiver)){
                $message->setTo(config("mail.exception_receiver"));
            }else
            {
                $message->setTo($receiver);
            }
            $message->setSubject($title);
            $message->setBody($content, 'text/html', 'utf-8');
            $r = $mailer->send($message);
            return $r;
        }
        catch (\Exception $e) 
        {
            Log::info("EmailSerivce::sendEmail 发生异常失败");
            Log::info($e);
        }
    }

    //发送末班邮件
    public static function sendBladeEmail($emails,$title,$blade,$data=[])
    {
        $content = View::make($blade,$data)->render();
        return self::sendEmail($title,$content,$emails);
    }

    //发送异常报警邮件
    public static function sendExceptionMail($e)
    {
        try 
        {
            if (empty($e)) return false;

            $request = app()->request;

            $infoList = [];
            $infoList['date'] = date("Y-m-d H:i:s");
            if (!empty($request))   $infoList['url'] =  $request->fullUrl();
            $infoList['error_code'] = $e->getCode();
            $infoList['error_message'] = $e->getMessage();
            $infoList['error file'] = "{$e->getFile()} at line {$e->getLine()}";
            $infoList['error trac'] = $e->getTraceAsString();
            $infoList['server'] = $_SERVER;
            $infoList['post'] = $_POST;
            $infoList['get'] = $_GET;

            //邮件title
            $title = "电销平台 code: {$e->getCode()} message: {$e->getMessage()}";

            $content = "<div style='border-bottom:2px solid #999'><p style='color:#E6E0E0;background:red;'>  ".
              $title."<p>"."<pre>".str_replace(["\n", " "], ["<br>", "&nbsp;"],var_export($infoList, true))."</pre></div>";  

            self::sendEmail($title,$content);

        } 
        catch (\Exception $e) 
        {
            Log::info("EmailSerivce::sendExceptionMail 发生异常失败");
            Log::info($e);
        }
    }
}












