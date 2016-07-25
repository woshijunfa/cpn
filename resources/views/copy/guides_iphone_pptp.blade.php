@extends('layout.main')
@section('title', '天梯 VPN - 使用教程 - iPhone PPTP 协议')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - iPhone PPTP 协议
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
      <h4 class="title">iPhone:</h4>
<!--       <span>
        <a href="/guides/iphone_mobile_config" class="btn btn-inverse">
          一键安装
</a>      </span>
 -->      <span class="active">
        <a href="/guides/iphone_pptp" class="btn btn-inverse">
          PPTP协议
</a>      </span>
      <span>
        <a href="/guides/iphone_l2tp" class="btn btn-inverse">
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
  <div class="col-md-4 step">
    <div class="row">
      <div class="col-md-3">
        <div class="step-no">
          <strong>1</strong>
        </div>
      </div>
      <div class="col-md-9 step-content">
        <h3>设置，通用</h3>
        <p>点击“设置”，进入系统的设置，点击“通用”</p>
      </div>
    </div>
    <div>
      <img alt="点击“设置”，进入系统的设置，点击“通用”" class="img-border loader-lg" src="/assets/steps/iphone/pptp/step1-5a4d93f7961c9131d55e1771e12a0abb.jpg" title="设置，通用" />
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
        <p>点击“ VPN ”，进入 VPN 设置</p>
      </div>
    </div>
    <div>
      <img alt="点击“ VPN ”，进入 VPN 设置" class="img-border loader-lg" src="/assets/steps/iphone/pptp/step2-58398f6149019eae3d226a95a4277933.jpg" title="VPN" />
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
        <h3>添加 VPN 配置</h3>
        <p>点击“添加 VPN 配置... ”，进入 VPN 配置</p>
      </div>
    </div>
    <div>
      <img alt="点击“添加 VPN 配置... ”，进入 VPN 配置" class="img-border loader-lg" src="/assets/steps/iphone/pptp/step3-b1f37c5e79ca57da3f4e37f2c9fdddb9.jpg" title="添加 VPN 配置" />
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
        <h3>VPN 配置信息</h3>
        <p class="height7">协议类型选择“ PPTP ”；“描述”栏中填入“天梯 VPN (PPTP)”；“服务器”栏中填入服务器域名（<a href="/admin/servers" target="_blank">前往服务器列表页面查看</a>）；“帐户”栏中填入你的VPN用户名；“密码”栏中填入填入你的VPN密码；然后点右上角的"存储"按钮</p>
      </div>
    </div>
    <div>
      <img alt="协议类型选择PPTP；描述栏中填入天梯 VPN (PPTP)；服务器栏中填入服务器域名（前往服务器列表页面查看）；帐户栏中填入你的VPN用户名；密码栏中填入填入你的VPN密码；然后点右上角的存储按钮" class="img-border loader-lg" src="/assets/steps/iphone/pptp/step4-ab0d5dc424e437f79044caed6aa65507.jpg" title="VPN 配置信息" />
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
        <h3>连接</h3>
        <p class="height7">VPN 配置中会看到刚设置的"天梯 VPN (PPTP)"，选中后打开上方的 VPN 连接，状态改变为已连接</p>
      </div>
    </div>
    <div>
      <img alt="VPN 配置中会看到刚设置的天梯 VPN (PPTP)，选中后打开上方的 VPN 连接，状态改变为已连接" class="img-border loader-lg" src="/assets/steps/iphone/pptp/step5-42b267471a259bb2f070a8835426f98d.jpg" title="连接" />
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
        <h3>快速连接</h3>
        <p class="height7">VPN 配置成功后，在系统设置中会看到 VPN 的连接，可以快速连接或断开 VPN</p>
      </div>
    </div>
    <div>
      <img alt="VPN 配置成功后，在系统设置中会看到 VPN 的连接，可以快速连接或断开 VPN" class="img-border loader-lg" src="/assets/steps/iphone/pptp/step6-f73cf451357f4da46fdeaf5538500ece.jpg" title="快速连接" />
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
