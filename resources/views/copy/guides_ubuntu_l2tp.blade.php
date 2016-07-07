

<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>天梯 VPN -   使用教程 - Ubuntu Linux L2TP 协议
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
      <h1>  使用教程 - Ubuntu Linux L2TP 协议
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
  <span class="">
    <a href="ubuntu_pptp" class="btn btn-inverse">
      PPTP协议
</a>  </span>
  <span class="active">
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
        <h3>安装 l2tp-ipsec-vpn</h3>
        <p class="height3">
          在 terminal 中执行以下命令，当遇到下图对话框时，选择"No"：<br>
          <code>sudo apt-get install l2tp-ipsec-vpn</code><br>
          <code>sudo shutdown -r now</code>
        </p>
      </div>
    </div>
    <div>
        <img alt="在 terminal 中执行以下命令，当遇到下图对话框时，选择&quot;No&quot;" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step1-830cbe73db5a4b313db12fa1c57c05c9.jpg" title="安装 l2tp-ipsec-vpn" />
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
        <h3>配置 VPN</h3>
        <p class="height3">右键点击屏幕左上角 l2tp-ipsec-vpn 标志，在下拉选项里点击"Edit Connections"进入 VPN 的设置</p>
      </div>
    </div>
    <div>
      <img alt="右键点击屏幕左上角 l2tp-ipsec-vpn 标志，在下拉选项里点击&quot;Edit Connections&quot;进入 VPN 的设置" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step2-da3e42e16205d01eac971ecce0cb14b8.jpg" title="配置 VPN" />
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
        <h3>添加 VPN</h3>
        <p>点击右侧的"Add"按钮，"Connection name"栏中填入"VPNCloud_L2TP"</p>
      </div>
    </div>
    <div>
      <img alt="点击右侧的&quot;Add&quot;按钮，&quot;Connection name&quot;栏中填入&quot;VPNCloud_L2TP&quot;" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step3-6ddaf69c29db8890ed08d351467bd620.jpg" title="添加 VPN" />
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
        <h3>编辑 VPNCloud_L2TP</h3>
        <p>选中列表中的"VPNCloud_L2TP"，点击右侧的"Edit"按钮</p>
      </div>
    </div>
    <div>
      <img alt="选中列表中的&quot;VPNCloud_L2TP&quot;，点击右侧的&quot;Edit&quot;按钮" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step4-721eeb4d2dd7d5041f7dcea7e70a7e01.jpg" title="编辑 VPNCloud_L2TP" />
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
        <h3>填写 VPN 服务器和域名</h3>
        <p class="height4">IPsec 标签下，"Remote Server"中填入服务器域名（<a href="/admin/servers" target="_blank">前往服务器列表页面查看</a>）；“Use pre-shared key for authentication”中填入具体密钥（<a href="/admin" target="_blank">前往我的天梯首页查看共享密钥</a>）</p>
      </div>
    </div>
    <div>
      <img alt="IPsec 标签下，&quot;Remote Server&quot;中填入服务器域名（前往服务器列表页面查看）；“Use pre-shared key for authentication”中填入具体密钥（前往我的天梯首页查看共享密钥）" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step5-16f003add839a9ded25add49bc12685f.jpg" title="填写 VPN 服务器和域名" />
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
        <h3>设置 VPN 协议及填写帐号信息</h3>
        <p class="height4">点击 PPP 标签，选中"Allow these protocols"，并只勾选列表中的"Microsoft CHAP Version 2 (MS-CHAPv2)"；"User name"中填入你的VPN帐号用户名；"Password"中填入你的VPN帐号密码；最后点击"IP settings..."按钮</p>
      </div>
    </div>
    <div>
      <img alt="点击 PPP 标签，选中 &quot;Allow these protocols&quot;，并只勾选列表中的 &quot;Microsoft CHAP Version 2 (MS-CHAPv2)&quot;；&quot;User name&quot;中填入你的VPN帐号用户名；&quot;Password&quot;中填入你的VPN帐号密码；最后点击&quot;IP settings...&quot;按钮" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step6-b6d05ebd1b5fc9dcbe6a296de635c36c.jpg" title="设置 VPN 协议及填写帐号信息" />
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
        <h3>IP 设置</h3>
        <p>勾选"Obtain DNS server addresses automatically"，点击"OK"按钮</p>
      </div>
    </div>
    <div>
      <img alt="勾选&quot;Obtain DNS server addresses automatically&quot;，点击&quot;OK&quot;按钮" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step7-b68d93b5aadff489d1687e718eb7cd7b.jpg" title="IP 设置" />
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
        <h3>关闭窗口，让设置生效</h3>
        <p>一定要点击"Close"按钮，并点击弹出框内的"OK"按钮，设置才会生效</p>
      </div>
    </div>
    <div>
      <img alt="一定要点击&quot;Close&quot;按钮，并点击弹出框内的&quot;OK&quot;按钮，设置才会生效" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step8-2c42fd22e7de48a832e2667d965dc9a3.jpg" title="关闭窗口，让设置生效" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>9</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>连接 VPN</h3>
        <p class="height3">右键点击 l2tp-ipsec-vpn 标志，点击"VPNCloud_L2TP"连接 VPN；如果连接不上，可以重启 l2tp-ipsec-vpn 或者重启系统后再连接</p>
      </div>
    </div>
    <div>
      <img alt="右键点击 l2tp-ipsec-vpn 标志，点击&quot;VPNCloud_L2TP&quot;连接 VPN；如果连接不上，可以重启 l2tp-ipsec-vpn 或者重启系统后再连接" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step9-1c8416bbd650f2ccf4cac69a7e576df7.jpg" title="连接 VPN" />
    </div>
  </div>
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>10</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>连接成功</h3>
        <p class="height3">VPN 连接成功后 l2tp-ipsec-vpn 标志上就没有红叉；右键点击标志可进行 Disconnect 等操作</p>
      </div>
    </div>
    <div>
      <img alt="VPN 连接成功后 l2tp-ipsec-vpn 标志上就没有红叉；右键点击标志可进行 Disconnect 等操作" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step10-85b47f2ac8b70e82643198b521cc6720.jpg" title="连接成功" />
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
data-url='https://www.yuntiprivaten.com/guides/ubuntu_l2tp' data-desc='' data-popup='true' data-via=''>
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
          <p>注意：最近出现2个假冒天梯进行诈骗的网站。识别方法：以 .net 或 .cn 域名结尾的均为诈骗网站，提供 QQ 号的也均为诈骗网站，已有人被骗钱财，请勿上当。</p>
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
              <a href="/faq/function#Q3">PPTP 和 L2TP 的区别</a>
            </li>
            <li>
              <a href="/faq">了解更多</a>
            </li>
          </ul>
        </div>
        <h4 class="ytstatus"><a href="https://www.ytstatus.com" target="_blank">天梯VPN - 服务状态</a></h4>
      </div>
      <div class="col-md-3">
        <h4>联系我们</h4>
        <div class="email"><a href="mailto:support@vpncloudmail.com">support@vpncloudmail.com</a></div>
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

