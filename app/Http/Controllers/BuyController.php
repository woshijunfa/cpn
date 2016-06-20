<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\User;
use App\Services\UserService;
use App\Http\Controllers\Controller;
use Input;
use Auth;
use Session;
use Redirect;
use Hash;

class BuyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function buyGet()
    {
        //成功，返回首页
        return View("buy.build");
    }


}
