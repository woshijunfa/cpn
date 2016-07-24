

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>天梯 VPN -   使用教程 - Ubuntu Linux PPTP 协议
</title>
  <meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:site" content="@VPNCloud" />
<meta name="twitter:creator" content="@VPNCloud">
<meta name="twitter:title" content="天梯 VPN" />
<meta name="twitter:description" content="天梯 VPN - 自动智能加速国内外访问，速度快又稳定，推荐给需要的人。" />
<meta name="twitter:image" content="https://www.yuntiprivaten.com/assets/twitter/image-ef62a4541213f068d2911972dec4fafd.png" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="天梯VPN提供专业的VPN服务，高速访问互联网，加密数据。注意：最近出现2个假冒天梯的诈骗网站，以.net或.cn域名结尾的均为诈骗网站，请勿上当。">
  <link href="/assets/application-ba00e5ba87186cd03f11989364793aba.css" media="all" rel="stylesheet" type="text/css" />
  <script src="/assets/application-747264b1f258f099732bfdc2eb002a17.js" type="text/javascript"></script>
  <link href="/assets/favicon-abbf6f81597af75480827c5780723875.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" />
  <link href="/assets/apple-touch-icon-120-b4b541276fc534ad439fa4569c204780.png" rel="apple-touch-icon" type="image/png" />
  <link href="/assets/apple-touch-icon-120-b4b541276fc534ad439fa4569c204780.png" rel="apple-touch-icon" size="120x120" type="image/png" />
  <link href="/assets/apple-touch-icon-152-d1bc0a50a1bf6c411223981a25cacc61.png" rel="apple-touch-icon" size="152x152" type="image/png" />
  <link href="/assets/apple-touch-icon-180-1dc084939a185aafc52020aba27a5586.png" rel="apple-touch-icon" size="180x180" type="image/png" />
  <meta content="authenticity_token" name="csrf-param" />
<meta content="GRWXcdNyTqSLRtq8P5Yo5A6TUjDnUcPbV7LnXI7HaF4=" name="csrf-token" />
  <!--[if lt IE 9]>
    <script src="/assets/respond.min-90a52119ad5d308111d0770e55da276c.js" type="text/javascript"></script>
  <![endif]-->
</head>
<body>
  <header id="header">
    <div class="user-nav">
  <div class="container">
    <div class="pull-right content">
        <span>
          <a href="https://www.yuntiprivaten.com/users/sign_in">登录</a>
        </span>
        <span>/</span>
        <span>
          <a href="https://www.yuntiprivaten.com/users/sign_up">注册</a>
        </span>
    </div>
  </div>
</div>

<div class="navbar navbar-default" role="navigation">
  <div class="container">

    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="/" class="navbar-brand logo">
        <span class="text-hide">天梯 VPN</span>
</a>    </div>

    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right main-menu">
        <li class="">
          <a href="/">
            <span>首页</span>
</a>        </li>              
        <li class="">
          <a href="/feature">
            <span>VPN 介绍</span>
</a>        </li>
        <li class=" highlight">
          <a href="/pricing">
            <span>选择套餐</span>
</a>        </li>
        <li class="active">
          <a href="/guides">
            <span>使用教程</span>
</a>        </li>
        <li class="">
          <a href="/faq">
            <span>常见问题</span>
</a>        </li>
      </ul>
    </div>

  </div>
</div>

  </header>

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - Ubuntu Linux PPTP 协议
</h1>
    </div>
  </div>

          </div>
        </div>
      </div>


    <div id="content">
      <div class="container">



          
<div class="row">
  <div class="col-md-12">
    <div class="step-nav">
  <h4 class="title">Ubuntu Linux:</h4>
  <span class="active">
    <a href="ubuntu_pptp" class="btn btn-inverse">
      PPTP协议
</a>  </span>
  <span class="">
    <a href="ubuntu_l2tp" class="btn btn-inverse">
      L2TP协议
</a>  </span>
  <span>
    <a href="/guides/pptp_vs_l2tp" class="btn btn-inverse">
      PPTP和L2TP的区别
      <span class="label label-primary">帮助</span>
</a>  </span>
  <span class="back pull-right">
    <a href="/guides">
      <span>其他设备设置 »</span>
</a>  </span>
</div>

  </div>
</div>

<div class="row">
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>1</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>配置 VPN</h3>
        <p class="height3">点击屏幕左上角 Network Connections 标志，在下拉选项里点击 "VPN Connections"，点击 "Configure VPN..." 进入 VPN 的设置</p>
      </div>
    </div>
    <div>
      <img alt="点击屏幕左上角的 Network Connections 标志，在下拉选项里点击 &quot;VPN Connections&quot;，点击 &quot;Configure VPN...&quot; 进入 VPN 的设置" class="img-border loader" src="/assets/steps/ubuntu/pptp/step1-5e0d5de44c42dee7ac27551e990546e7.jpg" title="配置 VPN" />
    </div>
  </div>
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>2</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>添加 VPN</h3>
        <p class="height3">点击 "VPN" 菜单下右侧的 "Add" 按钮，添加 VPN 服务</p>
      </div>
    </div>
    <div>
      <img alt="点击 &quot;VPN&quot; 菜单下右侧的 &quot;Add&quot; 按钮，添加 VPN 服务" class="img-border loader" src="/assets/steps/ubuntu/pptp/step2-3f092a873412a03113c21ae62f0e502e.jpg" title="添加 VPN" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>3</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>选择 VPN 类型</h3>
        <p class="height5">选择 "Point-to-Point Tunneling Protocol (PPTP)"，点击 "Create..." 按钮</p>
      </div>
    </div>
    <div>
      <img alt="选择 &quot;Point-to-Point Tunneling Protocol (PPTP)&quot;，点击 &quot;Create...&quot; 按钮" class="img-border loader" src="/assets/steps/ubuntu/pptp/step3-9c4132b829fad23026517c91110c3d63.jpg" title="选择 VPN 类型" />
    </div>
  </div>
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>4</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>填写 VPN 帐号信息</h3>
        <p class="height5">"Connection name"栏中填入“天梯 VPN (PPTP)”；"Gateway"中填入服务器域名（<a href="/admin/servers" target="_blank">前往服务器列表页面查看</a>）；"User name"中填入你的VPN帐号用户名；"Password"中填入你的VPN帐号密码；最后点击"Advanced..."按钮</p>
      </div>
    </div>
    <div>
      <img alt="Connection name栏中填入天梯 VPN (PPTP)；Gateway中填入服务器域名（前往服务器列表页面查看）；User name中填入你的VPN帐号用户名；Password中填入你的VPN帐号密码；最后点击Advanced...按钮" class="img-border loader" src="/assets/steps/ubuntu/pptp/step4-3aa1ecba3a84da6fd178c620aaf5dcea.jpg" title="填写 VPN 帐号信息" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>5</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>PPTP 高级选项</h3>
        <p>选中 "Use Point-to-Point encryption (MPPE)"，点击 "OK" 按钮</p>
      </div>
    </div>
    <div>
      <img alt="选中 &quot;Use Point-to-Point encryption (MPPE)&quot;，点击 &quot;OK&quot; 按钮" class="img-border loader" src="/assets/steps/ubuntu/pptp/step5-6debae735f02a1dcf5cbeb323072308b.jpg" title="PPTP 高级选项" />
    </div>
  </div>
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>6</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>保存 VPN</h3>
        <p>点击 "Save..." 按钮</p>
      </div>
    </div>
    <div>
      <img alt="点击 &quot;Save...&quot; 按钮" class="img-border loader" src="/assets/steps/ubuntu/pptp/step6-fb0c0e0fd82cff6aa8f47cc73b133148.jpg" title="保存 VPN" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>7</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>连接 VPN</h3>
        <p>点击 "VPN Connections" 下的“天梯 VPN (PPTP)”，开始连接 VPN</p>
      </div>
    </div>
    <div>
      <img alt="点击VPN Connections下的天梯 VPN (PPTP)，开始连接 VPN" class="img-border loader" src="/assets/steps/ubuntu/pptp/step7-c8089b14436ab2fc229302d1e2ea5a2f.jpg" title="连接 VPN" />
    </div>
  </div>
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>8</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>连接成功</h3>
        <p>VPN 连接成功后系统会有提示信息，同时 Network Connections 上会有小锁的标志</p>
      </div>
    </div>
    <div>
      <img alt="VPN 连接成功后系统会有提示信息，同时 Network Connections 上会有小锁的标志" class="img-border loader" src="/assets/steps/ubuntu/pptp/step8-c32429a89a80b8cb45d47c0668eaf9ae.jpg" title="连接成功" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="notification-info">
  <p>当无法连接 VPN 时，请参考 <a href="/faq/link#Q1">常见问题</a> 说明。</p>
</div>
  </div>
</div>


      </div>
    </div>

  </div>

  <footer id="footer">
    <div class="share">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class='social-share-button' data-title='天梯 VPN - 自动智能加速国内外访问，速度快又稳定，推荐给需要的人。' data-img=''
data-url='https://www.yuntiprivaten.com/guides/ubuntu_pptp' data-desc='' data-popup='true' data-via=''>
<a href="#" class="social-share-button-twitter" data-site="twitter" onclick="return SocialShareButton.share(this);" rel="nofollow " title="分享到 Twitter"></a>
<a href="#" class="social-share-button-facebook" data-site="facebook" onclick="return SocialShareButton.share(this);" rel="nofollow " title="分享到 Facebook"></a>
<a href="#" class="social-share-button-google_plus" data-site="google_plus" onclick="return SocialShareButton.share(this);" rel="nofollow " title="分享到 Google+"></a>
<a href="#" class="social-share-button-weibo" data-site="weibo" onclick="return SocialShareButton.share(this);" rel="nofollow " title="分享到 新浪微博"></a>
<a href="#" class="social-share-button-renren" data-site="renren" onclick="return SocialShareButton.share(this);" rel="nofollow " title="分享到 人人网"></a>
<a href="#" class="social-share-button-douban" data-site="douban" onclick="return SocialShareButton.share(this);" rel="nofollow " title="分享到 豆瓣"></a>
</div>
      </div>
    </div>
  </div>
</div>

<div class="totop">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <a href="#"></a>
      </div>
    </div>
  </div>
</div>

<div class="footer-divider"></div>

<div class="inverse footer-content">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h4>关于我们</h4>
        <div class="content">
          天梯致力于提供专业的 VPN 服务，用我们的技术和热情，为大家打造快速、安全、高效的 VPN 接入及解决方案，满足自由访问互联网、网络传输加密、保护隐私等多种需求。成熟的技术、专业的管理以及真诚的服务，让所有人都能享受开放的互联网。<br>
          天梯 VPN - 连接世界的梯子！<br>
          <br>
        </div>
      </div>
      <div class="col-md-3">
        <h4>常见问题</h4>
        <div class="hot-faq">
          <ul class="white-dots">
            <li>
              <a href="/faq/function#Q1">VPN 是什么</a>
            </li>
            <li>
            </li>
            <li>
              <a href="/faq">了解更多</a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-md-3">
        <h4>联系我们</h4>
        <div class="email"><a href="mailto:tiantivpn@163.com">tiantivpn@163.com</a></div>
        <h4>关注我们</h4>
        <div>
          <ul class="list-inline">
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
    </div>
  </div>
</div>

<div class="sub-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        &copy; 2016 天梯 VPN 版权所有
      </div>
      <div class="col-md-6 text-right"><a href="/terms_of_service">服务条款</a></div>
    </div>
  </div>
</div>

  </footer>

  
</body>
</html>

