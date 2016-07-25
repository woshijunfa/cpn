@extends('layout.main')
@section('title', '天梯 VPN - 选择套餐')
@section('content')

  <div id="page">

      <div id="pagetitle">
        <div class="pagetitle-footer">
          <div class="container">
              <div class="row">
    <div class="col-md-12">
      <h1>选择套餐</h1>
    </div>
  </div>

          </div>
        </div>
      </div>


    <div id="content">
      <div class="container">



        


<div class="pricing">
  <div class="row">
      <div class="col-md-3">
        <div class="panel panel-basic text-center">
          <div class="panel-heading panel-heading-lg">
            <h3 class="panel-title">小流量版v3</h3>
          </div>
          <div class="panel-body">
            <p class="summary">移动设备偶尔使用</p>
            <p>月流量：10 GB / 月</p>
            <p>同时在线：2 台</p>
            <p>月限时：无限</p>
            <p>多国机房：17个机房</p>
            <p class="price">180 元 / 年</p>
          </div>
          <div class="panel-footer">
            <a href="/admin/orders/new?plan_id=14" class="btn btn-basic">立刻购买</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-basic text-center">
            <div class="highlighted"></div>
          <div class="panel-heading panel-heading-lg">
            <h3 class="panel-title">标准版v3</h3>
          </div>
          <div class="panel-body">
            <p class="summary">日常使用最佳推荐</p>
            <p>月流量：100 GB / 月</p>
            <p>同时在线：3 台</p>
            <p>月限时：无限</p>
            <p>多国机房：17个机房</p>
            <p class="price">240 元 / 年</p>
          </div>
          <div class="panel-footer">
            <a href="/admin/orders/new?plan_id=15" class="btn btn-basic">立刻购买</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-basic text-center">
          <div class="panel-heading panel-heading-lg">
            <h3 class="panel-title">大流量版v3</h3>
          </div>
          <div class="panel-body">
            <p class="summary">经常看视频或下载</p>
            <p>月流量：300 GB / 月</p>
            <p>同时在线：3 台</p>
            <p>月限时：无限</p>
            <p>多国机房：17个机房</p>
            <p class="price">600 元 / 年</p>
          </div>
          <div class="panel-footer">
            <a href="/admin/orders/new?plan_id=16" class="btn btn-basic">立刻购买</a>
          </div>
        </div>
      </div>
      <div class="col-md-3">
        <div class="panel panel-basic text-center">
          <div class="panel-heading panel-heading-lg">
            <h3 class="panel-title">企业版v3</h3>
          </div>
          <div class="panel-body">
            <p class="summary">适合企业用户</p>
            <p>月流量：1000 GB / 月</p>
            <p>同时在线：15 台</p>
            <p>月限时：无限</p>
            <p>多国机房：17个机房</p>
            <p class="price">3,600 元 / 年</p>
          </div>
          <div class="panel-footer">
            <a href="/admin/orders/new?plan_id=17" class="btn btn-basic">立刻购买</a>
          </div>
        </div>
      </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <img alt="Guarantee" src="/assets/guarantee-d0e32c5818f87aa058da05aae6072d12.png" />
    <span>安心保障：3天内，所有套餐都支持全额退款哦！</span>
    <a href="/refund_policy" target="_blank">退款政策</a>
  </div>
</div>

      </div>
    </div>

  </div>
@stop
