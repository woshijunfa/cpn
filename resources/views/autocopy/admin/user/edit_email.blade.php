<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>我的天梯 - 连接世界的梯子</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link href="/assets/admin/application-9f768e098914f1cdef1ea20aff65e5e8.css" media="all" rel="stylesheet" type="text/css" />
  <script src="/assets/admin/application-40918f78e6d69713e29a232d269f7e7f.js" type="text/javascript"></script>
  <!--[if lt IE 9]>
    <script src="/assets/respond.min-90a52119ad5d308111d0770e55da276c.js" type="text/javascript"></script>
    <script src="/assets/html5shiv-56a04a17c785fcc4d1bd9a73a417e2d7.js" type="text/javascript"></script>
  <![endif]-->
  <link href="/assets/favicon-abbf6f81597af75480827c5780723875.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link href="/assets/apple-touch-icon-120-b4b541276fc534ad439fa4569c204780.png" rel="apple-touch-icon" type="image/png" />
  <link href="/assets/apple-touch-icon-120-b4b541276fc534ad439fa4569c204780.png" rel="apple-touch-icon" size="120x120" type="image/png" />
  <link href="/assets/apple-touch-icon-152-d1bc0a50a1bf6c411223981a25cacc61.png" rel="apple-touch-icon" size="152x152" type="image/png" />
  <link href="/assets/apple-touch-icon-180-1dc084939a185aafc52020aba27a5586.png" rel="apple-touch-icon" size="180x180" type="image/png" />
  <meta content="authenticity_token" name="csrf-param" />
<meta content="NeaRyjJM41mLMZch87q3glbNbqEcctietz+l75jMJ8k=" name="csrf-token" />
</head>
<body>
  <div id="wrapper">
    <nav class="navbar navbar-default navbar-fixed-top" data-dropdown="dropdown" role="banner">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>

      <a href="/admin" class="navbar-brand">我的天梯</a>
    </div>

    <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
      <ul class="nav navbar-nav">
        <li class="">
          <a href="/admin">
            <i class="fa fa-home"></i>
            <span class="name">首页</span>
</a>        </li>
        <li class="">
          <a href="/admin/accountings">
            <i class="fa fa-link"></i>
            <span class="name">连接</span>
</a>        </li>
        <li class="">
          <a href="/admin/orders">
            <i class="fa fa-file-text-o"></i>
            <span class="name">订单</span>
</a>        </li>
        <li class="">
          <a href="/admin/servers">
            <i class="fa fa-globe"></i>
            <span class="name">服务器</span>
</a>        </li>
        <li class="">
          <a href="/admin/speed_up">
            <i class="fa fa-code-fork"></i>
            <span class="name">智能加速</span>
</a>        </li>
        <li class="">
          <a href="/admin/documents">
            <i class="fa fa-book"></i>
            <span class="name">帮助中心</span>
</a>        </li>
        <li class="">
          <a href="/admin/tickets">
            <i class="fa fa-comments-o"></i>
            <span class="name">联系客服</span>
</a>        </li>
          <li class="">
            <a href="/admin/referral">
              <i class="fa fa-thumbs-o-up"></i>
              <span class="name">推荐</span>
</a>          </li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li>
          <a href="/" target="_blank">
            <i class="fa fa-external-link-square"></i>
            <span class="name">天梯首页</span>
</a>        </li>
        <li class="dropdown active">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-user"></i>
            <span class="name">帐户<b class="caret"></b></span>
          </a>
          <ul class="dropdown-menu">
            <li><a href="/admin/user/edit">修改密码</a></li>
            <li class="divider"></li>
            <li><a href="/admin/credit_account">主帐户</a></li>
              <li><a href="/admin/credit_referral">推荐帐户</a></li>
            <li class="divider"></li>
            <li><a href="/users/sign_out" data-method="delete" id="sign-out" rel="nofollow">退出</a></li>
          </ul>
        </li>
      </ul>
    </nav>
  </div>
</nav>


    <div class="container">

      <div class="content">


        <div class="page-content">
          <div class="row">
            <div class="col-md-12">
              



      <div class="alert alert-warning">
        <p>建议你把当前网址加入收藏夹，方便下次安全地登录。</p>
        <hr>
        <p>如果你想把天梯推荐给朋友或网友，建议附上推荐链接，这样你的朋友不会在诈骗网站上当，而且，你和你的朋友每次都能获得10元优惠。<a href="/admin/referral">了解详情</a></p>
      </div>




            </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                <div class="content-main">
                  <h4 class="title-divider">
</h4>

<div class="form-container-small">
  <form accept-charset="UTF-8" action="/admin/user/update_email" class="simple_form form-horizontal" id="edit_user" method="post" novalidate="novalidate"><div style="margin:0;padding:0;display:inline"><input name="utf8" type="hidden" value="&#x2713;" /><input name="authenticity_token" type="hidden" value="NeaRyjJM41mLMZch87q3glbNbqEcctietz+l75jMJ8k=" /></div>
    <div class="form-inputs">
      <div class="form-group">
        <label class="col-sm-2 control-label">当前邮箱</label>
        <div class="col-sm-10">
          <p class="form-control-static">chenjunfa1988@yeah.net</p>
        </div>
      </div>
      <div class="form-group email required user_email"><label class="email required col-sm-2 control-label" for="user_email"><abbr title="必填">*</abbr> 新邮箱</label><div class="col-sm-10"><input autocapitalize="none" autocomplete="off" autocorrect="off" class="string email required form-control form-control" id="user_email" name="user[email]" size="50" type="email" /></div></div>
      <div class="form-group password optional user_current_password"><label class="password optional col-sm-2 control-label" for="user_current_password">天梯密码</label><div class="col-sm-10"><input class="password optional form-control" id="user_current_password" name="user[current_password]" size="50" type="password" /><p class="help-block">需要验证你的天梯密码，防止邮箱被误改</p></div></div>
    </div>
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
      </div>
    </div>
</form></div>

                </div>
              </div>
          </div>
        </div>
      </div>

      <footer>
        <div class="row">
          <div class="col-md-6 social-container">
            <div>关注天梯：</div>
            <div><ul class="list-inline">
  <li>
    <a href="https://twitter.com/VPNCloud" target="_blank">
      <img alt="Twitter" src="/assets/twitter-e374f98f346e1afc5f16f75d643d61b0.png" title="Twitter" />
</a>  </li>
  <li>
    <a href="https://www.facebook.com/pages/天梯-VPNCloudme/411548455548359" target="_blank">
      <img alt="Facebook" src="/assets/facebook-f99f324c6abcb9e88ee3c921c404b136.png" title="Facebook" />
</a>  </li>
  <li>
    <a href="https://plus.google.com/+天梯" target="_blank"><img alt="Google Plus" src="/assets/gplus-7688b4f4dfe029c38c29b1b5044e7701.png" title="Google Plus" /></a>  </li>
  <li>
    <a href="http://weibo.com/yuntimm" target="_blank">
      <img alt="新浪微博" src="/assets/weibo-e435db2a3ceceb91c5f3c66d990f5be8.png" title="新浪微博" />
</a>  </li>
  <li>
    <a href="http://page.renren.com/601470925" target="_blank">
      <img alt="人人网" src="/assets/renren-02e7feeebdeafd6c782af6742a7ba597.png" title="人人网" />
</a>  </li>
</ul>
</div>
          </div>
          <div class="col-md-6">
            <p class="powered-by pull-right">&copy; 2016 天梯 VPN</p>
          </div>
        </div>
      </footer>

    </div>
  </div>
@include('public.baidu')
</body>
</html>
