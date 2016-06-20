<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('content.imgdesc');
});

// Route::get('/test',function(){var_dump(\Auth::user());});


Route::get('/doc/{doc}',"DocController@showdoc");
Route::get('/doc/{doc}/{chapter}',"DocController@show");

Route::get('/login',function(){return view("passport/login");});
Route::get('/logout',"UserController@logout");
Route::get('/register',function(){return view("passport/register");});
Route::get('/resetpass',function(){return view("passport/resetpass");});
Route::get('/active/account',"UserController@activeEmail");
Route::get('/active/resetpassword',"UserController@activeResetPassword");

Route::group(['middleware'=>'auth'], function () {
	Route::get('/buy',"BuyController@buyget");
});



Route::post('/login',"UserController@loginPost");
Route::post('/register',"UserController@regiestPost");
Route::post('/setLoginPass',"UserController@setLoginPass");
Route::post('/resetPassEmail',"UserController@resetPassEmail");

Route::any('/imgrec',function(){ echo json_encode(['code'=>-100,'desc'=>'未授权请求']);});

