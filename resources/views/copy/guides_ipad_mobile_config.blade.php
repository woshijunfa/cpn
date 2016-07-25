@extends('layout.main')
@section('title', '天梯 VPN - 使用教程 - iPad 一键安装')
@section('content')


  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - iPad 一键安装
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
      <span class="active">
        <a href="/guides/ipad_mobile_config" class="btn btn-inverse">
          一键安装
</a>      </span>
      <span>
        <a href="/guides/ipad_pptp" class="btn btn-inverse">
          手动配置
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
        <h3>下载并安装</h3>
        <p><a href="/admin/mobile_configs/new" target="_blank">下载一键安装配置文件</a>，然后点击“安装”按钮</p>
      </div>
    </div>
    <div>
      <img alt="下载一键安装配置文件，然后点击“安装”按钮" class="img-border loader-lg" src="/assets/steps/ipad/mobile_config/step1-5b74c957bad55ea68b1f94816b4b84db.jpg" title="下载并安装" />
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
        <h3>现在安装</h3>
        <p>点击“现在安装”</p>
      </div>
    </div>
    <div>
      <img alt="点击“现在安装”" class="img-border loader-lg" src="/assets/steps/ipad/mobile_config/step2-60808b704eb02237eba634b205511ea5.jpg" title="现在安装" />
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
        <h3>iPad 解锁密码</h3>
        <p>输入您 iPad 的解锁密码</p>
      </div>
    </div>
    <div>
      <img alt="输入您 iPad 的解锁密码" class="img-border loader-lg" src="/assets/steps/ipad/mobile_config/step3-79aa8e08bdd12798929dee031f89cd07.jpg" title="iPad 解锁密码" />
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
        <h3>安装成功</h3>
        <p>安装成功，点击右上角的“完成”</p>
      </div>
    </div>
    <div>
      <img alt="安装成功，点击右上角的“完成”" class="img-border loader-lg" src="/assets/steps/ipad/mobile_config/step4-7ba5aac737f9da6318c1b9206cad85ff.jpg" title="安装成功" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>5</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>VPN 配置列表</h3>
        <p>在“设置”中的“VPN”下，可以找到所有服务器 PPTP 和 L2TP/IPSec 协议的 VPN 配置</p>
      </div>
    </div>
    <div>
      <img alt="在“设置”中的“VPN”下，可以找到所有服务器 PPTP 和 L2TP/IPSec 协议的 VPN 配置" class="img-border loader-lg" src="/assets/steps/ipad/mobile_config/step5-fedc13dcb965e120fc674a215bca1456.jpg" title="VPN 配置列表" />
    </div>
  </div>
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>6</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>连接 VPN</h3>
        <p>选中您要连接的那台服务器，打开上方的连接按钮，状态改变为已连接</p>
      </div>
    </div>
    <div>
      <img alt="选中您要连接的那台服务器，打开上方的连接按钮，状态改变为已连接" class="img-border loader-lg" src="/assets/steps/ipad/mobile_config/step6-362ecda4ab99b767e3b051f9a841eece.jpg" title="连接 VPN" />
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
