<!DOCTYPE html>
<html style="height: 100%;">
<head>
    <meta charset="utf-8" />
    <title>@yield('title','shareapi')</title>
    <meta name="description" content=""/>
    <meta name="keywords" content="shareapi 短信验证码"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
    <link rel="stylesheet" type="text/css" href="/css/style.css"/>

    <link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
    <script src="/js/jquery.min.js"></script>
</head>
<body style="height: 100%;">
<div class="i_login">
    <div class="il_nav" id="il_nav">
        <a href="/" target="_self" class="logo">Ping++</a>
    </div>
    <div class="il_wrap" id="il_wrap">

            @yield('content')

<!--        <div class="il_box login_box">
            <form id="login_form">
            <div class="il_body">
                <h4>登 录</h4>
                <div class="form-group">
                    <label class="sr-only" for="username">登录</label>
                    <input class="form-control" id="username" autofocus="autofocus" type="email" placeholder="请输入邮箱" />
                </div>
                <div class="form-group">
                    <label class="sr-only" for="password">Email address</label>
                    <input class="form-control" id="password" type="password" placeholder="密码" />
                </div>
            </div>
            <div class="il_btn clearfix">
                <button type="submit" id="loginBtn" class="btn btnBlack btn-block" disabled="disabled">登录</button>
                <a href="https://dashboard.pingxx.com/page/auto/resetPassword" class="retrieve">忘记密码</a>
                <a href="https://dashboard.pingxx.com/register" class="reg">注册账户</a>
            </div>
            </form>
        </div>
-->        
    </div>

    <div class="il_footer" id="il_footer">
        <div class="wrapper">
            <div class="row">
                <ul class="pull-left">
<!--                     <li><a href="https://pingxx.com/about" target="_blank">关于我们</a></li>
                    <li><a href="https://pingxx.com/docs/overview" target="_blank">开发文档</a></li>
                    <li><a href="https://pingxx.com/terms#terms" target="_blank">服务协议</a></li>
                    <li><a href="https://pingxx.com/terms#privacy" target="_blank">隐私政策</a></li> -->
                </ul>
                <div class="icp pull-right">
                    <!-- 沪 ICP 备 xxxxx 号 -1 --> <a href="/" target="_self">&copy; shareApi</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
    if (!String.prototype.trim) {
        String.prototype.trim = function () {
            return this.replace(/^[\s\uFEFF\xA0]+|[\s\uFEFF\xA0]+$/g, '');
        };
    }
    if (!String.prototype.isEmail) {
        String.prototype.isEmail = function () {
            emailReg = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/i;
            return emailReg.test(this);
        };
    }
    $(function(){
        var boxH = $('#il_nav').outerHeight() + $('#il_wrap').outerHeight() + $('#il_footer').outerHeight() + 15;
        var windowH = $(window).height();
        var wrapperH = windowH - boxH;
        if(boxH < windowH) {
            $('#il_wrap').css({
                'margin-top': wrapperH / 3
            });
        }
    });
</script>
</body>
</html>
