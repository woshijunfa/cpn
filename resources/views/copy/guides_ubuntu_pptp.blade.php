@extends('layout.main')
@section('title', '天梯 VPN - 使用教程 - Ubuntu Linux PPTP 协议')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - Ubuntu Linux PPTP 协议
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
  <h4 class="title">Ubuntu Linux:</h4>
  <span class="active">
    <a href="ubuntu_pptp" class="btn btn-inverse">
      PPTP协议
</a>  </span>
  <span class="">
    <a href="ubuntu_l2tp" class="btn btn-inverse">
      L2TP协议
</a>  </span>
  <span>
    <a href="/guides/pptp_vs_l2tp" class="btn btn-inverse">
      PPTP和L2TP的区别
      <span class="label label-primary">帮助</span>
</a>  </span>
  <span class="back pull-right">
    <a href="/guides">
      <span>其他设备设置 »</span>
</a>  </span>
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
        <h3>配置 VPN</h3>
        <p class="height3">点击屏幕左上角 Network Connections 标志，在下拉选项里点击 "VPN Connections"，点击 "Configure VPN..." 进入 VPN 的设置</p>
      </div>
    </div>
    <div>
      <img alt="点击屏幕左上角的 Network Connections 标志，在下拉选项里点击 &quot;VPN Connections&quot;，点击 &quot;Configure VPN...&quot; 进入 VPN 的设置" class="img-border loader" src="/assets/steps/ubuntu/pptp/step1-5e0d5de44c42dee7ac27551e990546e7.jpg" title="配置 VPN" />
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
        <h3>添加 VPN</h3>
        <p class="height3">点击 "VPN" 菜单下右侧的 "Add" 按钮，添加 VPN 服务</p>
      </div>
    </div>
    <div>
      <img alt="点击 &quot;VPN&quot; 菜单下右侧的 &quot;Add&quot; 按钮，添加 VPN 服务" class="img-border loader" src="/assets/steps/ubuntu/pptp/step2-3f092a873412a03113c21ae62f0e502e.jpg" title="添加 VPN" />
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
        <h3>选择 VPN 类型</h3>
        <p class="height5">选择 "Point-to-Point Tunneling Protocol (PPTP)"，点击 "Create..." 按钮</p>
      </div>
    </div>
    <div>
      <img alt="选择 &quot;Point-to-Point Tunneling Protocol (PPTP)&quot;，点击 &quot;Create...&quot; 按钮" class="img-border loader" src="/assets/steps/ubuntu/pptp/step3-9c4132b829fad23026517c91110c3d63.jpg" title="选择 VPN 类型" />
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
        <h3>填写 VPN 帐号信息</h3>
        <p class="height5">"Connection name"栏中填入“天梯 VPN (PPTP)”；"Gateway"中填入服务器域名（<a href="/admin/servers" target="_blank">前往服务器列表页面查看</a>）；"User name"中填入你的VPN帐号用户名；"Password"中填入你的VPN帐号密码；最后点击"Advanced..."按钮</p>
      </div>
    </div>
    <div>
      <img alt="Connection name栏中填入天梯 VPN (PPTP)；Gateway中填入服务器域名（前往服务器列表页面查看）；User name中填入你的VPN帐号用户名；Password中填入你的VPN帐号密码；最后点击Advanced...按钮" class="img-border loader" src="/assets/steps/ubuntu/pptp/step4-3aa1ecba3a84da6fd178c620aaf5dcea.jpg" title="填写 VPN 帐号信息" />
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
        <h3>PPTP 高级选项</h3>
        <p>选中 "Use Point-to-Point encryption (MPPE)"，点击 "OK" 按钮</p>
      </div>
    </div>
    <div>
      <img alt="选中 &quot;Use Point-to-Point encryption (MPPE)&quot;，点击 &quot;OK&quot; 按钮" class="img-border loader" src="/assets/steps/ubuntu/pptp/step5-6debae735f02a1dcf5cbeb323072308b.jpg" title="PPTP 高级选项" />
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
        <h3>保存 VPN</h3>
        <p>点击 "Save..." 按钮</p>
      </div>
    </div>
    <div>
      <img alt="点击 &quot;Save...&quot; 按钮" class="img-border loader" src="/assets/steps/ubuntu/pptp/step6-fb0c0e0fd82cff6aa8f47cc73b133148.jpg" title="保存 VPN" />
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
        <p>点击 "VPN Connections" 下的“天梯 VPN (PPTP)”，开始连接 VPN</p>
      </div>
    </div>
    <div>
      <img alt="点击VPN Connections下的天梯 VPN (PPTP)，开始连接 VPN" class="img-border loader" src="/assets/steps/ubuntu/pptp/step7-c8089b14436ab2fc229302d1e2ea5a2f.jpg" title="连接 VPN" />
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
        <h3>连接成功</h3>
        <p>VPN 连接成功后系统会有提示信息，同时 Network Connections 上会有小锁的标志</p>
      </div>
    </div>
    <div>
      <img alt="VPN 连接成功后系统会有提示信息，同时 Network Connections 上会有小锁的标志" class="img-border loader" src="/assets/steps/ubuntu/pptp/step8-c32429a89a80b8cb45d47c0668eaf9ae.jpg" title="连接成功" />
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
