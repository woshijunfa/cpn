<!DOCTYPE html>
<html class="" lang="zh" data-attr-t="" lang-t="lang"><head>
    <meta charset="utf-8">
    <meta name="Author" content="ShareApi">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title data-t="pages.pricing">@yield('title',"shareapi")</title>
    <link rel="stylesheet" href="css/api/font-76acbbfc18.css">
    <link rel="stylesheet" href="css/api/app-fb11c4c526.css">
    <script src="/js/jquery.min.js"></script>
</head>

  <body class="price-plan-stacky" data-whatinput="mouse">
    <div class="top-bar-wrapper">
      <div class="row column">
    <div class="title-bar show-for-small-only">
        <button id="hamburger" class="menu-icon" type="button" data-toggle=""></button>
        <div class="title-bar-title"><a href="/" data-attr-t="" href-t="route.root"><div class="top-bar__logo"></div></a></div>
    </div>
    
    <div class="top-bar hide-for-small-only">
      <div class="top-bar-title">
        <a href="/" data-attr-t="" href-t="route.root"><div class="top-bar__logo"></div></a>
      </div>
      <div class="top-bar-right">
        <ul class="dropdown menu" data-dropdown-menu="i1n8gy-dropdown-menu" role="menubar">

        @if($userInfo = \Auth::user())
          <li role="menuitem"><a href="#" data-t="top-nav.login">{{$userInfo->email or '' }}</a></li>
          <li role="menuitem"><a href="/logout" data-t="top-nav.login">退出</a></li>
        @else
          <li role="menuitem"><a href="/login" data-t="top-nav.login">登入</a></li>
          <li role="menuitem"><a href="/register" class="button cta hollow small" data-t="top-nav.signup">注册</a></li>
        @endif

        </ul>
      </div>
    </div>
    
      </div>
    </div>
    <div class="mobile-nav show-for-small-only" id="sidebar-menu">
      <ul>
        <li><a href="products" data-t="top-nav.features">功能和场景</a></li>
        <li><a href="customers" data-t="top-nav.testimonial">客户案例</a></li>
        <li class="divider"><a href="pricing" data-t="top-nav.pricing">费用</a></li>
        <li><a href="financing" data-t="top-nav.financing">分期支付</a></li>
        <li><a href="apple-pay">Apple Pay</a></li>
        <li class="divider"><a href="dashboard" data-t="top-nav.dashboard">管理平台</a></li>
        <li><a href="https://help.pingxx.com" target="_blank" data-t="top-nav.help">帮助中心</a></li>
        <li class="divider"><a href="docs/" data-t="top-nav.documentation">开发者中心</a></li>
        <li><a href="https://dashboard.pingxx.com/login" data-t="top-nav.login">登入</a></li>
        <li class="divider"><a href="https://dashboard.pingxx.com/register" data-t="top-nav.signup">注册</a></li>
      </ul>
    </div>
    <div class="ui-mask"></div>
    
    <section class="hero no-padding-with-bottom">
      <div class="row">
            @yield('content')
      </div>
    </section>
    
    <footer>
      <div class="row collapse">
        <div class="small-12 medium-expand columns">
          <ul class="menu">
<!--             <li><a href="/status" data-t="footer.status">系统状态</a></li>
            <li><a href="https://help.pingxx.com/" data-t="footer.help" target="_blank">帮助中心</a></li>
            <li><a href="/docs" data-t="top-nav.devcenter" data-attr-t="" href-t="route.docsroot">开发者中心</a></li>
            <li><a href="/about" data-t="footer.about" data-attr-t="" href-t="routeEn.about">关于</a></li>
            <li><a href="/career" data-t="footer.career" data-attr-t="" href-t="routeEn.career">招聘</a></li>
            <li><a href="/media" data-t="footer.media" data-attr-t="" href-t="routeEn.media">媒体</a></li> -->
            <li><a href="#" data-t="footer.contact">联系我们 邮箱：service@shareapi.cn</a></li>
            <!-- <li><a href="/terms" data-t="footer.legal">法律条款</a></li> -->
          </ul>
          <p class="xsmall">© ShareApi 
          <!-- <span class="beian">沪 ICP 备 xxxxx 号 - 1</span> -->
          </p>
        </div>
      </div>
    </footer>
</body></html>

