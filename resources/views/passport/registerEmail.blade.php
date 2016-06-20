<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <meta charset="utf-8" />
    <title>欢迎选择ShareApi，请验证您的邮箱</title>
    <meta name="description" content=""/>
    <meta name="keywords" content="shareapi 短信验证码"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
	<link rel="stylesheet" href="/css/bootstrap.min.css">
	<script src="/js/jquery.min.js"></script>
	<script src="/js/bootstrap.min.js"></script>
   </head>
<body>

<div style="text-align:center;padding-top:40px;">
	
<p>欢迎加入 ShareApi</p>
<p>在开始使用之前，请确认你的邮箱账号</p>
<p>你可以在 24 小时内点击下面的「确认账号」按钮来进行确认。</p>
<a type="button" class="btn btn-success" href="{{ \Config::get('app.url') . '/active/account?uuid=' . $uuid}}">确认账号</a>

<p>如果按钮无效，请将以下链接复制到浏览器地址栏完成激活。</p>
<a href="{{ \Config::get('app.url') . '/active/account?uuid='. $uuid}}">	
	<p>{{ \Config::get('app.url') . '/active/account?uuid=' . $uuid}}</p>
</a>
</div>

</body>
</html>