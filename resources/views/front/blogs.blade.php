@extends('layouts.front')

@section('html_title', '博客列表')

@section('main-content')
	<div class="main main-raised">
		<div class="blogs-3">
			<div class="container">
				<div class="row">
					@foreach($blogs as $v)
						<div class="col-md-4">
							<div class="card card-profile">
								<a href="{{ route('blog', $v->slug)}}" title="{{ $v->desc }}">
									<div class="card-image">
											<img class="img" src="{{ '/uploads/'.$v->pic }}">
										<div class="colored-shadow" style="background-image: url({{ '/uploads/'.$v->pic }}); opacity: 1;">
										</div>
										<div class="ripple-container"></div>
									</div>
								</a>
								<div class="card-content">
									<h5 class="card-title">
										<a href="{{ route('blog', $v->slug)}}" title="{{ $v->desc }}">
											{{ $v->title }}
										</a>
									</h5>

									<h6 class="category text-gray">
										作者：<a href="#pablo"><b>{{ $v->user->name }}</b></a>
										<b> {{ \Carbon\Carbon::parse($v->created_at)->diffForHumans() }} </b>
									</h6>

									<div class="footer">
										<p class="blog-category">
											<i class="fa fa-list"></i>
											<a href="{{ route('blog.category', $v->category->name) }}" style="margin: 0"
											   class="btn btn-default btn-xs">{{$v->category->name}}</a>
										</p>
										<p class="blog-tags">
											<i class="fa fa-tags"></i>
											@foreach($v->tags as $tag)
												<a href="{{ route('blog.tag', $tag->name) }}" style="margin: 0"
												   class="label btn btn-default">{{$tag->name}}</a>
											@endforeach
										</p>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
				<div class="pagination-area text-center">
					<ul class="pagination pagination-success pagination-area text-center">
						{{  $blogs->render() }}
					</ul>
				</div>
			</div>
		</div>
	</div>
@endsection