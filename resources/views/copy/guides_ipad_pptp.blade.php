@extends('layout.main')
@section('title', '天梯 VPN - 使用教程 - iPad PPTP 协议')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - iPad PPTP 协议
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
      <h4 class="title">iPad:</h4>
<!--       <span>
        <a href="/guides/ipad_mobile_config" class="btn btn-inverse">
          一键安装
</a>      </span>
 -->      <span class="active">
        <a href="/guides/ipad_pptp" class="btn btn-inverse">
          PPTP协议
</a>      </span>
      <span>
        <a href="/guides/ipad_l2tp" class="btn btn-inverse">
          L2TP协议
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
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>1</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>设置，通用，VPN</h3>
        <p>点击桌面上的“设置”图标，进入系统的设置；点击左侧设置中的“通用”，再点击右侧的“ VPN ”，进入 VPN 设置</p>
      </div>
    </div>
    <div>
      <img alt="点击桌面上的“设置”图标，进入系统的设置；点击左侧设置中的“通用”，再点击右侧的“ VPN ”，进入 VPN 设置" class="img-border loader-lg" src="/assets/steps/ipad/pptp/step1-42c06d6e18dfbac0cd8630f9776a6ae5.jpg" title="设置，通用，VPN" />
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
        <h3>添加 VPN 配置</h3>
        <p>点击右侧 VPN 中的“添加 VPN 配置... ”，进入 VPN 配置</p>
      </div>
    </div>
    <div>
      <img alt="点击右侧 VPN 中的“添加 VPN 配置... ”，进入 VPN 配置" class="img-border loader-lg" src="/assets/steps/ipad/pptp/step2-b3bf75317bce0df388e2938cf78af016.jpg" title="添加 VPN 配置" />
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
        <h3>VPN 配置信息</h3>
        <p class="height4">协议类型选择“ PPTP ”；“描述”栏中填入“天梯 VPN (PPTP)”；“服务器”栏中填入服务器域名（<a href="/admin/servers" target="_blank">前往服务器列表页面查看</a>）；“帐户”栏中填入你的VPN用户名；“密码”栏中填入你的VPN密码；然后点右上角的"存储"按钮</p>
      </div>
    </div>
    <div>
      <img alt="协议类型选择PPTP；描述栏中填入天梯 VPN (PPTP)；服务器栏中填入服务器域名（前往服务器列表页面查看）；帐户栏中填入你的VPN用户名；密码栏中填入你的VPN密码；然后点右上角的存储按钮" class="img-border loader-lg" src="/assets/steps/ipad/pptp/step3-b4a5e9628e373c0f98c4325876747628.jpg" title="VPN 配置信息" />
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
        <h3>连接</h3>
        <p class="height4">VPN 配置中会看到刚设置的"天梯 VPN (PPTP)"，选中后打开上方的 VPN 连接，状态改变为已连接；VPN 配置成功后，在左侧设置中会看到 VPN 的连接，可以快速连接或断开 VPN</p>
      </div>
    </div>
    <div>
      <img alt="VPN 配置中会看到刚设置的天梯 VPN (PPTP)，选中后打开上方的 VPN 连接，状态改变为已连接；VPN 配置成功后，在左侧设置中会看到 VPN 的连接，可以快速连接或断开 VPN" class="img-border loader-lg" src="/assets/steps/ipad/pptp/step4-34561e0ef7dde79099f1d6e4717697bc.jpg" title="连接" />
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
