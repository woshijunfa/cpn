@extends('layout.main')
@section('title', '天梯 VPN - 使用教程 - Windows 7 PPTP 协议)
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - Windows 7 PPTP 协议
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
  <h4 class="title">Windows 7:</h4>
  <span class="active">
    <a href="windows7_pptp" class="btn btn-inverse">
      PPTP协议
</a>  </span>
  <span class="">
    <a href="windows7_l2tp" class="btn btn-inverse">
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
        <p>点击电脑屏幕左下角的 Windows 标志，再点击“控制面板”，进入控制面板的设置</p>
      </div>
    </div>
    <div>
      <img alt="点击电脑屏幕左下角的 Windows 标志，再点击“控制面板”，进入控制面板的设置" class="img-border loader" src="/assets/steps/windows7/pptp/step01-b80f113f7bbab13aac13cf51e54b64d7.jpg" title="控制面板" />
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
      <img alt="点击“网络和 Internet”文字，进入网络和 Internet的设置" class="img-border loader" src="/assets/steps/windows7/pptp/step2-8f23fa5ff84f962f7753a63f7de4cec8.jpg" title="网络和 Internet" />
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
      <img alt="点击“网络和共享中心”文字，进入网络和共享中心的设置" class="img-border loader" src="/assets/steps/windows7/pptp/step3-708260d1a38dc554f838f8fc794a0df2.jpg" title="网络和共享中心" />
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
      <img alt="点击“设置新的连接或网络”文字" class="img-border loader" src="/assets/steps/windows7/pptp/step4-21138bd5e0b64e0a52b26a6974de2b1f.jpg" title="设置新的连接或网络" />
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
      <img alt="选择“连接到工作区”，然后点击“下一步”按钮" class="img-border loader" src="/assets/steps/windows7/pptp/step5-14f6989da1958c860846b70428ac525d.jpg" title="连接到工作区" />
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
      <img alt="点击“使用我的 Internet 连接(VPN)”文字" class="img-border loader" src="/assets/steps/windows7/pptp/step6-7f7252d8ef83a93d15b963685fe48523.jpg" title="使用我的 Internet 连接(VPN)" />
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
        <p class="height3">“Internet 地址”中填入服务器域名（<a href="/admin/servers" target="_blank">前往服务器列表页面查看</a>）；“目标名称”中填入“天梯 VPN (PPTP)”；然后点击“下一步”按钮</p>
      </div>
    </div>
    <div>
      <img alt="Internet 地址中填入服务器域名（前往服务器列表页面查看）；目标名称中填入天梯 VPN (PPTP)；然后点击下一步按钮" class="img-border loader" src="/assets/steps/windows7/pptp/step7-a91f58905f5320ad31604deedf17eba8.jpg" title="Internet 地址，目标名称" />
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
        <h3>用户名和密码</h3>
        <p class="height3">“用户名”中填入你的VPN帐号用户名；“密码”中填入你的VPN帐号密码；然后点击”连接“按钮</p>
      </div>
    </div>
    <div >
      <img alt="“用户名”中填入你的VPN帐号用户名；“密码”中填入你的VPN帐号密码；然后点击”连接“按钮" class="img-border loader" src="/assets/steps/windows7/pptp/step8-65a661c937df679598799ac48f0873d9.jpg" title="用户名和密码" />
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
        <h3>连接中</h3>
        <p>连接中</p>
      </div>
    </div>
    <div>
      <img alt="连接中" class="img-border loader" src="/assets/steps/windows7/pptp/step9-09c66b966b08307f89678f4153c3e83f.jpg" title="连接中" />
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
      <img alt="连接成功" class="img-border loader" src="/assets/steps/windows7/pptp/step10-ac43f51bcac3a1c9cc087529b5fc7e49.jpg" title="连接成功" />
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
        <h3>快速连接，断开</h3>
        <p class="height4">点击电脑屏幕右下角的网络标志，看到“天梯 VPN (PPTP)”的连接状态，通过“断开”或“连接”按钮，方便快速断开或连接 VPN</p>
      </div>
    </div>
    <div>
      <img alt="点击电脑屏幕右下角的网络标志，看到天梯 VPN (PPTP)的连接状态，通过断开或连接按钮，方便快速断开或连接 VPN" class="img-border loader" src="/assets/steps/windows7/pptp/step11-75003dd50f320b3a9f323076bed22966.jpg" title="快速连接，断开" />
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
        <p class="height4">在“控制面板 -> 网络和 Internet -> 网络和共享中心 -> 更改适配器设置”中找到“本地连接”，右键点击，然后点击“属性”；点击"Internet 协议版本4（TCP/IPv4）"，点击“属性”按钮</p>
      </div>
    </div>
    <div>
      <img alt="在“控制面板 -&gt; 网络和 Internet -&gt; 网络和共享中心 -&gt; 更改适配器设置”中找到“本地连接”，右键点击，然后点击“属性”；点击&quot;Internet 协议版本4（TCP/IPv4）&quot;，点击“属性”按钮" class="img-border loader" src="/assets/steps/windows7/pptp/step12-4c0ed7069274d7656558fbd81a019168.jpg" title="打开本地连接属性" />
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
      <img alt="选中“使用下面的 DNS 服务器地址”，“首选 DNS 服务器”中填写 8.8.8.8，“备用 DNS 服务器”中填写 8.8.4.4，然后点击“确定”按钮" class="img-border loader" src="/assets/steps/windows7/pptp/step13-bed1626aa33cbb178e651dd239ac02be.jpg" title="设置 DNS，防止 DNS 污染" />
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
        <p class="height3">在“开始 -> 所有程序 -> 附件”中找到并打开“命令提示符”，输入以下命令并回车：ipconfig /flushdns</p>
      </div>
    </div>
    <div>
      <img alt="在“开始 -&gt; 所有程序 -&gt; 附件”中找到并打开“命令提示符”，输入以下命令并回车：ipconfig /flushdns" class="img-border loader" src="/assets/steps/windows7/pptp/step14-c7ac4d0aa05e7409c2a52cdca9537ea4.jpg" title="清除 DNS 缓存" />
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
