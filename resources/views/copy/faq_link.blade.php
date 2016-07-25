@extends('layout.main')
@section('title', '天梯 VPN - 常见问题 - 连接问题')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  常见问题 - 连接问题
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
  <li class="">
    <a href="/faq/function">功能问题</a>
  </li>      
  <li class="active">
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

    <h3>连接问题</h3>
    <ol>
      <li>
        <a href="#Q1">当无法连接 VPN 时，怎么办？</a>
      </li>      
      <li>
        <a href="#Q2">VPN 连接成功，却无法打开部分国外网站？</a>
      </li>      
      <li>
        <a href="#Q3">为什么 VPN 会经常自动断开？</a>
      </li> 
      <li>
        <a href="#Q4">为什么觉得 VPN 速度慢？</a>
      </li> 
      <li>
        <a href="#Q5">长城宽带连接 VPN 的各种问题</a>
      </li> 
      <li>
        <a href="#Q6">如何查找 VPN 无法连接的原因？</a>
      </li>        
    </ol>

    <div id="Q1" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">1. 当无法连接 VPN 时，怎么办？</div>
      <div class="panel-body">
        当你无法连接 VPN 时，请先不要着急，绝大部分情况都是设置或者本地网络的原因，请先尝试以下方式：<br>
        1. 检查以下内容是否填写正确：用户名（<span class="label label-danger">不是</span>邮箱），密码，服务器域名；<a href="/admin" target="_blank">前往我的天梯首页</a>，在侧边栏下方可以查看你的帐号信息。<br>
        2. 尝试分别用 PPTP 和 L2TP/IPSec 两种协议进行连接。<br>
        3. 尝试连接多台不同的服务器。<br>
        4. 设置 L2TP/IPsec 协议的 VPN 时，正确填写密钥，注意区分大小写；<a href="/admin" target="_blank">前往我的天梯首页</a>，在侧边栏下方可以点击查看密钥。<br>
        5. 在本地网络下 ping 各台服务器域名，查看延时和丢包率，判断你的网络到天梯服务器是否畅通。<br>
        如果以上方法都无法解决问题，请 <a href="/admin/tickets" target="_blank">提交服务单</a> 说明具体的情况，天梯MM一定会尽快回复的。
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>
    
    <div id="Q2" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">2. VPN 连接成功，却无法打开部分国外网站？</div>
      <div class="panel-body">
        当你连上了 VPN，部分国外网站却无法打开或者打开很慢，请先尝试以下方式：<br>
        1. 将本地连接的 DNS 设置为 google 的 8.8.8.8 和 8.8.4.4 并清除 DNS 缓存；方法请见各桌面操作系统的使用教程最后3步设置。<br>
        2. 检查是否在本地 /etc/hosts (Mac OS X, Linux) 或者 C:\Windows\system32\drivers\etc\hosts (Windows) 中对某些域名做了设置；如果有，请清除。<br>
        3. 检查浏览器是否安装了代理类的插件（如 AutoProxy）；如果有，请禁用或者移除，并重启浏览器。<br>
        4. 检查系统是否安装了其它代理类工具（如 GoAgent）；如果有，请关闭或者卸载，并重启系统。<br>
        5. 如果系统是 Mac OS X，检查 VPN 设置是否勾选上“通过 VPN 连接发送所有流量”（请见使用教程第8步）。<br>
        6. 换另一个协议进行尝试。<br>
        7. 换多台不同的服务器进行尝试。<br>
        如果以上方法都无法解决问题，请 <a href="/admin/tickets" target="_blank">提交服务单</a> 说明具体的情况，天梯MM一定会尽快回复的。
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>
    
    <div id="Q3" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">3. 为什么 VPN 会经常自动断开？</div>
      <div class="panel-body">
        这通常是本地网络到天梯服务器之间，有丢包率较高的网关导致的。部分小运营商还会动态切换国际出口，导致原来的链路断开。<br>
        请在本地网络下 ping 各台服务器的域名，查看延时和丢包情况，选择你的网络下效果最佳（延时小，丢包率低）的服务器进行连接哦～
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>
    
    <div id="Q4" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">4. 为什么觉得 VPN 速度慢？</div>
      <div class="panel-body">
        天梯所有服务器的带宽都在50M~250M，速度都很快，所以实际连接速度取决于你的网络运营商分配给你的国际出口带宽。<br>
        此外，各个网络运营商的优势线路也不同，你可以根据 <a href="/admin/servers" target="_blank">服务器列表页面</a> 中的概述，来选择你的网络运营商的优势线路。<br>
        你也可以在本地网络下 ping 各台服务器的域名，查看延时和丢包情况，选择你的网络下效果最佳（延时小，丢包率低）的服务器进行连接哦～
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>
    
    <div id="Q5" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">5. 长城宽带连接 VPN 的各种问题</div>
      <div class="panel-body">
        因为长城宽带是从电信、联通租用网络，国际出口是在联通和电信之间动态切换，比较复杂。<br>
        根据天梯使用长城宽带的用户反映，该网络下连接 VPN 问题比较多（包括无法连接 VPN，连接后速度非常慢，ping 服务器丢包100%等）。<br>
        可以通过调小 MTU 来解决大部分问题。<br>
        如果是桌面操作系统（如 Mac OS，Windows, Linux），可以将本地网络的 MTU 设置得比标准值小，然后尝试连接。
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q6" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">6. 如何查找 VPN 无法连接的原因？</div>
      <div class="panel-body">
        通常 VPN 无法连接都是设置或者本地网络的原因，可以通过以下方式进行判断：<br>
        假设你的电脑在 Wi-Fi 下无法连接 VPN <br>
        1. 使用同一网络下的其他设备（比如手机），尝试连接 VPN<br>
        如果情况一样，可能是本地网络（Wi-Fi）的原因；<br>
        如果情况不同，可能是电脑上的设置有问题。<br>
        2. 使用同一设备（比如手机），换一个网络环境（比如从 Wi-Fi 换成 3G），尝试连接 VPN<br>
        如果情况一样，可能是手机上的设置有问题；<br>
        如果情况不同，可能是本地网络（Wi-Fi）的原因。
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
