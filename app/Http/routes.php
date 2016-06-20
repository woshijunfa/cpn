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

#主页介绍相关
Route::get('/', 'CopyController@common');
Route::get('/feature', 'CopyController@common');
Route::get('/pricing', 'CopyController@common');
Route::get('/guides', 'CopyController@common');
Route::get('/faq', 'CopyController@common');
Route::get('/refund_policy', 'CopyController@common');

#guide
Route::get('/guides/windows8_pptp', 'CopyController@common');
Route::get('/guides/windows8_l2tp', 'CopyController@common');
Route::get('/guides/pptp_vs_l2tp', 'CopyController@common');
Route::get('/guides/windows7_pptp', 'CopyController@common');
Route::get('/guides/windows7_l2tp', 'CopyController@common');
Route::get('/guides/windows_xp_pptp', 'CopyController@common');
Route::get('/guides/windows_xp_l2tp', 'CopyController@common');
Route::get('/guides/mac_os_mobile_config', 'CopyController@common');
Route::get('/guides/mac_os_pptp', 'CopyController@common');
Route::get('/guides/mac_os_l2tp', 'CopyController@common');
Route::get('/guides/ubuntu_pptp', 'CopyController@common');
Route::get('/guides/ubuntu_l2tp', 'CopyController@common');

Route::get('/guides/iphone_mobile_config', 'CopyController@common');
Route::get('/guides/iphone_pptp', 'CopyController@common');
Route::get('/guides/iphone_l2tp', 'CopyController@common');
Route::get('/guides/ipad_mobile_config', 'CopyController@common');
Route::get('/guides/ipad_pptp', 'CopyController@common');
Route::get('/guides/ipad_l2tp', 'CopyController@common');
Route::get('/guides/android_pptp', 'CopyController@common');
Route::get('/guides/android_l2tp', 'CopyController@common');
Route::get('/guides/android_2_pptp', 'CopyController@common');
Route::get('/guides/android_2_l2tp', 'CopyController@common');

#常见问题相关
Route::get('/faq/function', 'CopyController@common');
Route::get('/faq/link', 'CopyController@common');
Route::get('/faq/account', 'CopyController@common');
Route::get('/faq/shop', 'CopyController@common');
Route::get('/terms_of_service', 'CopyController@common');
Route::get('/users/password/new', 'CopyController@common');
Route::get('/users_set_password', 'CopyController@common');

//登录注册相关
Route::get('/users/sign_in', 'CopyController@common');
Route::get('/users/sign_up', 'CopyController@common');
Route::post('/register',"UserController@regiestPost");
Route::post('/login',"UserController@loginPost");
Route::post('/setLoginPass',"UserController@setLoginPass");
Route::post('/resetPassEmail',"UserController@resetPassEmail");
Route::get('/logout',"UserController@logout");

//





Route::get('/test',function(){return App\Services\CommonService::autoLoadPage();});
Route::get('/assets/steps/android_2/l2tp/step10-73a4ef35ee2e2516217c70bd63695534.jpg',function(){return App\Services\CommonService::autoLoadPage();});




// Route::get('/doc/{doc}',"DocController@showdoc");
// Route::get('/doc/{doc}/{chapter}',"DocController@show");

// Route::get('/login',function(){return view("passport/login");});
// Route::get('/logout',"UserController@logout");
// Route::get('/register',function(){return view("passport/register");});
// Route::get('/resetpass',function(){return view("passport/resetpass");});
// Route::get('/active/account',"UserController@activeEmail");
// Route::get('/active/resetpassword',"UserController@activeResetPassword");

// Route::group(['middleware'=>'auth'], function () {
// 	Route::get('/buy',"BuyController@buyget");
// });



// Route::post('/login',"UserController@loginPost");
// // Route::post('/register',"UserController@regiestPost");
// // Route::post('/setLoginPass',"UserController@setLoginPass");
// // Route::post('/resetPassEmail',"UserController@resetPassEmail");

// Route::any('/imgrec',function(){ echo json_encode(['code'=>-100,'desc'=>'未授权请求']);});

