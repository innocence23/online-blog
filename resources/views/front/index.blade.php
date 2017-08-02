@extends('layouts.front')

@section('html_title', '首页')

@section('main-content')
    <div class="cd-section" id="headers">
        <!-- Carousel Card -->
        <div class="card card-raised card-carousel">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <div class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#carousel-example-generic" data-slide-to="0" class=""></li>
                        <li data-target="#carousel-example-generic" data-slide-to="1" class="active"></li>
                        <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
                    </ol>
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item">
                            <img src="/assets/img/faces/bg2.jpg" alt="Awesome Image">
                            <div class="carousel-caption">
                                <h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
                            </div>
                        </div>
                        <div class="item active">
                            <img src="/assets/img/faces/bg3.jpg" alt="Awesome Image">
                            <div class="carousel-caption">
                                <h4><i class="material-icons">location_on</i> Somewhere Beyond, United States</h4>
                            </div>
                        </div>
                        <div class="item">
                            <img src="/assets/img/faces/bg.jpg" alt="Awesome Image">
                            <div class="carousel-caption">
                                <h4><i class="material-icons">location_on</i> Yellowstone National Park, United States</h4>
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
        <!-- End Carousel Card -->
    </div>

    <div class="cd-section" id="features">
        <div class="container">
            <div class="features-1">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h2 class="title">Why our product is the best</h2>
                        <h5 class="description">This is the paragraph where you can write more details about your product. Keep you user
                            engaged by providing meaningful information. Remember that by this time, the user is curious, otherwise he
                            wouldn't scroll to get here. Add a button if you want the user to see more.</h5>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-info">
                                <i class="material-icons">chat</i>
                            </div>
                            <h4 class="info-title">Free Chat</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph
                                describing a feature will be enough.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-success">
                                <i class="material-icons">verified_user</i>
                            </div>
                            <h4 class="info-title">Verified Users</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph
                                describing a feature will be enough.</p>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="info">
                            <div class="icon icon-danger">
                                <i class="material-icons">fingerprint</i>
                            </div>
                            <h4 class="info-title">Fingerprint</h4>
                            <p>Divide details about your product or agency work into parts. Write a few lines about each one. A paragraph
                                describing a feature will be enough.</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="features-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="phone-container">
                            <img src="/assets/img/iphone.png"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <br/><br/>
                        <h2 class="title">Your life will be much easier</h2>
                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">extension</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Hundreds of Components</h4>
                                <p>The moment you use Material Kit, you know you’ve never felt anything like it. With a single use, this
                                    powerfull UI Kit lets you do more than ever before. </p>
                            </div>
                        </div>

                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">child_friendly</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Easy to Use</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A
                                    paragraph describing a feature will be enough.</p>
                            </div>
                        </div>

                        <div class="info info-horizontal">
                            <div class="icon icon-primary">
                                <i class="material-icons">watch_later</i>
                            </div>
                            <div class="description">
                                <h4 class="info-title">Fast Prototyping</h4>
                                <p>Divide details about your product or agency work into parts. Write a few lines about each one. A
                                    paragraph describing a feature will be enough.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cd-section" id="teams">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title">The Executive Team 3</h2>
                    <h5 class="description">This is the paragraph where you can write more details about your team. Keep you user engaged by
                        providing meaningful information.</h5>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="card card-profile card-plain">
                        <div class="col-md-5">
                            <div class="card-image">
                                <a href="#pablo">
                                    <img class="img" src="{{ asset('/assets/img/faces/avatar.jpg') }}"/>
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
                                    <img class="img" src="{{ asset('/assets/img/faces/avatar.jpg') }}"/>
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
                                    <img class="img" src="{{ asset('/assets/img/faces/avatar.jpg') }}"/>
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
                                    <img class="img" src="{{ asset('/assets/img/faces/avatar.jpg') }}"/>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-7">
                            <div class="content">
                                <h4 class="card-title">George West</h4>
                                <h6 class="category text-muted">Backend Hacker</h6>

                                <p class="card-description">
                                    I love you like Kanye loves Kanye. Don't be scared of the truth because we need to restart the human
                                    foundation.
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

    <div class="cd-section" id="projects">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h2 class="title">Some of Our Awesome Products - 2</h2>
                    <h5 class="description">This is the paragraph where you can write more details about your projects. Keep you user
                        engaged by providing meaningful information.</h5>
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
                                Material Kit is a Free Bootstrap UI Kit with a fresh, new design inspired by Google's material design. It's
                                a great pleasure to introduce to you the material concepts in an easy to use and beautiful set of
                                components.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-plain">
                        <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank">
                            <div class="card-image">
                                <img src="http://s3.amazonaws.com/creativetim_bucket/products/34/original/opt_lbd_pro_new_thumbnail.jpg?1449352503"/>
                            </div>
                        </a>
                        <div class="content">

                            <a href="http://www.creative-tim.com/product/light-bootstrap-dashboard-pro" target="_blank">
                                <h4 class="card-title">Light Bootstrap Dashboard</h4>
                            </a>
                            <h6 class="category">Premium Template</h6>
                            <p class="card-description">
                                Light Bootstrap Dashboard PRO is a Bootstrap Admin Theme designed to look simple and beautiful. Forget about
                                boring dashboards and grab yourself a copy to kickstart new project!
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-plain">
                        <a href="http://www.creative-tim.com/product/get-shit-done-pro" target="_blank">
                            <div class="card-image">
                                <img src="http://s3.amazonaws.com/creativetim_bucket/products/26/original/opt_gsdk_new_thumbnail.jpg"/>
                            </div>
                        </a>
                        <div class="content">
                            <a href="http://www.creative-tim.com/product/get-shit-done-pro" target="_blank">
                                <h4 class="card-title">Get Shit Done Kit PRO</h4>
                            </a>
                            <h6 class="category text-info">Premium UI Kit</h6>
                            <p class="card-description">
                                Get Shit Done Kit Pro it's a Bootstrap Kit that comes with a huge number of customisable components. They
                                are pixel perfect, light and easy to use and combine with other elements.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cd-section" id="testimonials">
        <div class="testimonials-1 section-image" style="background-image: url('{{ asset('/assets/img/faces/avatar.jpg') }}')">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-md-offset-3 text-center">
                        <h2 class="title">Our Clients Love Us</h2>
                        <h5 class="description">You need more information? Check what other persons are saying about our product. They are
                            very happy with their purchase.</h5>
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
                                    Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love
                                    the color mixtures, cards... everything. Keep up the great work!
                                </h5>
                            </div>

                            <div class="footer">
                                <h4 class="card-title">Alec Thompson</h4>
                                <h6 class="category">@alecthompson</h6>
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('/assets/img/faces/avatar.jpg') }}"/>
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
                                    "Don't be scared of the truth because we need to restart the human foundation in truth. That's why I
                                    love you like Kanye loves Kanye I love Rick Owens’ bed design but the back is not so attractive"
                                </h5>
                            </div>

                            <div class="footer">
                                <h4 class="card-title">Gina Andrew</h4>
                                <h6 class="category">@ginaandrew</h6>
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('/assets/img/faces/avatar.jpg') }}"/>
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
                                    "Your products, all the kits that I have downloaded from your site and worked with are sooo cool! I love
                                    the color mixtures, cards... everything. Keep up the great work!"
                                </h5>
                            </div>

                            <div class="footer">
                                <h4 class="card-title">George West</h4>
                                <h6 class="category">@georgewest</h6>
                                <div class="card-avatar">
                                    <a href="#pablo">
                                        <img class="img" src="{{ asset('/assets/img/faces/avatar.jpg') }}"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection

@section('css')
    <style>
        .navbar {
            margin-bottom: 0 !important;
        }
        #carousel-example-generic img {
            height: 500px !important;
        }
    </style>
@endsection
