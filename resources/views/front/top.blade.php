@extends('layouts.front')

@section('html_title', '热门文章')

@section('main-content')
	<div class="main main-raised">
		<div class="container">
			<div class="section" style="padding:50px 0 16px;">
				<div class="row">
					@foreach($blogs as $k=>$v)
						@if ($k == 0)
							<div class="col-sm-12">
								<div class="card card-raised card-background" style="background-image: url('{{ '/uploads/'.$v->pic }}')">
									<div class="card-content">
										<h6 class="category text-info"></h6>
										<h3 class="card-title">{{ $v->title }}</h3>
										<p class="card-description">
											{{ $v->desc }}
										</p>
										<a href="{{ route('blog', $v->slug)}}" title="{{ $v->title }}" class="btn btn-warning btn-round">
											<i class="material-icons">subject</i> Read Article
										</a>

									</div>
								</div>
							</div>
						@elseif ($k == 1 || $k == 2)
							<div class="col-sm-6">
								<div class="card card-raised card-background" style="background-image: url('{{ '/uploads/'.$v->pic }}')">
									<div class="card-content">
										<h6 class="category text-info"></h6>
										<a href="{{ route('blog', $v->slug)}}">
											<h3 class="card-title">{{ $v->title }}</h3>
										</a>
										<p class="card-description">
											{{ $v->desc }}
										</p>
										<a href="{{ route('blog', $v->slug)}}" title="{{ $v->title }}" class="btn btn-danger btn-round">
											<i class="material-icons">format_align_left</i> Read Article
										</a>
									</div>
								</div>
							</div>
						@else
							<div class="col-sm-4">
								<div class="card card-plain">
									<div class="card-image">
										<a href="{{ route('blog', $v->slug)}}">
											<img class="img img-raised" src="{{ '/uploads/'.$v->pic }}" />
										</a>
									</div>
									<div class="content">
										<h4 class="card-title">
											<a href="{{ route('blog', $v->slug)}}">{{ $v->title }}</a>
										</h4>
										<p class="card-description">
											{{ $v->desc }}
											<a href="{{ route('blog', $v->slug)}}"> Read More </a>
										</p>
									</div>
								</div>
							</div>
						@endif
					@endforeach
				</div>
			</div>

		</div>
	</div>
@endsection