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
Route::get('/', 'CopyController@index');
Route::get('/feature', 'CopyController@common');
Route::get('/pricing', 'CopyController@common');
Route::get('/guides', 'CopyController@common');
Route::get('/faq', 'CopyController@common');
Route::get('/refund_policy', 'CopyController@common');

#api接口相关
Route::post('/admin/order_pay_post', 'OrderController@paySuccessPost');


#guide
Route::get('/guides/windows8_pptp', 'CopyController@common');
Route::get('/guides/windows8_l2tp', 'CopyController@common');
Route::get('/guides/pptp_vs_l2tp', 'CopyController@common');
Route::get('/guides/windows7_pptp', 'CopyController@common');
Route::get('/guides/windows7_l2tp', 'CopyController@common');
Route::get('/guides/windows_xp_pptp', 'CopyController@common');
Route::get('/guides/windows_xp_l2tp', 'CopyController@common');

Route::get('/guides/mac_os_mobile_config', function(){return redirect('/guides/mac_os_pptp');});
Route::get('/guides/mac_os_pptp', 'CopyController@common');
Route::get('/guides/mac_os_l2tp', 'CopyController@common');
Route::get('/guides/ubuntu_pptp', 'CopyController@common');
Route::get('/guides/ubuntu_l2tp', 'CopyController@common');

Route::get('/guides/iphone_mobile_config', function(){return redirect('/guides/iphone_pptp');});
Route::get('/guides/iphone_pptp', 'CopyController@common');
Route::get('/guides/iphone_l2tp', 'CopyController@common');
Route::get('/guides/ipad_mobile_config', function(){return redirect('/guides/ipad_pptp');});
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
Route::any('/users/sign_out',"UserController@logout");

//







Route::get('/test','TestController@test');
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

//auto-generate-route
Route::group(['middleware'=>'auth'], function () {
	Route::get('/admin/speed_up', 'CopyController@autoNavi');
	Route::get('/admin/servers', 'CopyController@autoNavi');
	Route::get('/admin/documents', 'CopyController@autoNavi');
	Route::get('/admin/user/edit_email', 'CopyController@autoNavi');
	Route::get('/admin/user/edit', 'CopyController@autoNavi');
	Route::get('/admin/orders/new', 'CopyController@autoNavi');

	#推荐详情
	Route::get('/admin/referral', 'AdminController@referral');

	##订单相关
	Route::get('/admin/orders', 'AdminController@getOrders');
	Route::get('/admin', 'AdminController@admin');
	Route::get('/admin/credit_account', 'AdminController@getCreditAccount');
	Route::get('/admin/credit_referral', 'AdminController@getCreditReferral');
	Route::get('/admin/accountings/{type?}', 'AdminController@accountings');
	Route::get('/admin/transfers/new', 'AdminController@transfersNew');
	Route::post('/admin/transfers','AdminController@postTransfers');
	Route::get('/admin/withdrawals/new', 'AdminController@getWithdraw');
	Route::post('/admin/withdrawals','AdminController@postWithdraw');
	
	#工单相关
	Route::get('/admin/tickets/new', 'CopyController@autoNavi');
	Route::get('/admin/tickets', 'TicketController@ticketList');
	Route::post('/admin/tickets', 'TicketController@create');
	Route::post('/admin/tickets/{ticketId}/ticket_contents', 'TicketController@addContent');
	Route::get('/admin/tickets/{ticketId}', 'TicketController@detial');

	#订单相关
	Route::post('/admin/orders', 'OrderController@createOrder');
	Route::get('/admin/orders/{orderId}','OrderController@showOrder');
	Route::post('/admin/orders/payments/{orderId}','OrderController@payOrder');
	Route::get('/admin/order_pay_return', 'OrderController@payReturn');	

	#修改密码
	Route::post('/admin/user/update_password',"UserController@resetPassManual");
});

// Route::get('/admin/tickets/66959388', 'CopyController@autoNavi');
// Route::get('/admin/orders/288352400', 'CopyController@autoNavi');
// Route::get('/admin/orders/552661752', 'CopyController@autoNavi');
// Route::get('/admin/orders/808713164', 'CopyController@autoNavi'); 	//status ok
// Route::get('/admin/orders/012299937', 'CopyController@autoNavi');

// Route::get('/admin/orders/840400668', 'CopyController@autoNavi');  //确认订单支付页面
Route::get('/admin/mobile_configs/new', 'CopyController@autoNavi');
