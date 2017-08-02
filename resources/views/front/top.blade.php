@extends('layouts.front')

@section('html_title', '热门文章')

@section('main-content')
	<div class="main main-raised">
		<div class="container">

			<div class="section" style="padding:50px 0 16px;">
				<div class="row">
					<div class="col-md-12 text-center">
						<ul class="nav nav-pills nav-pills-primary">
							<li class="active"><a href="#pill1" data-toggle="tab">All</a></li>
							<li><a href="#pill2" data-toggle="tab">World</a></li>
							<li><a href="#pill3" data-toggle="tab">Arts</a></li>
							<li><a href="#pill4" data-toggle="tab">Tech</a></li>
							<li><a href="#pill5" data-toggle="tab">Business</a></li>
							<li><a href="#pill5" data-toggle="tab">Business</a></li>
							<li><a href="#pill5" data-toggle="tab">Business</a></li>
							<li><a href="#pill5" data-toggle="tab">Business</a></li>
							<li><a href="#pill5" data-toggle="tab">Business</a></li>
						</ul>
						<div class="tab-content tab-space">
							<div class="tab-pane active" id="pill1">

							</div>
							<div class="tab-pane" id="pill2">

							</div>
							<div class="tab-pane" id="pill3">

							</div>
							<div class="tab-pane" id="pill4">

							</div>
						</div>

					</div>
				</div>

				<div class="row">

					<div class="col-md-12">
						<div class="card card-raised card-background" style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">
							<div class="content">
								<h6 class="category text-info">Marketing</h6>
								<h3 class="card-title">0 to 100.000 Customers in 6 months</h3>
								<p class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
								</p>
								<a href="#pablo" class="btn btn-warning btn-round">
									<i class="material-icons">subject</i> Read Case Study
								</a>
								<a href="#pablo" class="btn btn-white btn-just-icon btn-simple" title="Save to Pocket" rel="tooltip">
									<i class="fa fa-get-pocket"></i>
								</a>

							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card card-raised card-background" style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">
							<div class="content">
								<h6 class="category text-info">Worlds</h6>
								<a href="#pablo">
									<h3 class="card-title">The Best Productivity Apps on Market</h3>
								</a>
								<p class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
								</p>
								<a href="#pablo" class="btn btn-danger btn-round">
									<i class="material-icons">format_align_left</i> Read Article
								</a>
							</div>
						</div>
					</div>

					<div class="col-md-6">
						<div class="card card-raised card-background" style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">
							<div class="content">
								<h6 class="category text-info">Business</h6>
								<h3 class="card-title">Working on Wallstreet is Not So Easy</h3>
								<p class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
								</p>
								<a href="#pablo" class="btn btn-primary btn-round">
									<i class="material-icons">format_align_left</i> Read Article
								</a>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-plain">
							<div class="card-image">
								<a href="#pablo">
									<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
								</a>
							</div>

							<div class="content">
								<h4 class="card-title">
									<a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
								</h4>
								<p class="card-description">
									Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-plain">
							<div class="card-image">
								<a href="#pablo">
									<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
								</a>
							</div>

							<div class="content">
								<h4 class="card-title">
									<a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
								</h4>
								<p class="card-description">
									Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
								</p>
							</div>
						</div>
					</div>
					<div class="col-md-4">
						<div class="card card-plain">
							<div class="card-image">
								<a href="#pablo">
									<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
								</a>
							</div>

							<div class="content">
								<h4 class="card-title">
									<a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
								</h4>
								<p class="card-description">
									Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
	</div>
@endsection