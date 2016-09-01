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
        <li class="active">
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
        <li class="dropdown ">
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

      <div class="alert alert-info">
        <p>公告：天梯不限制普通下载，但因发达国家对 P2P 严格限制，请<strong class="text-danger">不要</strong>连着天梯使用 BT，迅雷，eMule，FlashGet 等 P2P 工具</p>
      </div>



            </div>
          </div>

          <div class="row">
              <div class="col-md-12">
                <div class="content-main">
                  
<h4 class="title-divider">
  <span>服务器</span>
</h4>

<style type="text/css">
  .domain {
    text-align: center;
    @if(!g_inVpnServie())display: none; @endif
  }

</style>

<div class="table-responsive">
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>国家/地区</th>
        <th>名称</th>
        <th class="domain">服务器</th>
        <th>实时状态</th>
        <th>协议</th>
        <th>概述</th>
      </tr>
    </thead>
    <tbody>

          <tr>
            <td rowspan="4" class="country-name">日本</td>
            <td >日本1号</td>
            <td class="domain">jp1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信良好。联通优秀。移动良好。</td>
          </tr>
<!--           <tr>
            <td class="domain">jp1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信良好。联通优秀。移动良好。</td>
          </tr>
 -->          <tr>
              <td >
                日本2号
              </td>
            <td class="domain">jp2.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信一般。联通良好。移动良好。</td>
          </tr>
<!--           <tr>
            <td class="domain">jp2.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信一般。联通良好。移动良好。</td>
          </tr>
 -->          <tr>
              <td >
                日本3号
              </td>
            <td class="domain">jp3.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信良好。联通良好。移动良好。</td>
          </tr>
<!--           <tr>
            <td class="domain">jp3.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信良好。联通良好。移动良好。</td>
          </tr>
 -->          <tr>
              <td >
                日本4号
              </td>
            <td class="domain">jp4.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信较差。联通良好。移动良好。</td>
          </tr>
<!--           <tr>
            <td class="domain">jp4.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信较差。联通良好。移动良好。</td>
          </tr>
 -->
          <tr>
              <td rowspan="6" class="country-name">美国</td>
              <td >
                美国1号
              </td>
            <td class="domain">us1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信良好。联通良好。移动优秀。</td>
          </tr>
<!--           <tr>
            <td class="domain">us1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信良好。联通良好。移动优秀。</td>
          </tr>
 -->          <tr>
              <td >
                美国2号
              </td>
            <td class="domain">us2.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信良好。联通良好。移动优秀。</td>
          </tr>
<!--           <tr>
            <td class="domain">us2.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信良好。联通良好。移动优秀。</td>
          </tr>
 -->          <tr>
              <td >
                美国3号
              </td>
            <td class="domain">us3.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信优秀。联通良好。移动优秀。</td>
          </tr>
<!--           <tr>
            <td class="domain">us3.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信优秀。联通良好。移动优秀。</td>
          </tr>
 -->          <tr>
              <td >
                美国4号
              </td>
            <td class="domain">us4.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信良好。联通一般。移动优秀。</td>
          </tr>
<!--           <tr>
            <td class="domain">us4.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信良好。联通一般。移动优秀。</td>
          </tr>
 -->          <tr>
              <td >
                美国5号
              </td>
            <td class="domain">us5.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信良好。联通较差。移动一般。</td>
          </tr>
<!--           <tr>
            <td class="domain">us5.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信良好。联通较差。移动一般。</td>
          </tr> -->
          <tr>
              <td >
                美国6号
              </td>
            <td class="domain">us6.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信优秀。联通优秀。移动优秀。</td>
          </tr>
<!--           <tr>
            <td class="domain">us6.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信优秀。联通优秀。移动优秀。</td>
          </tr> -->

          <tr>
              <td rowspan="2" class="country-name">新加坡</td>
              <td >
                新加坡1号
              </td>
            <td class="domain">sgp1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信一般。联通一般。移动良好。</td>
          </tr>
<!--           <tr>
            <td class="domain">sgp1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信一般。联通一般。移动良好。</td>
          </tr> -->
          <tr>
              <td >
                新加坡2号
              </td>
            <td class="domain">sgp2.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信一般。联通一般。移动良好。</td>
          </tr>
<!--           <tr>
            <td class="domain">sgp2.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信一般。联通一般。移动良好。</td>
          </tr> -->

          <tr>
              <td  class="country-name">台湾</td>
              <td >
                台湾1号
              </td>
            <td class="domain">tw1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信优秀。联通优秀。移动优秀。</td>
          </tr>
<!--           <tr>
            <td class="domain">tw1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信优秀。联通优秀。移动优秀。</td>
          </tr> -->

          <tr>
              <td rowspan="3" class="country-name">香港</td>
              <td >
                香港1号
              </td>
            <td class="domain">hk1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信优秀。联通良好。移动优秀。</td>
          </tr>
<!--           <tr>
            <td class="domain">hk1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信优秀。联通良好。移动优秀。</td>
          </tr>
 -->          <tr>
              <td >
                香港2号
              </td>
            <td class="domain">hk2.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信优秀。联通优秀。移动优秀。</td>
          </tr>
<!--           <tr>
            <td class="domain">hk2.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信优秀。联通优秀。移动优秀。</td>
          </tr> -->
          <tr>
              <td >
                香港3号
              </td>
            <td class="domain">hk3.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>电信一般。联通一般。移动良好。</td>
          </tr>
<!--           <tr>
            <td class="domain">hk3.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>电信一般。联通一般。移动良好。</td>
          </tr> -->

          <tr>
              <td  class="country-name">英国</td>
              <td >
                英国1号
              </td>
            <td class="domain">en1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>PPTP</td>
            <td>适合要英国或欧洲IP才能访问的互联网服务。</td>
          </tr>
<!--           <tr>
            <td class="domain">en1.tiantivpn.com</td>
            <td><span class="label label-working">正常</span></td>
            <td>L2TP</td>
            <td>适合要英国或欧洲IP才能访问的互联网服务。</td>
          </tr> -->
    </tbody>
  </table>
</div>



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
