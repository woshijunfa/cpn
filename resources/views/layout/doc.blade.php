@extends('layout.main')

@section('title')
{{ $doc  }}
@endsection

@section('content')
<div>
	<!-- 导航 -->
	<nav class="main">
		<ul class="main-nav">
            <li class="nav-docs"><a href="../..">中文文档</a>
            </li>
            <li class="nav-community"><a href="http://wenda.golaravel.com" target="_blank">问答社区</a>
            </li>
            <li class="nav-api"><a href="http://laravel.com/api/5.0/" target="_blank">API</a>
            </li>
            <li class="nav-laracasts"><a href="https://laracasts.com" target="_blank">视频教程（国外）</a>
            </li>
            <li class="nav-forge"><a href="https://forge.laravel.com" target="_blank">Forge</a>
            </li>
        </ul>
	</nav>

	<!-- doc部分 -->
	<div>
		<!-- 目录部分 -->
		<div>{!! $nav !!}</div>
		<!-- 正文部分 -->
		<div>{!! $content !!}</div>
	</div>
</div>
@endsection

