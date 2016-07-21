<?php
/**
 * auther: chenjunfa.
 * time: 2016/1/21 11:56
 * description:用于http请求的签名和校验
 * 
 * 
 * 发起带有签名的请求
 * 
 *         	$service = new HttpSslService();
 *         	$service->initPrivateKey($privatePath);
 *         	$service->request('http://www.baidu.com',['user'=>'xxx','name'=>'xxx']);
 * 
 * 
 * 校验参数
 * 			$params = Input::all();
 *         	$service = new HttpSslService();
 *         	$service->initPublicKey($pubPath);
 *         	$service->initValidTime(600);
 * 			$isOk = $service->checkData($params);
 * 
 */

namespace App\Services;
use Log;
use Config;
use Input;

class HttpSslService
{
	private $privateKeyContent = ''; 				//私钥的内容
	private $publicKeyContent = ''; 				//公钥的内容
	private $validSecond 	=	600; 				//签名有效时间600秒

	//初始化公钥和私钥
	//$publickey 			公钥的路径，或者内容
	//$type 				密钥类型： path:密钥路径 content:密钥内容
	//签名需要提供私钥,否则失败
	public function initPublicKey($publicKey,$type='path')
	{
		if (empty($publicKey)) return false;
		if ($type=='path') $this->publicKeyContent = file_get_contents($publicKey);
		else $this->publicKeyContent = $publicKey;

		return !empty($this->publicKeyContent);
	}

	//初始化公钥和私钥
	//$privateKey 			私钥的路径，或者内容
	//$type 				密钥类型： path:密钥路径 content:密钥内容
	//验证需要提供公钥
	public function initPrivateKey($privateKey,$type='path')
	{
		if (empty($privateKey)) return false;
		if ($type=='path') $this->privateKeyContent = file_get_contents($privateKey);
		else $this->privateKeyContent = $privateKey;

		return !empty($this->privateKeyContent);
	}

	//初始化签名有效时间
	//$validTime 		签名有效时间，单位秒，如果为0表示不校验签名时间，大于0表示当签名validTime秒内有效
	public function initValidTime($validTime)
	{
		if (!is_numeric($validTime)) return false;
		if ($validTime < 0) return false;
		$this->validSecond = $validTime;

		return true;
	}

	//进行签名，并发起请求
	//说明 $url中不能含有键值对的参数，否则签名会遗漏造成校验失败，全部参数均组装成数组传入$params
	//$url 		请求的地址
	//$params 	请求的参数,数组格式
	//$method 	请求方式， get或者post 默认post
	//使用之前必须初始化私钥
	public function request($url,$params=[],$method='post')
	{
		if (empty($url)) return false;

		//对参数签名
		$params = $this->SignData($params);

		//get请求
		if ($method == 'get') 
		{
			$url .= '?' . $this->createLinkstringUrlencode($params);
			$result = $this->curlRequest($url);
			Log::info(' httpssl url:' . $url . ' method:' . $method . '  params:' . json_encode($params) . ' result:' . json_encode($result));
			return $result;
		}


		//post请求
		$result =  $this->curlRequest($url,'post',$params);
		Log::info(' httpssl url:' . $url . ' method:' . $method . '  params:' . json_encode($params) . ' result:' . json_encode($result));

		return $result;
	}

	public function SignData($data)
	{
		if (empty($data)) $data = [];
		$data['sign_time'] = time();

		//过滤无效字段
		$parseFilter = $this->paraFilter($data);

		//按照key进行排序
		$parseFilter = $this->argSort($parseFilter);

		//进行字符串拼接
		$str =  $this->createLinkstring($parseFilter);

		$str = md5($str);

		$sign = $this->rsaSign($str);
		if (empty($sign)) return false;

		$data['sign'] = $sign;

		return $data;
	}

	//校验签名
	//$data 			数组格式
	//必须初始化公钥之后才能校验签名
	//默认签名有效时间600秒，如果想去掉签名时间，请设置签名时间为0
	//校验通过，返回true 校验失败返回false bool类型
	public function checkData($data)
	{
		if (!isset($data['sign']) || empty($data['sign'])) return false;
		$sign = $data['sign'];

		//校验签名时间
		if (!empty($this->validSecond)) 
		{
			//没有签名时间
			if (!isset($data['sign_time']) || empty($data['sign_time'])) return false;

			//签名时间过了
			if ($data['sign_time'] + $this->validSecond < time()) return false;
		}

		//过滤无效字段
		$parseFilter = $this->paraFilter($data);

		//按照key进行排序
		$parseFilter = $this->argSort($parseFilter);

		//进行字符串拼接
		$str =  $this->createLinkstring($parseFilter);

		$str = md5($str);

		$result = $this->rsaVerify($str,$sign);

		return $result;
	}


	private function rsaSign($data) 
	{
		if (empty($this->privateKeyContent)) return false;
		$res = openssl_get_privatekey ( $this->privateKeyContent );
		openssl_sign ( $data, $sign, $res );
		openssl_free_key ( $res );
		$sign = base64_encode ( $sign );
		return $sign;
	}

	private function rsaVerify($data, $sign) 
	{

		if (empty($this->publicKeyContent)) return false;

		// 转换为openssl格式密钥
		$res = openssl_get_publickey ( $this->publicKeyContent );
		
		// 调用openssl内置方法验签，返回bool值
		$result = ( bool ) openssl_verify ( $data, base64_decode ( $sign ), $res );
		
		// 释放资源
		openssl_free_key ( $res );
		
		return $result;
	}


	/**
	 * 除去数组中的空值和签名参数
	 * @param $para 签名参数组
	 * return 去掉空值与签名参数后的新签名参数组
	 */
	private function paraFilter($para) 
	{
		$para_filter = array();
		while (list ($key, $val) = each ($para)) 
		{
			if($key == "sign" || $key == "sign_type" || $val == "") continue;
			else	$para_filter[$key] = $para[$key];
		}
		return $para_filter;
	}

	/**
	 * 对数组排序
	 * @param $para 排序前的数组
	 * return 排序后的数组
	 */
	private function argSort($para) {
		ksort($para);
		reset($para);
		return $para;
	}


	/**
	 * 把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串
	 * @param $para 需要拼接的数组
	 * return 拼接完成以后的字符串
	 */
	private function createLinkstring($para) {
		$arg  = "";
		while (list ($key, $val) = each ($para)) {
			if (is_array($val) && !empty($val)) 
			{
				foreach ($val as $cellkey=>$cell) $arg .= $key.'[]='.$cell."&";
			}
			else if (!is_array($val)) 
			{
				$arg.=$key."=". $val."&";
			}
		}
		//去掉最后一个&字符
		$arg = substr($arg,0,count($arg)-2);
		
		//如果存在转义字符，那么去掉转义
		if(get_magic_quotes_gpc()){$arg = stripslashes($arg);}
		
		return $arg;
	}


	/**
	 * 把数组所有元素，按照“参数=参数值”的模式用“&”字符拼接成字符串，并对字符串做urlencode编码
	 * @param $para 需要拼接的数组
	 * return 拼接完成以后的字符串
	 */
	private function createLinkstringUrlencode($para) {
		$arg  = "";
		while (list ($key, $val) = each ($para)) {

			if (is_array($val) && !empty($val)) 
			{
				foreach ($val as $cellkey=>$cell) $arg .= $key.'[]='.urlencode($val)."&";
			}
			else if (!is_array($val)) 
			{
				$arg.=$key."=". urlencode($val)."&";
			}

		}
		//去掉最后一个&字符
		$arg = substr($arg,0,count($arg)-2);
		return $arg;
	}

	/**
     * curl工具方法
     * @param $url 请求地址
     * @param string $requestType 请求方式 post 或 get
     * @param array $data post 请求数据
     * @param int $timeout 请求超时
     * @return mixed
     */
    private function curlRequest($url, $requestType = "get", $data = array(), $timeout = 300)
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_HEADER, 0);

        if (strtolower($requestType) == 'post') {
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        }

        curl_setopt($ch, CURLOPT_TIMEOUT, $timeout);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    public static function sslRequest($url,$params=[],$method='post')
    {
       $service = new self();
       $path = base_path() . Config::get('app.private_key_path');
       $service->initPrivateKey($path);
       return $service->request($url,$params,$method);    
    }

    public static function sslCheckSign()
    {
		$params = Input::all();
		$service = new self();
		$pubPath = base_path() . Config::get('app.public_key_path');
		$service->initPublicKey($pubPath);
		$service->initValidTime(600);
		return $service->checkData($params);
    }
}

