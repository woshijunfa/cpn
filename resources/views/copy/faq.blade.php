@extends('layout.main')
@section('title', '天梯 VPN - 常见问题 - 热门问题')
@section('content')
  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  常见问题 - 热门问题
</h1>
    </div>
  </div>

          </div>
        </div>
      </div>


    <div id="content">
      <div class="container">



          
<div class="row">

  <div class="col-md-3">
    <h4>常见问题分类</h4>
<ul class="sidenav">
  <li class="active">
    <a href="/faq">热门问题</a>
  </li>       
  <li class="">
    <a href="/faq/function">功能问题</a>
  </li>      
  <li class="">
    <a href="/faq/link">连接问题</a>
  </li>      
  <li class="">
    <a href="/faq/account">帐号问题</a>
  </li>      
  <li class="">
    <a href="/faq/shop">购买问题</a>
  </li>
  <li class="">
    <a href="/guides">使用教程</a>
  </li>
</ul>

  </div>

  <div class="col-md-9">

    <h3>热门问题</h3>
    <ol>
      <li>
        <a href="#Q1">智能加速、国内外分流是什么？</a>
      </li>
      <li>
        <a href="#Q2">天梯在哪些国家地区有服务器呢？</a>
      </li>
      <li>
        <a href="#Q3">月流量是怎么计算的？</a>
      </li>
      <li>
        <a href="#Q4">如果月流量超了怎么办呢？</a>
      </li>
      <li>
        <a href="#Q5">关于下载</a>
      </li>
      <li>
        <a href="#Q6">天梯的客服方式有哪些？</a>
      </li>
      <li>
        <a href="#Q7">天梯支持退款吗？</a>
      </li>
    </ol>

    <div id="Q1" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">1. 智能加速、国内外分流是什么？</div>
      <div class="panel-body">
        安装天梯智能加速后，连接天梯的 VPN 就能实现以下功能：<br>
        1. 国内网站的速度和不连接 VPN 一样快。<br>
        2. 国内网站的流量不计入 VPN 流量。<br>
        3. 国外网站依然通过 VPN，畅通无阻。<br>
        4. 操作系统全局分流，不仅浏览器，各种客户端软件同样享受分流功能，使用更轻松。<br>
        天梯智能加速支持 Windows, Mac OS X, Linux 主流操作系统。<br>
        请 <a href="/admin/speed_up" target="_blank">前往智能加速页面</a> 进行下载安装哦～
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q2" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">2. 天梯在哪些国家地区有服务器呢？</div>
      <div class="panel-body">
        目前天梯在：美国，日本，新加坡，台湾，香港，英国，都有服务器，而且速度都很快哦。<br>
        同时天梯正在持续购入全球更多地区机房的服务器，只要经过测试确认速度快、连接稳定的服务器，我们就会推出上线，敬请期待哦～
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q3" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">3. 月流量是怎么计算的？</div>
      <div class="panel-body">
        月流量是指当你的设备连上 VPN 后，该设备连接网络的所有流量都会被计入 VPN 的当月使用流量中。<br>
        当你的设备断开 VPN 后，流量就不会被计入了。<br>
        流量按自然月计算，月底清零。<br>
        购买成功后，你可以 <a href="/admin/accountings" target="_blank">前往连接页面</a> 查看你每天、每月的流量使用情况哦～<br>
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q4" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">4. 如果月流量超了怎么办呢？</div>
      <div class="panel-body">
        如果因为用光当月套餐流量而无法使用 VPN，也不用担心哦～<br>
        天梯提供自助升级套餐，支付完升级订单，立马又可以用上 VPN 啦！<br>
        <a href="/admin" target="_blank">前往我的天梯首页</a>，在侧边栏开通套餐的下方，就能找到“升级套餐”按钮哦～<br>
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q5" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">5. 关于下载</div>
      <div class="panel-body">
        天梯是不限制大家下载嗒，只要在你的套餐流量范围内即可。<br>
        不过，请不要使用 BT，eMule，迅雷，FlashGet， Tor 等 P2P 工具。<br>
        如果因 P2P 下载，天梯被机房投诉的话，会立刻取消该用户的服务且不退款哦，还请谅解呐～<br>
        如果你的确需要 P2P 方式下载，可暂时断开 VPN，结束后再连接哦。
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q6" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">6. 天梯的客服方式有哪些？</div>
      <div class="panel-body">
        天梯提供服务单和邮件2种客服方式：<br>
        1.大家有任何问题，可以 <a href="/admin/tickets" target="_blank">提交服务单</a>，天梯MM一定会尽快回复的。<br>
        2.如果还没有注册或无法登录“我的天梯”，可以邮件联系 <a href="mailto:tiantivpn@163.com">tiantivpn@163.com</a><br>
        另外，大家也可以关注天梯在各大社交网络的官方帐号（请见网站底部关注我们），有什么新消息，天梯都会第一时间告知大家嗒～
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q7" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">7. 天梯支持退款吗？</div>
      <div class="panel-body">
        用户受天梯3天全额退款政策保护，放心体验。详细信息请查看 <a href="/refund_policy" target="_blank">退款政策</a>
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>
  </div>
</div>


      </div>
    </div>

  </div>
@stop
