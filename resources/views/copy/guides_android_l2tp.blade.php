@extends('layout.main')
@section('title', '使用教程 - Android 安卓 L2TP 协议')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - Android 安卓 L2TP 协议
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
      <h4 class="title">Android 安卓:</h4>
      <span>
        <a href="/guides/android_pptp" class="btn btn-inverse">
          PPTP协议
</a>      </span>
      <span class="active">
        <a href="/guides/android_l2tp" class="btn btn-inverse">
          L2TP协议
</a>      </span>
      <span>
        <a href="/guides/android_2_pptp" class="btn btn-inverse">
          Android 2.3 使用教程
</a>      </span>
      <span>
        <a href="/guides/pptp_vs_l2tp" class="btn btn-inverse">
          PPTP和L2TP的区别
          <span class="label label-primary">帮助</span>
</a>      </span>
      <span class="back pull-right">
        <a href="/guides">
          <span>其他设备设置 »</span>
</a>      </span>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 step">
    <div class="row">
      <div class="col-md-3">
        <div class="step-no">
          <strong>1</strong>
        </div>
      </div>
      <div class="col-md-9 step-content">
        <h3>设置，无线和网络</h3>
        <p>进入系统设置，点击“无线和网络”底部的“更多...”</p>
      </div>
    </div>
    <div>
      <img alt="进入系统设置，点击“无线和网络”底部的“更多...”" class="img-border loader" src="/assets/steps/android/l2tp/step1-8def215ddbf65a98aa9b9d5ec8de7dbc.jpg" title="设置，无线和网络" />
    </div>
  </div>
  <div class="col-md-4 step">
    <div class="row">
      <div class="col-md-3">
        <div class="step-no">
          <strong>2</strong>
        </div>
      </div>
      <div class="col-md-9 step-content">
        <h3>VPN</h3>
        <p>点击"VPN"，设置和管理 VPN</p>
      </div>
    </div>
    <div>
      <img alt="点击&quot;VPN&quot;，设置和管理 VPN" class="img-border loader" src="/assets/steps/android/l2tp/step2-23ad042f97dc5a4e59157614768c1f64.jpg" title="VPN" />
    </div>
  </div>
  <div class="col-md-4 step">
    <div class="row">
      <div class="col-md-3">
        <div class="step-no">
          <strong>3</strong>
        </div>
      </div>
      <div class="col-md-9 step-content">
        <h3>添加 VPN</h3>
        <p>点击顶部"+"添加 VPN</p>
      </div>
    </div>
    <div>
      <img alt="点击顶部&quot;+&quot;添加 VPN" class="img-border loader" src="/assets/steps/android/l2tp/step3-24b327e5e6ad4ecbd8b6af4fd5c9521c.jpg" title="添加 VPN" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 step">
    <div class="row">
      <div class="col-md-3">
        <div class="step-no">
          <strong>4</strong>
        </div>
      </div>
      <div class="col-md-9 step-content">
        <h3>编辑 L2TP VPN</h3>
        <p class="height7">“名称”栏中填入"天梯 VPN (L2TP)"；“类型”选择"L2TP/IPSec PSK"；“服务器地址”栏中填入服务器域名（<a href="/admin/servers" target="_blank">前往服务器列表页面查看</a>）；“IPSec 预共享密钥” 中填入具体密钥（<a href="/admin" target="_blank">前往我的天梯首页查看共享密钥</a>）；点击“保存”按钮</p>
      </div>
    </div>
    <div>
      <img alt="名称栏中填入天梯 VPN (L2TP)；类型选择L2TP/IPSec PSK；服务器地址栏中填入服务器域名（前往服务器列表页面查看）；IPSec 预共享密钥中填入具体密钥（前往我的天梯首页查看共享密钥）；点击保存按钮" class="img-border loader" src="/assets/steps/android/l2tp/step4-1f4f43497dff5d6abcd00b23fe740252.jpg" title="编辑 L2TP VPN" />
    </div>
  </div>
  <div class="col-md-4 step">
    <div class="row">
      <div class="col-md-3">
        <div class="step-no">
          <strong>5</strong>
        </div>
      </div>
      <div class="col-md-9 step-content">
        <h3>设置成功</h3>
        <p class="height7">VPN 列表中会看到刚设置的 "天梯 VPN (L2TP)"，点击登录</p>
      </div>
    </div>
    <div>
      <img alt="VPN 列表中会看到刚设置的天梯 VPN (L2TP)，点击登录" class="img-border loader" src="/assets/steps/android/l2tp/step5-6c52e0ed49ff37d752d06600681a391b.jpg" title="设置成功" />
    </div>
  </div>
  <div class="col-md-4 step">
    <div class="row">
      <div class="col-md-3">
        <div class="step-no">
          <strong>6</strong>
        </div>
      </div>
      <div class="col-md-9 step-content">
        <h3>连接</h3>
        <p class="height7">"用户名"栏中填入你的VPN帐号用户名，"密码"栏中填入你的VPN帐号密码，然后点击“连接”按钮</p>
      </div>
    </div>
    <div>
      <img alt="&quot;用户名&quot;栏中填入你的VPN帐号用户名，&quot;密码&quot;栏中填入你的VPN帐号密码，然后点击“连接”按钮" class="img-border loader" src="/assets/steps/android/l2tp/step6-2a3277fab0e7cd76b3a5d678153b9d2a.jpg" title="连接" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-4 step">
    <div class="row">
      <div class="col-md-3">
        <div class="step-no">
          <strong>7</strong>
        </div>
      </div>
      <div class="col-md-9 step-content">
        <h3>连接成功</h3>
        <p>连接成功后，VPN 列表中会显示“已连接”</p>
      </div>
    </div>
    <div>
      <img alt="连接成功后，VPN 列表中会显示“已连接”" class="img-border loader" src="/assets/steps/android/l2tp/step7-4bb9d766822513867182f9f8c889aa60.jpg" title="连接成功" />
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
@stop
