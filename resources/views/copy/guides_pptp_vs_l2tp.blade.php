@extends('layout.main')
@section('title', '天梯 VPN - PPTP 协议和 L2TP 协议的区别')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>  使用教程 - PPTP 协议和 L2TP 协议的区别
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
      <h4 class="title">PPTP 协议和 L2TP 协议的区别</h4>
      <span class="back pull-right">
        <a href="/guides">
          <span>其他设备设置 »</span>
</a>      </span>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <p>
      最常见最流行的 VPN 协议包含 PPTP 协议和 L2TP/IPSec 协议。如果你希望设置简单，对通信安全没有太大的要求，那么你配置 PPTP 连接即可；如果你的网络里 PPTP 协议未被允许，或者希望数据通信更安全的话，就推荐设置 L2TP/IPSec 连接。在设置上，步骤基本一致，只是 L2TP/IPSec 协议需要输入共享密钥。
    </p>
    <p>
      PPTP（Point to Point Tunneling Protocol）点对点隧道协议：是一种主要用于 VPN 的数据链路层网络协议，PPTP 的协议规范本身并未描述加密或身份验证的特性。
    </p>
    <p>
      L2TP（Layer Two Tunneling Protocol) 第二层隧道协议：是一种数据链路层隧道协议，通常用于虚拟专用网。L2TP 协议自身不对传输的数据进行加密，但是可以和加密协议搭配使用，从而实现数据的加密传输。经常与 L2TP 协议搭配的加密协议是 IPsec，当这两个协议搭配使用时，通常合称 L2TP/IPsec。
    </p>
  </div>
</div>


      </div>
    </div>

  </div>
@stop
