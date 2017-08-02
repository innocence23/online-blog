@extends('layouts.front')

@section('html_title', '用户注册协议和条款')

@section('main-content')
	<div class="main main-raised">
		<div class="container">
			<div class="text-center">
				<h2 class="title">注册协议</h2>
				<div class="description text-center">
					{!! $item !!}
				</div>
			</div>
		</div>
	</div>
@endsection