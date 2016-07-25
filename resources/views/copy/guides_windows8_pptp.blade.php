@extends('layout.main')
@section('title', '天梯 VPN - 使用教程 - Windows 8 PPTP 协议')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - Windows 8 PPTP 协议
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
  <h4 class="title">Windows 8:</h4>
  <span class="active">
    <a href="windows8_pptp" class="btn btn-inverse">
      PPTP协议
</a>  </span>
  <span class="">
    <a href="windows8_l2tp" class="btn btn-inverse">
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
        <h3>控制面板</h3>
        <p><span class="label label-danger">右键</span>点击桌面左下角的 Windows 图标，再点击“控制面板”，进入控制面板的设置</p>
      </div>
    </div>
    <div>
      <img alt="右键点击桌面左下角的 Windows 图标，再点击“控制面板”，进入控制面板的设置" class="img-border loader" src="/assets/steps/windows8/pptp/step1-3e6c755aa33ef88221676ba0bc7b7cb9.jpg" title="控制面板" />
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
        <h3>网络和 Internet</h3>
        <p>点击“网络和 Internet”文字，进入网络和 Internet的设置</p>
      </div>
    </div>
    <div>
      <img alt="点击“网络和 Internet”文字，进入网络和 Internet的设置" class="img-border loader" src="/assets/steps/windows8/pptp/step2-684e716f366a9af63674267748e45338.jpg" title="网络和 Internet" />
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
        <h3>网络和共享中心</h3>
        <p>点击“网络和共享中心”文字，进入网络和共享中心的设置</p>
      </div>
    </div>
    <div>
      <img alt="点击“网络和共享中心”文字，进入网络和共享中心的设置" class="img-border loader" src="/assets/steps/windows8/pptp/step3-ffe1d79b76d573089ad1fee5348963a4.jpg" title="网络和共享中心" />
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
        <h3>设置新的连接或网络</h3>
        <p>点击“设置新的连接或网络”文字</p>
      </div>
    </div>
    <div>
      <img alt="点击“设置新的连接或网络”文字" class="img-border loader" src="/assets/steps/windows8/pptp/step4-0cf0feb84bb1d3ace4d189d108ba077f.jpg" title="设置新的连接或网络" />
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
        <h3>连接到工作区</h3>
        <p>选择“连接到工作区”，然后点击“下一步”按钮</p>
      </div>
    </div>
    <div>
      <img alt="选择“连接到工作区”，然后点击“下一步”按钮" class="img-border loader" src="/assets/steps/windows8/pptp/step5-f06f32b146be1166b8560e2c959a1339.jpg" title="连接到工作区" />
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
        <h3>使用我的 Internet 连接(VPN)</h3>
        <p>点击“使用我的 Internet 连接(VPN)”文字</p>
      </div>
    </div>
    <div>
      <img alt="点击“使用我的 Internet 连接(VPN)”文字" class="img-border loader" src="/assets/steps/windows8/pptp/step6-b5d28ca3a67bc2b881cd1a95acdc887f.jpg" title="使用我的 Internet 连接(VPN)" />
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
        <h3>Internet 地址，目标名称</h3>
        <p class="height3">“Internet 地址”中填入服务器域名（<a href="/admin/servers" target="_blank">前往服务器列表页面查看</a>）；“目标名称”中填入“天梯 VPN (PPTP)”；然后点击“创建”按钮</p>
      </div>
    </div>
    <div>
      <img alt="Internet 地址中填入服务器域名（前往服务器列表页面查看）；目标名称中填入天梯 VPN (PPTP)；然后点击创建按钮" class="img-border loader" src="/assets/steps/windows8/pptp/step7-87853422fdb3bbf721cdf3b60b77e3bd.jpg" title="Internet 地址，目标名称" />
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
        <h3>连接</h3>
        <p class="height3">点击 Charm 栏中刚创建的“天梯 VPN (PPTP)”，然后点击“连接”按钮</p>
      </div>
    </div>
    <div >
      <img alt="点击 Charm 栏中刚创建的天梯 VPN (PPTP)，然后点击“连接”按钮" class="img-border loader" src="/assets/steps/windows8/pptp/step8-82d740aaadd3742695dacca389cec4d9.jpg" title="连接" />
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
        <h3>用户名和密码</h3>
        <p>“用户名”中填入你的VPN帐号用户名；“密码”中填入你的VPN帐号密码；然后点击“确定”按钮，连接 VPN</p>
      </div>
    </div>
    <div>
      <img alt="“用户名”中填入你的VPN帐号用户名；“密码”中填入你的VPN帐号密码；然后点击“确定”按钮，连接 VPN" class="img-border loader" src="/assets/steps/windows8/pptp/step9-66ce1674367eed9bd6da6746cac5ae71.jpg" title="用户名和密码" />
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
        <p>连接成功</p>
      </div>
    </div>
    <div>
      <img alt="连接成功" class="img-border loader" src="/assets/steps/windows8/pptp/step10-f11eb8e891270def1ca59f042dad7da4.jpg" title="连接成功" />
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
        <h3>快速连接和断开</h3>
        <p class="height4">点击桌面右下角的网络图标，可以在 Charm 栏中找到所有 VPN 配置，方便快速连接和断开 VPN</p>
      </div>
    </div>
    <div>
      <img alt="点击桌面右下角的网络图标，可以在 Charm 栏中找到所有 VPN 配置，方便快速连接和断开 VPN" class="img-border loader" src="/assets/steps/windows8/pptp/step11-54c0a4e4ecc8fa76304f9bea30dacd88.jpg" title="快速连接和断开" />
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
        <h3>打开本地连接属性</h3>
        <p class="height4">在“控制面板 -> 网络和 Internet -> 网络和共享中心 -> 更改适配器设置”中找到本地连接（Wi-Fi 或者 Ethernet），右键点击，然后点击“属性”；点击"Internet 协议版本4（TCP/IPv4）"，点击“属性”按钮</p>
      </div>
    </div>
    <div>
      <img alt="在“控制面板 -&gt; 网络和 Internet -&gt; 网络和共享中心 -&gt; 更改适配器设置”中找到本地连接（Wi-Fi 或者 Ethernet），右键点击，然后点击“属性”；点击&quot;Internet 协议版本4（TCP/IPv4）&quot;，点击“属性”按钮" class="img-border loader" src="/assets/steps/windows8/pptp/step12-d20a4936f86f62456ad411f71f2e1896.jpg" title="打开本地连接属性" />
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>13</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>设置 DNS，防止 DNS 污染</h3>
        <p class="height3">选中“使用下面的 DNS 服务器地址”，“首选 DNS 服务器”中填写 8.8.8.8，“备用 DNS 服务器”中填写 8.8.4.4，然后点击“确定”按钮</p>
      </div>
    </div>
    <div>
      <img alt="选中“使用下面的 DNS 服务器地址”，“首选 DNS 服务器”中填写 8.8.8.8，“备用 DNS 服务器”中填写 8.8.4.4，然后点击“确定”按钮" class="img-border loader" src="/assets/steps/windows8/pptp/step13-fae19d8eefd826ab226386294338d59b.jpg" title="设置 DNS，防止 DNS 污染" />
    </div>
  </div>
  <div class="col-md-6 step">
    <div class="row">
      <div class="col-md-2">
        <div class="step-no">
          <strong>14</strong>
        </div>
      </div>
      <div class="col-md-10 step-content">
        <h3>清除 DNS 缓存</h3>
        <p class="height3">右键点击桌面左下角的 Windows 图标，点击并打开“命令提示符”，输入以下命令并回车：ipconfig /flushdns</p>
      </div>
    </div>
    <div>
      <img alt="右键点击桌面左下角的 Windows 图标，点击并打开“命令提示符”，输入以下命令并回车：ipconfig /flushdns" class="img-border loader" src="/assets/steps/windows8/pptp/step14-5165a5243cb210a8a89a1c744eeffedb.jpg" title="清除 DNS 缓存" />
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
