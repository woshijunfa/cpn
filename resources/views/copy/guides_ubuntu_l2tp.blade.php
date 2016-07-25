@extends('layout.main')
@section('title', '天梯 VPN - Ubuntu Linux L2TP 协议')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - Ubuntu Linux L2TP 协议
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
  <span class="">
    <a href="ubuntu_pptp" class="btn btn-inverse">
      PPTP协议
</a>  </span>
  <span class="active">
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
        <h3>安装 l2tp-ipsec-vpn</h3>
        <p class="height3">
          在 terminal 中执行以下命令，当遇到下图对话框时，选择"No"：<br>
          <code>sudo apt-get install l2tp-ipsec-vpn</code><br>
          <code>sudo shutdown -r now</code>
        </p>
      </div>
    </div>
    <div>
        <img alt="在 terminal 中执行以下命令，当遇到下图对话框时，选择&quot;No&quot;" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step1-830cbe73db5a4b313db12fa1c57c05c9.jpg" title="安装 l2tp-ipsec-vpn" />
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
        <h3>配置 VPN</h3>
        <p class="height3">右键点击屏幕左上角 l2tp-ipsec-vpn 标志，在下拉选项里点击"Edit Connections"进入 VPN 的设置</p>
      </div>
    </div>
    <div>
      <img alt="右键点击屏幕左上角 l2tp-ipsec-vpn 标志，在下拉选项里点击&quot;Edit Connections&quot;进入 VPN 的设置" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step2-da3e42e16205d01eac971ecce0cb14b8.jpg" title="配置 VPN" />
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
        <h3>添加 VPN</h3>
        <p>点击右侧的"Add"按钮，"Connection name"栏中填入"VPNCloud_L2TP"</p>
      </div>
    </div>
    <div>
      <img alt="点击右侧的&quot;Add&quot;按钮，&quot;Connection name&quot;栏中填入&quot;VPNCloud_L2TP&quot;" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step3-6ddaf69c29db8890ed08d351467bd620.jpg" title="添加 VPN" />
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
        <h3>编辑 VPNCloud_L2TP</h3>
        <p>选中列表中的"VPNCloud_L2TP"，点击右侧的"Edit"按钮</p>
      </div>
    </div>
    <div>
      <img alt="选中列表中的&quot;VPNCloud_L2TP&quot;，点击右侧的&quot;Edit&quot;按钮" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step4-721eeb4d2dd7d5041f7dcea7e70a7e01.jpg" title="编辑 VPNCloud_L2TP" />
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
        <h3>填写 VPN 服务器和域名</h3>
        <p class="height4">IPsec 标签下，"Remote Server"中填入服务器域名（<a href="/admin/servers" target="_blank">前往服务器列表页面查看</a>）；“Use pre-shared key for authentication”中填入具体密钥（<a href="/admin" target="_blank">前往我的天梯首页查看共享密钥</a>）</p>
      </div>
    </div>
    <div>
      <img alt="IPsec 标签下，&quot;Remote Server&quot;中填入服务器域名（前往服务器列表页面查看）；“Use pre-shared key for authentication”中填入具体密钥（前往我的天梯首页查看共享密钥）" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step5-16f003add839a9ded25add49bc12685f.jpg" title="填写 VPN 服务器和域名" />
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
        <h3>设置 VPN 协议及填写帐号信息</h3>
        <p class="height4">点击 PPP 标签，选中"Allow these protocols"，并只勾选列表中的"Microsoft CHAP Version 2 (MS-CHAPv2)"；"User name"中填入你的VPN帐号用户名；"Password"中填入你的VPN帐号密码；最后点击"IP settings..."按钮</p>
      </div>
    </div>
    <div>
      <img alt="点击 PPP 标签，选中 &quot;Allow these protocols&quot;，并只勾选列表中的 &quot;Microsoft CHAP Version 2 (MS-CHAPv2)&quot;；&quot;User name&quot;中填入你的VPN帐号用户名；&quot;Password&quot;中填入你的VPN帐号密码；最后点击&quot;IP settings...&quot;按钮" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step6-b6d05ebd1b5fc9dcbe6a296de635c36c.jpg" title="设置 VPN 协议及填写帐号信息" />
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
        <h3>IP 设置</h3>
        <p>勾选"Obtain DNS server addresses automatically"，点击"OK"按钮</p>
      </div>
    </div>
    <div>
      <img alt="勾选&quot;Obtain DNS server addresses automatically&quot;，点击&quot;OK&quot;按钮" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step7-b68d93b5aadff489d1687e718eb7cd7b.jpg" title="IP 设置" />
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
        <h3>关闭窗口，让设置生效</h3>
        <p>一定要点击"Close"按钮，并点击弹出框内的"OK"按钮，设置才会生效</p>
      </div>
    </div>
    <div>
      <img alt="一定要点击&quot;Close&quot;按钮，并点击弹出框内的&quot;OK&quot;按钮，设置才会生效" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step8-2c42fd22e7de48a832e2667d965dc9a3.jpg" title="关闭窗口，让设置生效" />
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
        <h3>连接 VPN</h3>
        <p class="height3">右键点击 l2tp-ipsec-vpn 标志，点击"VPNCloud_L2TP"连接 VPN；如果连接不上，可以重启 l2tp-ipsec-vpn 或者重启系统后再连接</p>
      </div>
    </div>
    <div>
      <img alt="右键点击 l2tp-ipsec-vpn 标志，点击&quot;VPNCloud_L2TP&quot;连接 VPN；如果连接不上，可以重启 l2tp-ipsec-vpn 或者重启系统后再连接" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step9-1c8416bbd650f2ccf4cac69a7e576df7.jpg" title="连接 VPN" />
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
        <p class="height3">VPN 连接成功后 l2tp-ipsec-vpn 标志上就没有红叉；右键点击标志可进行 Disconnect 等操作</p>
      </div>
    </div>
    <div>
      <img alt="VPN 连接成功后 l2tp-ipsec-vpn 标志上就没有红叉；右键点击标志可进行 Disconnect 等操作" class="img-border loader" src="/assets/steps/ubuntu/l2tp/step10-85b47f2ac8b70e82643198b521cc6720.jpg" title="连接成功" />
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
