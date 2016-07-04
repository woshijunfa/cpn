<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use View;
use Auth;
use Cookie;
use Input;

class CopyController extends Controller
{
    public function common(Request $request)
    {
        $uri = $request->getRequestUri();
        return $this->cc($uri);
    }

    public function cc($uri)
    {
        $bladename = str_replace('/', '_',$uri);
        if (empty($bladename)) $bladename = 'index';
        if ($bladename[0] == '_') $bladename = substr($bladename,1);
        if (empty($bladename)) $bladename = 'index';


        if ($pos = strpos($bladename,'?')) 
        {
            $bladename = substr($bladename,0,$pos);
        }

        $content = View::make('copy.' . $bladename)->render();

        //如果用户登录显示相关信息
        $user = Auth::user();
        if (!empty($user)) 
        {
            $msg = '<div class="pull-right content"><span>欢迎您' . $user->username . '</span><span><a href="/admin">我的云梯</a></span><span>/</span><span><a href="/logout">注销</a></span></div>';
            $content = preg_replace("/<div\s+class=\"pull-right\scontent\">(.*?)<\/div>/is", $msg, $content);
        }

        //终止推荐用户
        $recm = Input::get('r');
        $res =  response($content);        
        if (!empty($recm)) $res = $res->withCookie('from_user',$recm);
        return $res;
    }

    public function autoNavi(Request $request)
    {
        $uri = $request->getRequestUri();
        $bladename =  str_replace('/', '.',$uri);
        if (empty($bladename)) $bladename = 'index';
        $bladename = 'autocopy' . $bladename;
        if ($pos = strpos($bladename,'?')) 
        {
            $bladename = substr($bladename,0,$pos);
        }

        $content = View::make($bladename)->render();

        //如果用户登录显示相关信息
        // $user = Auth::user();
        // if (!empty($user)) 
        // {
        //     $msg = '<div class="pull-right content"><span>欢迎您' . $user->email . '</span><span><a href="/admin">我的云梯</a></span><span>/</span><span><a href="/logout">注销</a></span></div>';
        //     $content = preg_replace("/<div\s+class=\"pull-right\scontent\">(.*?)<\/div>/is", $msg, $content);
        // }

        return response($content);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return $this->cc('/');
    }

}
