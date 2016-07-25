@extends('layout.main')
@section('title', '天梯 VPN - 使用教程 -  Mac OS X L2TP 协议')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - Mac OS X L2TP 协议
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
<!--       <span>
        <a href="/guides/mac_os_mobile_config" class="btn btn-inverse">
          一键安装
</a>      </span>
      <span>
 -->        <a href="/guides/mac_os_pptp" class="btn btn-inverse">
          PPTP协议
</a>      </span>
      <span class="active">
        <a href="/guides/mac_os_l2tp" class="btn btn-inverse">
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
        <h3>系统偏好设置</h3>
        <p>点击电脑屏幕左上角的苹果标志，在下拉选项里点击“系统偏好设置...”，进入系统的设置</p>
      </div>
    </div>
    <div>
      <img alt="点击电脑屏幕左上角的苹果标志，在下拉选项里点击“系统偏好设置...”，进入系统的设置" class="img-border loader" src="/assets/steps/mac_os/l2tp/step1-aed304572188fc12284c1b0f605c9e55.jpg" title="系统偏好设置" />
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
        <h3>网络</h3>
        <p>点击“网络”图标，进入网络的设置</p>
      </div>
    </div>
    <div>
      <img alt="点击“网络”图标，进入网络的设置" class="img-border loader" src="/assets/steps/mac_os/l2tp/step2-204f4067752017d2ff5b20cb7d2bbdd9.jpg" title="网络" />
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
        <h3>添加 VPN 服务</h3>
        <p class="height3">点击左下方的“＋”号，添加 VPN 服务</p>
      </div>
    </div>
    <div>
      <img alt="点击左下方的“＋”号，添加 VPN 服务" class="img-border loader" src="/assets/steps/mac_os/l2tp/step3-14661d9c442f07803927bcb7e5a8062a.jpg" title="添加 VPN 服务" />
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
        <h3>接口，VPN 类型，服务名称</h3>
        <p class="height3">“接口”栏中选择“ VPN ”，选择后，下面的选项随之变化；“VPN 类型”栏中选择“ IPSec 上的 L2TP ”；”服务名称“中填入”天梯 VPN (L2TP)“；最后点击”创建“按钮</p>
      </div>
    </div>
    <div>
      <img alt="接口栏中选择VPN，选择后，下面的选项随之变化；VPN 类型栏中选择IPSec 上的 L2TP；服务名称中填入天梯 VPN (L2TP)；最后点击创建按钮" class="img-border loader" src="/assets/steps/mac_os/l2tp/step4-2ab13785ca4eaf18e892033db359b19d.jpg" title="接口，VPN 类型，服务名称" />
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
        <h3>服务器地址，帐户名称</h3>
        <p class="height3">”服务器地址“中填入服务器域名（<a href="/admin/servers" target="_blank">前往服务器列表页面查看</a>）；”帐户名称“中填入你的VPN帐号用户名；最后点击”鉴定设置...“按钮</p>
      </div>
    </div>
    <div>
      <img alt="”服务器地址“中填入服务器域名（前往服务器列表页面查看）；”帐户名称“中填入你的VPN帐号用户名；最后点击”鉴定设置...“按钮" class="img-border loader" src="/assets/steps/mac_os/l2tp/step5-80ddff2f1d4654fcc3fd2a0259e263ff.jpg" title="服务器地址，帐户名称" />
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
        <h3>密码，共享的密钥</h3>
        <p class="height3">”密码“中填入你的VPN帐号密码；”共享的密钥“中填入具体密钥（<a href="/admin" target="_blank">前往我的天梯首页查看共享密钥</a>）；最后点击”好“按钮</p>
      </div>
    </div>
    <div>
      <img alt="”密码“中填入你的VPN帐号密码；”共享的密钥“中填入具体密钥（前往我的天梯首页查看共享密钥）；最后点击”好“按钮" class="img-border loader" src="/assets/steps/mac_os/l2tp/step6-cf2aad47f5f2712bc964c7713a63ba0a.jpg" title="密码，共享的密钥" />
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
        <h3>高级</h3>
        <p>点击”高级...“按钮，对 VPN 的使用方式进行设置</p>
      </div>
    </div>
    <div>
      <img alt="点击”高级...“按钮，对 VPN 的使用方式进行设置" class="img-border loader" src="/assets/steps/mac_os/l2tp/step7-840a221c30832e6a328d0cf02056b000.jpg" title="高级" />
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
        <h3>通过 VPN 连接发送所有流量</h3>
        <p>选中”通过 VPN 连接发送所有流量“，然后点击”好“按钮</p>
      </div>
    </div>
    <div>
      <img alt="选中”通过 VPN 连接发送所有流量“，然后点击”好“按钮" class="img-border loader" src="/assets/steps/mac_os/l2tp/step8-1cd6c63c41c3cff6cba16e7a02ea1b9c.jpg" title="通过 VPN 连接发送所有流量" />
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
        <h3>连接</h3>
        <p class="height3">点击“连接”按钮，连接 VPN</p>
      </div>
    </div>
    <div>
      <img alt="点击“连接”按钮，连接 VPN" class="img-border loader" src="/assets/steps/mac_os/l2tp/step9-debdbf1c4ba5fbea02398f5166c19b7f.jpg" title="连接" />
    </div>
  </div>
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>10</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>连接成功</h3>
        <p class="height3">连接成功后的状态；建议勾选”在菜单栏中显示 VPN 状态“，可以在顶部菜单栏中显示连接情况，方便快速连接或断开 VPN</p>
      </div>
    </div>
    <div>
      <img alt="连接成功后的状态；建议勾选”在菜单栏中显示 VPN 状态“，可以在顶部菜单栏中显示连接情况，方便快速连接或断开 VPN" class="img-border loader" src="/assets/steps/mac_os/l2tp/step10-be87ae0b7f6c2e29a92782c87518ba87.jpg" title="连接成功" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>11</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>设置 DNS，防止 DNS 污染</h3>
        <p class="height3">在网络设置中，选中你的本地网络，如 Wi-Fi；点击“高级...”按钮，在 DNS 菜单下，添加 8.8.8.8 和 8.8.4.4 到 DNS 服务器中，最后点击“好”按钮</p>
      </div>
    </div>
    <div>
      <img alt="在网络设置中，选中你的本地网络，如 Wi-Fi；点击“高级...”按钮，在 DNS 菜单下，添加 8.8.8.8 和 8.8.4.4 到 DNS 服务器中，最后点击“好”按钮" class="img-border loader" src="/assets/steps/mac_os/l2tp/step11-f30b71d5c4202973cfa1fc67e8afa191.jpg" title="设置 DNS，防止 DNS 污染" />
    </div>
  </div>
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>12</strong>
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
