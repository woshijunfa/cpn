@extends('layout.main')
@section('title', '天梯 VPN - 使用教程 - Mac OS X 一键安装')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - Mac OS X 一键安装
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
      <h4 class="title">Mac OS X:</h4>
      <span class="active">
        <a href="/guides/mac_os_mobile_config" class="btn btn-inverse">
          一键安装
</a>      </span>
      <span>
        <a href="/guides/mac_os_pptp" class="btn btn-inverse">
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
        <h3>下载并运行</h3>
        <p><a href="/admin/mobile_configs/new" target="_blank">下载一键安装配置文件</a>，然后双击运行</p>
      </div>
    </div>
    <div>
      <img alt="下载一键安装配置文件，然后双击运行" class="img-border loader" src="/assets/steps/mac_os/mobile_config/step1-e64330d7dd2bb618b9c6a85804702d12.jpg" title="下载并运行" />
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
        <h3>安装</h3>
        <p>点击“安装”按钮</p>
      </div>
    </div>
    <div>
      <img alt="点击“安装”按钮" class="img-border loader" src="/assets/steps/mac_os/mobile_config/step2-78aee8ce670d5f97f6ec09b4387ada27.jpg" title="安装" />
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
        <h3>电脑密码</h3>
        <p>输入您电脑的密码</p>
      </div>
    </div>
    <div>
      <img alt="输入您电脑的密码" class="img-border loader" src="/assets/steps/mac_os/mobile_config/step3-9489baefdc438a50c11241535bfbf83f.jpg" title="电脑密码" />
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
        <p>安装成功，在“系统偏好设置”中可以找到“天梯 VPN 配置”的描述文件；然后点击“全部显示”按钮，回到“系统偏好设置”</p>
      </div>
    </div>
    <div>
      <img alt="安装成功，在“系统偏好设置”中可以找到“天梯 VPN 配置”的描述文件；然后点击“全部显示”按钮，回到“系统偏好设置”" class="img-border loader" src="/assets/steps/mac_os/mobile_config/step4-3a4e58c56abbb107ffd77423863f5a6d.jpg" title="安装成功" />
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
        <h3>网络</h3>
        <p class="height3">在“系统偏好设置”中的“网络”下，可以找到所有服务器 PPTP 和 L2TP/IPSec 协议的 VPN 配置</p>
      </div>
    </div>
    <div>
      <img alt="在“系统偏好设置”中的“网络”下，可以找到所有服务器 PPTP 和 L2TP/IPSec 协议的 VPN 配置" class="img-border loader" src="/assets/steps/mac_os/mobile_config/step5-44dd73d8033cb50e4c044b1a00586437.jpg" title="网络" />
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
        <h3>在菜单栏中显示 VPN 状态</h3>
        <p class="height3">选中任意一个 VPN 配置，然后勾选”在菜单栏中显示 VPN 状态“，这样可以在顶部菜单栏中显示连接情况，方便快速连接或断开 VPN</p>
      </div>
    </div>
    <div>
      <img alt="选中任意一个 VPN 配置，然后勾选”在菜单栏中显示 VPN 状态“，这样可以在顶部菜单栏中显示连接情况，方便快速连接或断开 VPN" class="img-border loader" src="/assets/steps/mac_os/mobile_config/step6-2b4bc4269938b476c104e8820a7d1e88.jpg" title="在菜单栏中显示 VPN 状态" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>7</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>连接 VPN</h3>
        <p class="height3">点击顶部菜单栏上的 VPN 图标，点击您要连接的那台服务器，连接 VPN；连接成功后，会在对应的 VPN 配置右侧显示连接时间</p>
      </div>
    </div>
    <div>
      <img alt="点击顶部菜单栏上的 VPN 图标，点击您要连接的那个 VPN 配置，连接 VPN；连接成功后，会在对应的 VPN 配置右侧显示连接时间" class="img-border loader" src="/assets/steps/mac_os/mobile_config/step7-13330161d5a7d88471152f154e1263b2.jpg" title="连接 VPN" />
    </div>
  </div>
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>8</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>设置 DNS，防止 DNS 污染</h3>
        <p class="height3">在网络设置中，选中你的本地网络，如 Wi-Fi；点击“高级...”按钮，在 DNS 菜单下，添加 8.8.8.8 和 8.8.4.4 到 DNS 服务器中，最后点击“好”按钮</p>
      </div>
    </div>
    <div>
      <img alt="在网络设置中，选中你的本地网络，如 Wi-Fi；点击“高级...”按钮，在 DNS 菜单下，添加 8.8.8.8 和 8.8.4.4 到 DNS 服务器中，最后点击“好”按钮" class="img-border loader" src="/assets/steps/mac_os/mobile_config/step8-f30b71d5c4202973cfa1fc67e8afa191.jpg" title="设置 DNS，防止 DNS 污染" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>9</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>清除 DNS 缓存</h3>
        <p class="height1">
          打开 Terminal，根据你的系统版本运行对应的命令：
        </p>
        <p>
          Mac OS X 10.11<br>
          <code>sudo killall -HUP mDNSResponder</code>
        </p>
        <p>
          Mac OS X 10.10.4 以上<br>
          <code>sudo killall -HUP mDNSResponder</code>
        </p>
        <p>
          Mac OS X 10.10.0 - 10.10.3<br>
          <code>sudo discoveryutil mdnsflushcache</code>
        </p>
        <p>
          Mac OS X 10.7 & 10.8 & 10.9<br>
          <code>sudo killall -HUP mDNSResponder</code>
        </p>
        <p>
          Mac OS X 10.6<br>
          <code>dscacheutil -flushcache</code>
        </p>
      </div>
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
