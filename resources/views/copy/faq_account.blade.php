@extends('layout.main')
@section('title', '天梯 VPN - 常见问题 - 帐号问题')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  常见问题 - 帐号问题
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
  <li class="">
    <a href="/faq/link">连接问题</a>
  </li>      
  <li class="active">
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

    <h3>帐号问题</h3>
    <ol>
      <li>
        <a href="#Q1">同个帐号可以在多个设备上同时使用吗？</a>
      </li>      
      <li>
        <a href="#Q2">不支持多人合用同个帐号</a>
      </li>        
    </ol>

    <div id="Q1" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">1. 同个帐号可以在多个设备上同时使用吗？</div>
      <div class="panel-body">
        各个套餐有不同的设备同时在线数量，请根据你购买的套餐内容使用服务哦。<br>
        同个帐号多设备同时在线是指，你可以在同一时间，让自己的多个设备都保持 VPN 连接。<br>
        多个 VPN 连接可以在同一台服务器或不同的服务器。
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q2" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">2. 不支持多人合用同个帐号（企业版套餐除外）</div>
      <div class="panel-body">
        天梯考虑到大家有多个设备，电脑，手机，平板之类的，所以支持多个设备同时登录，方便大家使用。<br>
        但是，天梯不允许多人长期合用同个帐号嗒（企业版套餐除外）。<br>
        因为天梯套餐的价格已经非常优惠，平均每个月才20元钱，一顿饭都不止呐。<br>
        另外就是，合用的话流量不太好分摊么。<br>
        如果发现多人长期合用同个帐号的话，系统会取消服务且不退款的哦，希望大家注意和理解呐。
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
