@extends('layout.main')
@section('title', '天梯 VPN - 常见问题 - 购买问题')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  常见问题 - 购买问题
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
  <li class="">
    <a href="/faq/account">帐号问题</a>
  </li>      
  <li class="active">
    <a href="/faq/shop">购买问题</a>
  </li>
  <li class="">
    <a href="/guides">使用教程</a>
  </li>
</ul>

  </div>

  <div class="col-md-9">

    <h3>购买问题</h3>
    <ol>
      <li>
        <a href="#Q1">如何升级套餐？</a>
      </li>
      <li>
        <a href="#Q2">提供包月套餐吗？</a>
      </li>
      <li>
        <a href="#Q3">支付方式包括哪些？</a>
      </li>
      <li>
        <a href="#Q4">如何退款？</a>
      </li>
      <li>
        <a href="#Q5">如何取消未支付的订单？</a>
      </li>
    </ol>

    <div id="Q1" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">1. 如何升级套餐？</div>
      <div class="panel-body">
        <a href="/admin" target="_blank">前往我的天梯首页</a>，在侧边栏开通套餐的下方，就能找到“升级套餐”按钮哦～<br>
        1. 点击“升级套餐”按钮，选择你希望升级到的套餐。<br>
        2. 系统自动根据你当前服务的剩余有效期和套餐差价，计算出升级费用，生成一张订单。<br>
        3. 支付该升级订单后，服务自动升级到新套餐。
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q2" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">2. 提供包月套餐吗？</div>
      <div class="panel-body">
        天梯不提供包月套餐。<br>
        大家可以购买天梯的小流量版套餐，平均下来每个月才15元钱而已哦～
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q3" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">3. 支付方式包括哪些？</div>
      <div class="panel-body">
        天梯支持在线购买，你可以直接在网站上下单，使用微信，银联等付款。
        </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q4" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">4. 如何退款？</div>
      <div class="panel-body">
        用户受天梯3天全额退款政策保护，放心体验。详细信息请查看 <a href="/refund_policy" target="_blank">退款政策</a>
      </div>
      <div class="panel-footer panel-footer-sm text-right">
        <a href="#">返回顶部</a>
      </div>
    </div>

    <div id="Q5" class="panel panel-basic">
      <div class="panel-heading panel-heading-sm">5. 如何取消未支付的订单？</div>
      <div class="panel-body">
        如果订单在7天内未支付的话，系统会自动取消，还请放心哦～
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
