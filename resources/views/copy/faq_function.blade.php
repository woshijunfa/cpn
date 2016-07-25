@extends('layout.main')
@section('title', '天梯 VPN - 常见问题 - 功能问题')
@section('content')
  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  常见问题 - 功能问题
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
  <li class="">
    <a href="/faq">热门问题</a>
  </li>       
  <li class="active">
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

    <h3>功能问题</h3>
    <ol>
      <li>
        <a href="#Q1">VPN 是什么？</a>
      </li>      
      <li>
        <a href="#Q2">VPN 如何工作？</a>
      </li>      
      <li>
        <a href="#Q3">PPTP 和 L2TP 的区别</a>
      </li>      
      <li>
        <a href="#Q4">天梯支持哪些 VPN 协议？</a>
      </li>      
      <li>
        <a href="#Q5">天梯是否支持 IPv6？</a>
      </li>
      <li>
        <a href="#Q6">虚拟机可以使用 VPN 吗？</a>
      </li>
    </ol>

    <div id="Q1" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">1. VPN 是什么？</div>
      <div class="panel-body">
        VPN 可以通过特殊的加密通讯协议，在连接 Internet 上位于不同地方的两个或多个企业内部网之间建立一条专有的通讯线路；就好比是架设了一条专线，但它并不需要真正的去铺设光缆之类的物理线路；就像去电信局申请专线，但是不用给铺设线路的费用，也不用购买路由器等硬件设备。<br>
        VPN 技术原是路由器的重要技术之一，在交换机、防火墙设备或各大操作系统里也都支持 VPN 功能，VPN 的核心就是利用公共网络建立虚拟私有网。<br>
        通俗的说，如果你想不被别人探查到你的 IP 地址，如果你想访问大量原本无法登录的国外网站，如果你想更安全进行数据传输，请使用 VPN。
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>
    
    <div id="Q2" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">2. VPN 如何工作？</div>
      <div class="panel-body">
        VPN 创建一个安全的互联网连接，你的互联网服务商只能看到加密的数据，并最终访问的目标只看到天梯 VPN 的位置和 IP 信息。<br>
        <div class="text-center">
          <img alt="VPN 工作方式：1）没有VPN，未加密，网站看到你的地理位置和你的IP地址，你的网络服务商看到你正在访问的网站、你正在观看的视频、你给谁写邮件、你跟谁网上聊天、你的下载和上传；2）有VPN，加密的，网站看到天梯服务器的地理位置和IP地址，你的网络服务商只能看到天梯加密的通讯、没有网站的网址、视频、电子邮件、聊天记录或下载。" src="/assets/vpn_work-6b32131558fb549d17134b511b764984.png" />
        </div>
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>    
    
    <div id="Q3" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">3. PPTP</div>
      <div class="panel-body">
        PPTP（Point to Point Tunneling Protocol）点对点隧道协议：是一种主要用于 VPN 的数据链路层网络协议，PPTP 的协议规范本身并未描述加密或身份验证的特性。<br>
        L2TP（Layer Two Tunneling Protocol) 第二层隧道协议：是一种数据链路层隧道协议，通常用于虚拟专用网。L2TP 协议自身不对传输的数据进行加密，但是可以和加密协议搭配使用，从而实现数据的加密传输。经常与 L2TP 协议搭配的加密协议是 IPsec，当这两个协议搭配使用时，通常合称 L2TP/IPsec。
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>    

<!--     <div id="Q3" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">3. PPTP 和 L2TP 的区别</div>
      <div class="panel-body">
        最常见最流行的 VPN 协议包含 PPTP 协议和 L2TP/IPSec 协议。如果你希望设置简单，对通信安全没有太大的要求，那么你配置 PPTP 连接即可；如果你的网络里 PPTP 协议未被允许，或者希望数据通信更安全的话，就推荐设置 L2TP/IPSec 连接。在设置上，步骤基本一致，只是 L2TP/IPSec 协议需要输入共享密钥。<br>
        PPTP（Point to Point Tunneling Protocol）点对点隧道协议：是一种主要用于 VPN 的数据链路层网络协议，PPTP 的协议规范本身并未描述加密或身份验证的特性。<br>
        L2TP（Layer Two Tunneling Protocol) 第二层隧道协议：是一种数据链路层隧道协议，通常用于虚拟专用网。L2TP 协议自身不对传输的数据进行加密，但是可以和加密协议搭配使用，从而实现数据的加密传输。经常与 L2TP 协议搭配的加密协议是 IPsec，当这两个协议搭配使用时，通常合称 L2TP/IPsec。
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>    
 -->    
    <div id="Q4" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">4. 天梯支持哪些 VPN 协议？</div>
      <div class="panel-body">
        目前天梯支持 PPTP 和 L2TP/IPSec 协议。<br>
        PPTP 和 L2TP/IPSec 是行业标准，能覆盖绝大部分的设备，而且设置简单。<br>
        这两个协议在天梯各服务器上连接非常顺畅哦～
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>    
    
    <div id="Q5" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">5. 天梯是否支持 IPv6？</div>
      <div class="panel-body">
        目前天梯不支持 IPv6。<br>
        由于需要路由、网络运营商、访问的网站都支持 IPv6，大家才能顺畅的通过 IPv6 访问互联网；<br>
        目前海外的大部分 IPv6 线路，大都要到美国的 HE.net 绕一下，再达到目标服务器，不少地区的用户速度反而会变慢；<br>
        并且 Google 搜索针对单个 IPv6 地址后面的用户数有限制，同一台服务器用户稍多就会被 Google 误判为机器人程序，影响正常搜索。<br>
        天梯所有机房和服务器都支持 IPv6，等 IPv6 发展一段时间，解决了以上的局限性后，我们会立即推出相应的服务嗒～
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>    

    <div id="Q6" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">6. 虚拟机可以使用 VPN 吗？</div>
      <div class="panel-body">
        当然可以啦。<br>
        只需要根据虚拟机的操作系统，进行 VPN 设置就行啦～<br>
        需要注意的是，虚拟机网络要设置为 bridge(桥接)方式，不能是 NAT 方式哦。
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

</div>


      </div>
    </div>

  </div>
@stop
