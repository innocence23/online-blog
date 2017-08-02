@extends('layouts.front')

@section('html_title', 'app')

@section('css')
	<!-- CSS Just for demo purpose, don't include it in your project -->
	{{--<link href="{{ asset('/x_material_kit/assets/css/vertical-nav.css') }}" rel="stylesheet" type="text/css"/>--}}
	<link href="http://demos.creative-tim.com/material-kit-pro/assets/assets-for-demo/vertical-nav.css" rel="stylesheet" type="text/css"/>
@endsection

@section('main-content')
	<div id="dowebok">
		{{--<div class="section-space"></div>--}}

		<div class="section" id="headers">

			<div class="header-3">
				<nav class="navbar navbar-transparent navbar-absolute">
					<div class="container">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a class="navbar-brand" href="http://www.creative-tim.com">Creative Tim</a>
						</div>

						<div class="collapse navbar-collapse" id="navigation-example">
							<ul class="nav navbar-nav navbar-right">
								<li>
									<a href="#pablo">
										Home
									</a>
								</li>
								<li>
									<a href="#pablo">
										About Us
									</a>
								</li>
								<li>
									<a href="#pablo">
										Products
									</a>
								</li>
								<li>
									<a href="#pablo">
										Contact Us
									</a>
								</li>
							</ul>
						</div>
					</div>
				</nav>

				<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
					<div class="carousel slide" data-ride="carousel">

						<!-- Indicators -->
						<ol class="carousel-indicators">
							<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
							<li data-target="#carousel-example-generic" data-slide-to="1"></li>
							<li data-target="#carousel-example-generic" data-slide-to="2"></li>
						</ol>

						<!-- Wrapper for slides -->
						<div class="carousel-inner">
							<div class="item active">
								<div class="page-header header-filter" style="background-image: url('{{ asset('/dist/avatar.jpg') }}');">

									<div class="container">
										<div class="row">
											<div class="col-md-6 text-left">
												<h1 class="title">Material Kit PRO</h1>
												<h4>Dolce & Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
												<br />

												<div class="buttons">
													<a href="#pablo" class="btn btn-primary btn-lg">
														Read More
													</a>
													<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
														<i class="fa fa-twitter"></i>
													</a>
													<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
														<i class="fa fa-facebook-square"></i>
													</a>
													<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
														<i class="fa fa-get-pocket"></i>
													</a>
												</div>

											</div>
										</div>
									</div>
								</div>

							</div>
							<div class="item">
								<div class="page-header header-filter" style="background-image: url('{{ asset('/dist/avatar.jpg') }}');">

									<div class="container">
										<div class="row">
											<div class="col-md-8 col-md-offset-2 text-center">
												<h1 class="title">Material Kit PRO</h1>
												<h4>Dolce & Gabbana is a luxury Italian fashion house founded in 1985 in Legnano by Italian designers Domenico Dolce and Stefano Gabbana. The two met in Milan in 1980 and designed for the same fashion house.</h4>
												<br />
												<h6>Connect with us on:</h6>
												<div class="buttons">
													<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
														<i class="fa fa-twitter"></i>
													</a>
													<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
														<i class="fa fa-facebook-square"></i>
													</a>
													<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
														<i class="fa fa-google-plus"></i>
													</a>
													<a href="#pablo" class="btn btn-just-icon btn-white btn-simple btn-lg">
														<i class="fa fa-instagram"></i>
													</a>
												</div>
											</div>
										</div>
									</div>

								</div>

							</div>

							<div class="item">
								<div class="page-header header-filter" style="background-image: url('{{ asset('/dist/avatar.jpg') }}');">

									<div class="container">
										<div class="row">
											<div class="col-md-7 col-md-offset-5 text-right">
												<h1 class="title">New Collection 50% Off</h1>
												<h4>There's no doubt that Tesla is delighted with the interest, but the data also raises a few questions. How long will it take for Tesla to fulfill all those extra orders?</h4>
												<br />

												<div class="buttons">
													<a href="#pablo" class="btn btn-white btn-simple btn-lg">
														<i class="material-icons">share</i> Share Offer
													</a>
													<a href="#pablo" class="btn btn-danger btn-lg">
														<i class="material-icons">shopping_cart</i> Shop Now
													</a>
												</div>

											</div>
										</div>
									</div>

								</div>

							</div>

						</div>

						<!-- Controls -->
						<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
							<i class="material-icons">keyboard_arrow_left</i>
						</a>
						<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
							<i class="material-icons">keyboard_arrow_right</i>
						</a>
					</div>
				</div>

			</div>

		</div>

		<div class="section" id="features">
			<div class="features-1">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="title">Why our product is the best</h2>
						<h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-info">
								<i class="material-icons">chat</i>
							</div>
							<h4 class="info-title">Free Chat</h4>
							<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-success">
								<i class="material-icons">verified_user</i>
							</div>
							<h4 class="info-title">Verified Users</h4>
							<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
						</div>
					</div>

					<div class="col-md-4">
						<div class="info">
							<div class="icon icon-danger">
								<i class="material-icons">fingerprint</i>
							</div>
							<h4 class="info-title">Fingerprint</h4>
							<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="section" id="features">
			<div class="features-2">
				<div class="row">
					<div class="col-md-8 col-md-offset-2 text-center">
						<h2 class="title">Why our product is the best</h2>
						<h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information.</h5>
					</div>
				</div>

				<div class="row">
					<div class="col-md-4">
						<div class="info info-horizontal">
							<div class="icon icon-info">
								<i class="material-icons">group_work</i>
							</div>
							<div class="description">
								<h4 class="info-title">Collaborate</h4>
								<p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
								<a href="#pablo">Find more...</a>
							</div>
						</div>

					</div>

					<div class="col-md-4">
						<div class="info info-horizontal">
							<div class="icon icon-danger">
								<i class="material-icons">airplay</i>
							</div>
							<div class="description">
								<h4 class="info-title">Airplay</h4>
								<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
								<a href="#pablo">Find more...</a>
							</div>
						</div>
					</div>

					<div class="col-md-4">
						<div class="info info-horizontal">
							<div class="icon icon-success">
								<i class="material-icons">location_on</i>
							</div>
							<div class="description">
								<h4 class="info-title">Location Integrated</h4>
								<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
								<a href="#pablo">Find more...</a>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="section" id="features">
			<div class="features-3">
				<div class="row">
					<div class="col-md-6">
						<div class="phone-container">
							<img src="assets/img/sections/iphone.png" />
						</div>
					</div>
					<div class="col-md-6">

						<br /><br />
						<!-- Some <br /> tags to push the text to align with the image, you can remove it if you have more text on the right side :-) -->

						<h2 class="title">Your life will be much easier</h2>

						<div class="info info-horizontal">
							<div class="icon icon-primary">
								<i class="material-icons">extension</i>
							</div>
							<div class="description">
								<h4 class="info-title">Hundreds of Components</h4>
								<p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
							</div>
						</div>

						<div class="info info-horizontal">
							<div class="icon icon-primary">
								<i class="material-icons">child_friendly</i>
							</div>
							<div class="description">
								<h4 class="info-title">Easy to Use</h4>
								<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
							</div>
						</div>

						<div class="info info-horizontal">
							<div class="icon icon-primary">
								<i class="material-icons">watch_later</i>
							</div>
							<div class="description">
								<h4 class="info-title">Fast Prototyping</h4>
								<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
							</div>
						</div>
					</div>
				</div>

			</div>
		</div>
		<div class="section" id="features">
			<div class="features-5" style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">

				<div class="col-md-8 col-md-offset-2 text-center">
					<h2 class="title">Your life will be much easier</h2>
				</div>

				<div class="container">
					<div class="row">
						<div class="col-sm-4">
							<div class="info">
								<div class="icon">
									<i class="material-icons">code</i>
								</div>
								<h4 class="info-title">For Developers</h4>
								<p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="info">
								<div class="icon">
									<i class="material-icons">format_paint</i>
								</div>
								<h4 class="info-title">For Designers</h4>
								<p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="info">
								<div class="icon">
									<i class="material-icons">dashboard</i>
								</div>
								<h4 class="info-title">Bootstrap Grid</h4>
								<p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
							</div>
						</div>

					</div>

					<div class="row">

						<div class="col-sm-4">
							<div class="info">
								<div class="icon">
									<i class="material-icons">view_carousel</i>
								</div>
								<h4 class="info-title">Example Pages Included</h4>
								<p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="info">
								<div class="icon">
									<i class="material-icons">access_time</i>
								</div>
								<h4 class="info-title">Save Time</h4>
								<p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
							</div>
						</div>

						<div class="col-sm-4">
							<div class="info">
								<div class="icon">
									<i class="material-icons">attach_money</i>
								</div>
								<h4 class="info-title">Save Money</h4>
								<p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		<div class="section" id="features">

			<div class="container">




				<!--     *********    END FEATURES 2      *********      -->


				<!--     *********     FEATURES 3      *********      -->



				<!--     *********    END FEATURES 3      *********      -->


				<!--     *********     FEATURES 4      *********      -->

				<div class="features-4">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2 class="title">Your life will be much easier</h2>
							<h5 class="description">This is the paragraph where you can write more details about your product. Keep you user engaged by providing meaningful information.</h5>
						</div>
					</div>

					<div class="row">

						<div class="col-md-3 col-md-offset-1">
							<div class="info info-horizontal">
								<div class="icon icon-info">
									<i class="material-icons">code</i>
								</div>
								<div class="description">
									<h4 class="info-title">For Developers</h4>
									<p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this powerfull UI Kit lets you do more than ever before. </p>
								</div>
							</div>

							<div class="info info-horizontal">
								<div class="icon icon-danger">
									<i class="material-icons">format_paint</i>
								</div>
								<div class="description">
									<h4 class="info-title">For Designers</h4>
									<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="phone-container">
								<img src="assets/img/sections/iphone2.png" />
							</div>
						</div>

						<div class="col-md-3">
							<div class="info info-horizontal">
								<div class="icon icon-primary">
									<i class="material-icons">dashboard</i>
								</div>
								<div class="description">
									<h4 class="info-title">Bootstrap Grid</h4>
									<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
								</div>
							</div>

							<div class="info info-horizontal">
								<div class="icon icon-success">
									<i class="material-icons">view_carousel</i>
								</div>
								<div class="description">
									<h4 class="info-title">Example Pages Included</h4>
									<p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph describing a feature will be enough.</p>
								</div>
							</div>
						</div>
					</div>

				</div>

				<!--     *********    END FEATURES 4      *********      -->

			</div>

			<!--     *********     FEATURES 5      *********      -->



			<!--     *********    END FEATURES 5      *********      -->

		</div>

		<div class="section" id="blogs">

			<!--     *********     BLOGS 1      *********      -->

			<div class="blogs-1" id="blogs-1">

				<div class="container">
					<div class="row">

						<div class="col-md-10 col-md-offset-1">
							<h2 class="title">Latest Blogposts</h2>

							<br />
							<div class="card card-plain card-blog">
								<div class="row">
									<div class="col-md-5">
										<div class="card-image">
											<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
										</div>
									</div>
									<div class="col-md-7">
										<h6 class="category text-info">Enterprise</h6>
										<h3 class="card-title">
											<a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
										</h3>
										<p class="card-description">
											Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Today, it’s moving to a subscription model. Yet its own business model disruption is only part of the story — and… <a href="#pablo"> Read More </a>
										</p>
										<p class="author">
											by <a href="#pablo"><b>Mike Butcher</b></a>, 2 days ago
											</a>
									</div>
								</div>
							</div>

							<div class="card card-plain card-blog">
								<div class="row">
									<div class="col-md-7">
										<h6 class="category text-danger">
											<i class="material-icons">trending_up</i> Trending
										</h6>
										<h3 class="card-title">
											<a href="#pablo">6 insights into the French Fashion landscape</a>
										</h3>
										<p class="card-description">
											Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Today, it’s moving to a subscription model. Yet its own business model disruption is only part of the story — and… <a href="#pablo"> Read More </a>
										</p>
										<p class="author">
											by <a href="#pablo"><b>Mike Butcher</b></a>, 2 days ago
											</a>
									</div>
									<div class="col-md-5">
										<div class="card-image">
											<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
										</div>
									</div>
								</div>
							</div>

						</div>

					</div>



				</div>
			</div>

			<!--     *********    END BLOGS 1      *********      -->



			<!--     *********     BLOGS 2      *********      -->

			<div class="blogs-2" id="blogs-2">

				<div class="container">
					<div class="row">

						<div class="col-md-10 col-md-offset-1">
							<h2 class="title">Latest Blogposts 2</h2>

							<br />

							<div class="row">
								<div class="col-md-4">
									<div class="card card-plain card-blog">
										<div class="card-image">
											<a href="#pablo">
												<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
											</a>
										</div>

										<div class="content">
											<h6 class="category text-info">Enterprise</h6>
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
									<div class="card card-plain card-blog">
										<div class="card-image">
											<a href="#pablo">
												<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
											</a>
										</div>
										<div class="content">
											<h6 class="category text-success">
												Startups
											</h6>
											<h4 class="card-title">
												<a href="#pablo">Lyft launching cross-platform service this week</a>
											</h4>
											<p class="card-description">
												Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses.<a href="#pablo"> Read More </a>
											</p>
										</div>
									</div>
								</div>

								<div class="col-md-4">
									<div class="card card-plain card-blog">
										<div class="card-image">
											<a href="#pablo">
												<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
											</a>
										</div>

										<div class="content">
											<h6 class="category text-danger">
												<i class="material-icons">trending_up</i> Enterprise
											</h6>
											<h4 class="card-title">
												<a href="#pablo">6 insights into the French Fashion landscape</a>
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
			</div>

			<!--     *********    END BLOGS 2      *********      -->



			<!--     *********     BLOGS 3      *********      -->

			<div class="blogs-3">

				<div class="container">
					<div class="row">

						<div class="col-md-10 col-md-offset-1">
							<h2 class="title">Latest Blogposts 3</h2>

							<br />
							<div class="card card-plain card-blog">
								<div class="row">
									<div class="col-md-4">
										<div class="card-image">
											<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
										</div>
									</div>
									<div class="col-md-8">
										<h6 class="category text-info">Enterprise</h6>
										<h3 class="card-title">
											<a href="#pablo">Autodesk looks to future of 3D printing with Project Escher</a>
										</h3>
										<p class="card-description">
											Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Yet its own business model disruption is only part of the story — and… <a href="#pablo"> Read More </a>
										</p>
										<p class="author">
											by <a href="#pablo"><b>Mike Butcher</b></a>, 2 days ago
											</a>
									</div>
								</div>
							</div>

							<div class="card card-plain card-blog">
								<div class="row">
									<div class="col-md-4">
										<div class="card-image">
											<a href="#pablo">
												<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
											</a>
										</div>
									</div>
									<div class="col-md-8">
										<h6 class="category text-danger">
											<i class="material-icons">trending_up</i> Trending
										</h6>
										<h3 class="card-title">
											<a href="#pablo">6 insights into the French Fashion landscape</a>
										</h3>
										<p class="card-description">
											Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Yet its own business model disruption is only part of the story — and… <a href="#pablo"> Read More </a>
										</p>
										<p class="author">
											by <a href="#pablo"><b>Mike Butcher</b></a>, 2 days ago
											</a>
									</div>
								</div>
							</div>

							<div class="card card-plain card-blog">
								<div class="row">
									<div class="col-md-4">
										<div class="card-image">
											<a href="#pablo">
												<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
											</a>
										</div>
									</div>
									<div class="col-md-8">
										<h6 class="category text-success">
											Startups
										</h6>
										<h3 class="card-title">
											<a href="#pablo">Lyft launching cross-platform service this week</a>
										</h3>
										<p class="card-description">
											Like so many organizations these days, Autodesk is a company in transition. It was until recently a traditional boxed software company selling licenses. Yet its own business model disruption is only part of the story — and… <a href="#pablo"> Read More </a>
										</p>
										<p class="author">
											by <a href="#pablo"><b>Megan Rose</b></a>, 2 days ago
											</a>
									</div>
								</div>
							</div>

						</div>

					</div>

				</div>
			</div>


			<!--     *********    END BLOGS 4      *********      -->

			<div class="blogs-4" id="blogs-4">

				<div class="container">
					<div class="row">

						<div class="col-md-8 col-md-offset-2">
							<h2 class="title">Latest Blogposts 4</h2>

							<br />

							<div class="card card-plain card-blog">
								<div class="card-image">
									<a href="#pablo">
										<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<h6 class="category text-info">Fashion</h6>

								<h3 class="card-title">
									<a href="#pablo">Autodesk looks to future of 3D</a>
								</h3>

								<h5 class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is too high for the beams and angle of the ceiling I also wanted to point out that it’s the first album to go number 1 off of streaming...
								</h5>

								<a href="#pablo" class="btn btn-primary btn-round"> Read More</a>
							</div>

							<div class="card card-plain card-blog">
								<div class="card-image">
									<a href="#pablo">
										<img class="img img-raised" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<h6 class="category text-success">Lifestyle</h6>

								<h3 class="card-title">
									<a href="#pablo">We will breathe clean air and exercise</a>
								</h3>

								<h5 class="card-description">
									Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is too high for the beams and angle of the ceiling I also wanted to point out that it’s the first album to go number 1 off of streaming...
								</h5>

								<a href="#pablo" class="btn btn-primary btn-round"> Read More</a>
							</div>

						</div>

					</div>

				</div>
			</div>

			<!--     *********    END BLOGS 4      *********      -->

		</div>

		<div class="section" id="teams">
			<!--     *********    TEAM 1     *********      -->

			<div class="team-1" id="team-1">

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2 class="title">Our Awesome Team 1</h2>
							<h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
						</div>
					</div>

					<div class="row">
						<div class="col-md-3">
							<div class="card card-profile card-plain">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">Alec Thompson</h4>
									<h6 class="category text-muted">CEO / Co-Founder</h6>

									<p class="card-description">
										And I love you like Kanye loves Kanye. We need to restart the human foundation.
									</p>
									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card card-profile card-plain">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">Tania Andrew</h4>
									<h6 class="category text-muted">Designer</h6>

									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation. And I love you like Kanye loves Kanye.
									</p>
									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card card-profile card-plain">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">Christian Mike</h4>
									<h6 class="category text-muted">Web Developer</h6>

									<p class="card-description">
										I love you like Kanye loves Kanye. Don't be scared of the truth because we need to restart the human foundation.
									</p>
									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-3">
							<div class="card card-profile card-plain">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">Rebecca Stormvile</h4>
									<h6 class="category text-muted">Web Developer</h6>

									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation.
									</p>
									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>

			<!--     *********    END TEAM 1      *********      -->



			<!--     *********    TEAM 2     *********      -->

			<div class="team-2" id="team-2">

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2 class="title">The Executive Team 2</h2>
							<h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
						</div>
					</div>

					<div class="row">

						<div class="col-md-4">
							<div class="card card-profile card-plain">
								<div class="card-image">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">Alec Thompson</h4>
									<h6 class="category text-muted">Managing Partner</h6>

									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-facebook btn-round"><i class="fa fa-facebook-square"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-profile card-plain">
								<div class="card-image">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">George West</h4>
									<h6 class="category text-muted">Backend Hacker</h6>

									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-linkedin btn-round"><i class="fa fa-linkedin"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-facebook btn-round"><i class="fa fa-facebook-square"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-profile card-plain">
								<div class="card-image">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">Gina Andrew</h4>
									<h6 class="category text-muted">Photographer</h6>

									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!--     *********    END TEAM 2      *********      -->


			<!--     *********    TEAM 3     *********      -->

			<div class="team-3">

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2 class="title">The Executive Team 3</h2>
							<h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
						</div>
					</div>

					<div class="row">

						<div class="col-md-6">
							<div class="card card-profile card-plain">
								<div class="col-md-5">
									<div class="card-image">
										<a href="#pablo">
											<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
										</a>
									</div>
								</div>
								<div class="col-md-7">
									<div class="content">
										<h4 class="card-title">Alec Thompson</h4>
										<h6 class="category text-muted">Founder</h6>

										<p class="card-description">
											Don't be scared of the truth because we need to restart the human foundation in truth...
										</p>

										<div class="footer">
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-profile card-plain">
								<div class="col-md-5">
									<div class="card-image">
										<a href="#pablo">
											<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
										</a>
									</div>
								</div>
								<div class="col-md-7">
									<div class="content">
										<h4 class="card-title">Kendall Andrew</h4>
										<h6 class="category text-muted">Graphic Designer</h6>

										<p class="card-description">
											Don't be scared of the truth because we need to restart the human foundation in truth...
										</p>

										<div class="footer">
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-dribbble"><i class="fa fa-dribbble"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-profile card-plain">
								<div class="col-md-5">
									<div class="card-image">
										<a href="#pablo">
											<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
										</a>
									</div>
								</div>
								<div class="col-md-7">
									<div class="content">
										<h4 class="card-title">Gina Andrew</h4>
										<h6 class="category text-muted">Web Designer</h6>

										<p class="card-description">
											I love you like Kanye loves Kanye. Don't be scared of the truth.
										</p>

										<div class="footer">
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-youtube"><i class="fa fa-youtube-play"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-twitter"><i class="fa fa-twitter"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-instagram"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-profile card-plain">
								<div class="col-md-5">
									<div class="card-image">
										<a href="#pablo">
											<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
										</a>
									</div>
								</div>
								<div class="col-md-7">
									<div class="content">
										<h4 class="card-title">George West</h4>
										<h6 class="category text-muted">Backend Hacker</h6>

										<p class="card-description">
											I love you like Kanye loves Kanye. Don't be scared of the truth because we need to restart the human foundation.
										</p>

										<div class="footer">
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-linkedin"><i class="fa fa-linkedin"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-facebook"><i class="fa fa-facebook-square"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-google"><i class="fa fa-google"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!--     *********    END TEAM 3      *********      -->


			<!--     *********    TEAM 4     *********      -->

			<div class="team-4 section-image" style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2 class="title">The Executive Team 4</h2>
							<h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
						</div>
					</div>

					<div class="row">

						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">Alec Thompson</h4>
									<h6 class="category text-muted">CEO / Co-Founder</h6>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
									</p>
									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-linkedin btn-round"><i class="fa fa-linkedin"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">George West</h4>
									<h6 class="category text-muted">Backend Hacker</h6>

									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
									</p>
									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-profile">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">Gina Andrew</h4>
									<h6 class="category text-muted">Web Designer</h6>

									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
									</p>
									<div class="footer">
										<a href="#pablo" class="btn btn-just-icon btn-dribbble btn-round"><i class="fa fa-dribbble"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-twitter btn-round"><i class="fa fa-twitter"></i></a>
										<a href="#pablo" class="btn btn-just-icon btn-pinterest btn-round"><i class="fa fa-pinterest"></i></a>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!--     *********    END TEAM 4      *********      -->


			<!--     *********    TEAM 5     *********      -->

			<div class="team-5 section-image" style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2 class="title">The Executive Team 5</h2>
							<h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by providing meaningful information.</h5>
						</div>
					</div>

					<div class="row">

						<div class="col-md-6">
							<div class="card card-profile card-plain">
								<div class="col-md-5">
									<div class="card-image">
										<a href="#pablo">
											<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
										</a>
									</div>
								</div>
								<div class="col-md-7">
									<div class="content">
										<h4 class="card-title">Alec Thompson</h4>
										<h6 class="category text-muted">Founder</h6>

										<p class="card-description">
											Don't be scared of the truth because we need to restart the human foundation in truth...
										</p>

										<div class="footer">
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-twitter"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-facebook-square"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-google"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-profile card-plain">
								<div class="col-md-5">
									<div class="card-image">
										<a href="#pablo">
											<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
										</a>
									</div>
								</div>
								<div class="col-md-7">
									<div class="content">
										<h4 class="card-title">Kendall Andrew</h4>
										<h6 class="category text-muted">Graphic Designer</h6>

										<p class="card-description">
											Don't be scared of the truth because we need to restart the human foundation in truth...
										</p>

										<div class="footer">
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-linkedin"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-facebook-square"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-dribbble"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-google"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-profile card-plain">
								<div class="col-md-5">
									<div class="card-image">
										<a href="#pablo">
											<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
										</a>
									</div>
								</div>
								<div class="col-md-7">
									<div class="content">
										<h4 class="card-title">Gina Andrew</h4>
										<h6 class="category text-muted">Web Designer</h6>

										<p class="card-description">
											I love you like Kanye loves Kanye. Don't be scared of the truth.
										</p>

										<div class="footer">
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-youtube-play"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-twitter"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-instagram"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-profile card-plain">
								<div class="col-md-5">
									<div class="card-image">
										<a href="#pablo">
											<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
										</a>
									</div>
								</div>
								<div class="col-md-7">
									<div class="content">
										<h4 class="card-title">George West</h4>
										<h6 class="category text-muted">Backend Hacker</h6>

										<p class="card-description">
											I love you like Kanye loves Kanye. Don't be scared of the truth because we need to restart the human foundation.
										</p>

										<div class="footer">
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-linkedin"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-facebook-square"></i></a>
											<a href="#pablo" class="btn btn-just-icon btn-simple btn-white"><i class="fa fa-google"></i></a>
										</div>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!--     *********    END TEAM 5      *********      -->

		</div>

		<div class="section" id="projects">

			<!--     *********    PROJECTS 1     *********      -->

			<div class="projects-1" id="projects-1">

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2 class="title">Some of Our Awesome Products - 1</h2>

							<ul class="nav nav-pills nav-pills-rose">
								<li class="active"><a href="#pill1" data-toggle="tab">All</a></li>
								<li><a href="#pill2" data-toggle="tab">Marketing</a></li>
								<li><a href="#pill3" data-toggle="tab">Development</a></li>
								<li><a href="#pill3" data-toggle="tab">Productivity</a></li>
								<li><a href="#pill5" data-toggle="tab">Web Design</a></li>
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
						<div class="col-md-6 col-md-offset-3">

						</div>

						<div class="col-md-6">
							<div class="card card-raised card-background" style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">

								<div class="content">
									<h6 class="category text-info">Productivity</h6>
									<a href="#pablo">
										<h3 class="card-title">The Best Productivity Apps on Market</h3>
									</a>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
									</p>
									<a href="#pablo" class="btn btn-danger btn-round">
										<i class="material-icons">content_copy</i> View App
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-6">
							<div class="card card-raised card-background"  style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">
								<div class="content">
									<h6 class="category text-info">Design</h6>
									<h3 class="card-title">The Sculpture Where Details Matter</h3>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
									</p>
									<a href="#pablo" class="btn btn-info btn-round">
										<i class="material-icons">build</i> View Project
									</a>
								</div>
							</div>
						</div>

						<div class="col-md-12">
							<div class="card card-raised card-background" style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">
								<div class="content">
									<h6 class="category text-info">Marketing</h6>
									<h3 class="card-title">0 to 100.000 Customers in 6 months</h3>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth And I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is...
									</p>
									<a href="#pablo" class="btn btn-warning btn-round">
										<i class="material-icons">subject</i> Case Study
									</a>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!--     *********    END PROJECTS 1      *********      -->


			<!--     *********    PROJECTS 2     *********      -->

			<div class="projects-2" id="projects-2">

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h6 class="text-muted">Our work</h6>
							<h2 class="title">Some of Our Awesome Products - 2</h2>
							<h5 class="description">This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h5>
							<div class="section-space"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="card card-plain">
								<a href="http://www.creative-tim.com/product/material-kit" target="_blank">
									<div class="card-image">
										<img src="http://s3.amazonaws.com/creativetim_bucket/products/38/original/opt_mk_thumbnail.jpg?1458052306"/>
									</div>
								</a>
								<div class="content">
									<a href="http://www.creative-tim.com/product/material-kit" target="_blank">
										<h4 class="card-title">Material Kit Free</h4>
									</a>
									<h6 class="category">Free UI Kit</h6>
									<p class="card-description">
										Material Kit is a Free Bootstrap UI Kit with a fresh, new design inspired by Google's material design. It's a great pleasure to introduce to you the material concepts in an easy to use and beautiful set of components.
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-plain">
								<a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank">
									<div class="card-image">
										<img src="http://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_new_thumbnail.jpg?1449352503" />
									</div>
								</a>
								<div class="content">

									<a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank">
										<h4 class="card-title">Light Bootstrap Dashboard</h4>
									</a>
									<h6 class="category">Premium Template</h6>
									<p class="card-description">
										Light Bootstrap Dashboard PRO is a Bootstrap Admin Theme designed to look simple and beautiful. Forget about boring dashboards and grab yourself a copy to kickstart new project!
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-plain">
								<a href="http://www.creative-tim.com/product/get-shit-done-pro" target="_blank">
									<div class="card-image">
										<img src="http://s3.amazonaws.com/creativetim_bucket/products/26/original/opt_gsdk_new_thumbnail.jpg" />
									</div>
								</a>
								<div class="content">
									<a href="http://www.creative-tim.com/product/get-shit-done-pro" target="_blank">
										<h4 class="card-title">Get Shit Done Kit PRO</h4>
									</a>
									<h6 class="category text-info">Premium UI Kit</h6>
									<p class="card-description">
										Get Shit Done Kit Pro it's a Bootstrap Kit that comes with a huge number of customisable components. They are pixel perfect, light and easy to use and combine with other elements.
									</p>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!--     *********    END PROJECTS 2      *********      -->


			<!--     *********    PROJECTS 3     *********      -->

			<div class="projects-3 section-dark" id="projects-3">

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h6 class="category text-muted">Our work</h6>
							<h2 class="title">Some of Our Awesome Projects - 3</h2>
						</div>
					</div>

					<div class="row">

						<div class="col-md-5 col-md-offset-1">
							<div class="card card-plain">
								<a href="#pablo">
									<div class="card-image">
										<img src="{{ asset('/dist/avatar.jpg') }}" />
									</div>
								</a>
								<div class="content">
									<h6 class="category">Web Design</h6>
									<a href="#pablo">
										<h4 class="card-title">Famous Website Redesign</h4>
									</a>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth.
									</p>

								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="card card-plain">
								<a href="#pablo">
									<div class="card-image">
										<img src="{{ asset('/dist/avatar.jpg') }}" />
									</div>
								</a>
								<div class="content">
									<h6 class="category">Productivity Tools</h6>
									<a href="#pablo">
										<h4 class="card-title">Beautiful Desktop for Designers</h4>
									</a>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth.
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-5 col-md-offset-1">
							<div class="card card-plain">
								<a href="#pablo">
									<div class="card-image">
										<img src="{{ asset('/dist/avatar.jpg') }}" />
									</div>
								</a>
								<div class="content">
									<h6 class="category">Android App</h6>
									<a href="#pablo">
										<h4 class="card-title">Analytics for Android</h4>
									</a>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth.
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-5">
							<div class="card card-plain">
								<a href="#pablo">
									<div class="card-image">
										<img src="{{ asset('/dist/avatar.jpg') }}" />
									</div>
								</a>
								<div class="content">
									<h6 class="category">Website</h6>
									<a href="#pablo">
										<h4 class="card-title">Behance Redesign</h4>
									</a>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth.
									</p>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!--     *********    END PROJECTS 3      *********      -->


			<!--     *********    PROJECTS 4     *********      -->

			<div class="projects-4" id="projects-4">

				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center">
							<h2 class="title">Some of Our Awesome Projects - 4</h2>
							<h5 class="description">This is the paragraph where you can write more details about your projects. Keep you user engaged by providing meaningful information.</h5>
							<div class="section-space"></div>
						</div>
					</div>

					<div class="row">

						<div class="col-md-5 col-md-offset-1">
							<div class="card card-background" style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">
								<a href="#pablo">

								</a>
								<div class="content">
									<label class="label label-rose">Client: Apple</label>
									<a href="#pablo">
										<h3 class="card-title">Beautiful Project</h3>
									</a>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth.
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-5">
							<div class="info info-horizontal">
								<div class="icon icon-info">
									<i class="material-icons">format_paint</i>
								</div>
								<div class="description">
									<h4 class="info-title">Graphic Design</h4>
									<p class="description">
										We've created the design of the website using modern Technologies like Sketch. It was a very interesting collaboration.
									</p>
								</div>
							</div>

							<div class="info info-horizontal">
								<div class="icon icon-primary">
									<i class="material-icons">code</i>
								</div>
								<div class="description">
									<h4 class="info-title">Fully Coded in HTML5</h4>
									<p class="description">
										We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
									</p>
								</div>
							</div>

							<div class="info info-horizontal">
								<div class="icon icon-danger">
									<i class="material-icons">dashboard</i>
								</div>
								<div class="description">
									<h4 class="info-title">CMS Admin Dashboard</h4>
									<p class="description">
										There is also a Fully Customizable CMS Admin Dashboard for this product.
									</p>
								</div>
							</div>
						</div>

					</div>

					<hr />

					<div class="row">

						<div class="col-md-5 col-md-offset-1">
							<div class="info info-horizontal">
								<div class="icon icon-rose">
									<i class="material-icons">timeline</i>
								</div>
								<div class="description">
									<h4 class="info-title">Marketing</h4>
									<p class="description">
										We've created the marketing campaign of the website. It was a very interesting collaboration.
									</p>
								</div>
							</div>

							<div class="info info-horizontal">
								<div class="icon icon-success">
									<i class="material-icons">code</i>
								</div>
								<div class="description">
									<h4 class="info-title">Fully Coded in HTML5</h4>
									<p class="description">
										We've developed the website with HTML5 and CSS3. The client has access to the code using GitHub.
									</p>
								</div>
							</div>

							<div class="info info-horizontal">
								<div class="icon icon-info">
									<i class="material-icons">group</i>
								</div>
								<div class="description">
									<h4 class="info-title">Built Audience</h4>
									<p class="description">
										There is also a Fully Customizable CMS Admin Dashboard for this product.
									</p>
								</div>
							</div>
						</div>

						<div class="col-md-5">
							<div class="card card-background" style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">
								<a href="#pablo">
								</a>
								<div class="content">
									<label class="label label-rose">Client: DJ Khaled</label>
									<a href="#pablo">
										<h2 class="card-title">Another One</h2>
									</a>
									<p class="card-description">
										Don't be scared of the truth because we need to restart the human foundation in truth.
									</p>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!--     *********    END PROJECTS 4      *********      -->

		</div>

		<div class="section" id="testimonials">

			<!--     *********    TESTIMONIALS 1     *********      -->

			<div class="testimonials-1 section-image" style="background-image: url('{{ asset('/dist/avatar.jpg') }}')">

				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<h2 class="title">Our Clients Love Us</h2>
							<h5 class="description">You need more information? Check what other persons are saying about our product. They are very happy with their purchase.</h5>
						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="card card-testimonial">
								<div class="icon">
									<i class="material-icons">format_quote</i>
								</div>
								<div class="content">
									<h5 class="card-description">
										Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love the color mixtures, cards... everything. Keep up the great work!
									</h5>
								</div>

								<div class="footer">
									<h4 class="card-title">Alec Thompson</h4>
									<h6 class="category">@alecthompson</h6>
									<div class="card-avatar">
										<a href="#pablo">
											<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-testimonial">
								<div class="icon">
									<i class="material-icons">format_quote</i>
								</div>
								<div class="content">
									<h5 class="card-description">
										"Don't be scared of the truth because we need to restart the human foundation in truth. That's why I love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is not so attractive"
									</h5>
								</div>

								<div class="footer">
									<h4 class="card-title">Gina Andrew</h4>
									<h6 class="category">@ginaandrew</h6>
									<div class="card-avatar">
										<a href="#pablo">
											<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
										</a>
									</div>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-testimonial">
								<div class="icon">
									<i class="material-icons">format_quote</i>
								</div>
								<div class="content">
									<h5 class="card-description">
										"Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love the color mixtures, cards... everything. Keep up the great work!"
									</h5>
								</div>

								<div class="footer">
									<h4 class="card-title">George West</h4>
									<h6 class="category">@georgewest</h6>
									<div class="card-avatar">
										<a href="#pablo">
											<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
										</a>
									</div>
								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!--     *********    END TESTIMONIALS 1      *********      -->


			<!--     *********    TESTIMONIALS 2     *********      -->

			<div class="testimonials-2 section-dark">

				<div class="container">

					<div class="row">

						<div id="carousel-testimonial" class="carousel slide" data-ride="carousel">

							<div class="carousel-inner" role="listbox">
								<div class="item active">
									<div class="card card-testimonial card-plain">
										<div class="card-avatar">
											<a href="#pablo">
												<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
											</a>
										</div>

										<div class="content">
											<h5 class="card-description">"I speak yell scream directly at the old guard on behalf of the future. I gotta say at that time I’d like to meet Kanye I speak yell scream directly at the old guard on behalf of the future. My brother Chance!!! <br>Thank you for letting me work on this masterpiece. One of my favorite people."
											</h5>
											<h4 class="card-title">Kendall Thompson</h4>
											<h6 class="category text-muted">CEO @ Marketing Digital Ltd.</h6>
											<div class="footer">
												<i class="material-icons text-warning">star</i>
												<i class="material-icons text-warning">star</i>
												<i class="material-icons text-warning">star</i>
												<i class="material-icons text-warning">star</i>
												<i class="material-icons text-warning">star</i>
											</div>
										</div>
									</div>
								</div>
								<div class="item">
									<div class="card card-testimonial card-plain">
										<div class="card-avatar">
											<a href="#pablo">
												<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
											</a>
										</div>

										<div class="content">
											<h5 class="card-description">"Thank you Anna for the invite thank you to the whole Vogue team Called I Miss the Old Kanye At the God's last game Chop up the soul Kanye. I promise I will never let the people down. I want a better life for all!!! Pablo Pablo Pablo Pablo! Thank you Anna for the invite thank you to the whole Vogue team."
											</h5>
											<h4 class="card-title">Christian Louboutin</h4>
											<h6 class="category text-muted">Designer @ Louboutin & Co.</h6>
											<div class="footer">
												<i class="material-icons text-warning">star</i>
												<i class="material-icons text-warning">star</i>
												<i class="material-icons text-warning">star</i>
												<i class="material-icons text-warning">star</i>
											</div>
										</div>
									</div>
								</div>
							</div>

							<a class="left carousel-control" href="#carousel-testimonial" role="button" data-slide="prev">
								<i class="material-icons" aria-hidden="true">chevron_left</i>
							</a>
							<a class="right carousel-control" href="#carousel-testimonial" role="button" data-slide="next">
								<i class="material-icons" aria-hidden="true">chevron_right</i>
							</a>
						</div>

					</div>

				</div>
			</div>

			<!--     *********    END TESTIMONIALS 2      *********      -->


			<!--     *********    TESTIMONIALS 1     *********      -->

			<div class="testimonials-3">

				<div class="container">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center">
							<h2 class="title">What Clients Say</h2>

						</div>
					</div>

					<div class="row">
						<div class="col-md-4">
							<div class="card card-testimonial card-plain">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">Mike Andrew</h4>
									<h6 class="category text-muted">CEO @ Marketing Digital Ltd.</h6>
									<h5 class="card-description">"I speak yell scream directly at the old guard on behalf of the future. I gotta say at that time I’d like to meet Kanye I speak yell scream directly at the old guard on behalf of the future."
									</h5>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-testimonial card-plain">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">Tina Thompson</h4>
									<h6 class="category text-muted">Marketing @ Apple Inc.</h6>
									<h5 class="card-description">"I promise I will never let the people down. I want a better life for all!!! Pablo Pablo Pablo Pablo! Thank you Anna for the invite thank you to the whole Vogue team It wasn’t any Kanyes I love Rick Owens’ bed design but the back is too high for the beams and angle of the ceiling"
									</h5>
								</div>
							</div>
						</div>

						<div class="col-md-4">
							<div class="card card-testimonial card-plain">
								<div class="card-avatar">
									<a href="#pablo">
										<img class="img" src="{{ asset('/dist/avatar.jpg') }}" />
									</a>
								</div>

								<div class="content">
									<h4 class="card-title">Gina West</h4>
									<h6 class="category text-muted">CFO @ Apple Inc.</h6>
									<h5 class="card-description">"I've been trying to figure out the bed design for the master bedroom at our Hidden Hills compound... Royère doesn't make a Polar bear bed but the Polar bear. This is a very nice testimonial about this company."
									</h5>

								</div>
							</div>
						</div>

					</div>

				</div>
			</div>

			<!--     *********    END TESTIMONIALS 3      *********      -->

		</div>

		{{--<nav id="cd-vertical-nav">--}}
			{{--<ul>--}}
				{{--<li>--}}
					{{--<a href="#headers" data-number="1">--}}
						{{--<span class="cd-dot"></span>--}}
						{{--<span class="cd-label">Headers</span>--}}
					{{--</a>--}}
				{{--</li>--}}
				{{--<li>--}}
					{{--<a href="#features" data-number="2">--}}
						{{--<span class="cd-dot"></span>--}}
						{{--<span class="cd-label">Features</span>--}}
					{{--</a>--}}
				{{--</li>--}}
				{{--<li>--}}
					{{--<a href="#blogs" data-number="3">--}}
						{{--<span class="cd-dot"></span>--}}
						{{--<span class="cd-label">Blogs</span>--}}
					{{--</a>--}}
				{{--</li>--}}
				{{--<li>--}}
					{{--<a href="#teams" data-number="4">--}}
						{{--<span class="cd-dot"></span>--}}
						{{--<span class="cd-label">Teams</span>--}}
					{{--</a>--}}
				{{--</li>--}}
				{{--<li>--}}
					{{--<a href="#projects" data-number="5">--}}
						{{--<span class="cd-dot"></span>--}}
						{{--<span class="cd-label">Projects</span>--}}
					{{--</a>--}}
				{{--</li>--}}
				{{--<li>--}}
					{{--<a href="#testimonials" data-number="7">--}}
						{{--<span class="cd-dot"></span>--}}
						{{--<span class="cd-label">Testimonials</span>--}}
					{{--</a>--}}
				{{--</li>--}}
			{{--</ul>--}}
		{{--</nav>--}}
	</div>


@endsection

@section('js')
	<script src="http://s0.qhimg.com/!61f821bf/fullpage.js"></script>

	<script>
//        $(function(){
//            $('#dowebok').fullpage({
//                //sectionsColor: ['#1bbc9b', '#4BBFC3', '#7BAABE', '#f90'],
//                'navigation': true
//            });
//        });
	</script>
@endsection





