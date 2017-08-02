@extends('layouts.front')

@section('html_title', '帮助中心')

@section('main-content')
	<div class="main main-raised">
		<div class="container">

			{!! $help !!}

		</div>
	</div>
@endsection

@section('js')
@endsection