<?php

if (! function_exists('gIsEmail')) 
{
	function gIsEmail($email)
	{
		$pattern = "/^([0-9A-Za-z\\-_\\.]+)@([0-9a-z]+\\.[a-z]{2,3}(\\.[a-z]{2})?)$/i";
		return preg_match($pattern,$email);
	}

    //php生成GUID
    function gGuid()
    {
        return md5(uniqid(mt_rand(), true));
    }
}

