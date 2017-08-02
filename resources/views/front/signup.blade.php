@extends('layouts.front-simple')

@section('html_title', '注册')

@section('main-content')
	<div class="container">
		<div class="row">
			<div class="col-md-10 col-md-offset-1">
				<div class="card card-signup">
					<h2 class="card-title text-center">账号注册</h2>
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="social text-center">
								<button class="btn btn-just-icon btn-round btn-linkedin">
									<i class="fa fa-weixin"> </i>
									<div class="ripple-container"></div>
								</button>
								<button class="btn btn-just-icon btn-round btn-youtube">
									<i class="fa fa-weibo"> </i>
									<div class="ripple-container"></div>
								</button>
								<button class="btn btn-just-icon btn-round btn-twitter">
									<i class="fa fa-qq"> </i>
									<div class="ripple-container"></div>
								</button>
								<button class="btn btn-just-icon btn-round btn-google">
									<i class="fa fa-google"> </i>
									<div class="ripple-container"></div>
								</button>
								<h4> 传统注册 </h4>
							</div>

							<form class="form" action="{{ url('register') }}" method="post">
								{!! csrf_field() !!}
								<div class="content">
									<div class="input-group {{ $errors->has('name') ? 'has-error' : '' }}">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<input type="text" class="form-control" placeholder="昵称" value="{{ old('name') }}" name="name">
										@if ($errors->has('name'))
											<span class="help-block">
												<strong>{{ $errors->first('name') }}</strong>
											</span>
										@endif
									</div>
									<div class="input-group {{ $errors->has('email') ? 'has-error' : '' }}">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="email" class="form-control" placeholder="邮箱" value="{{ old('email') }}" name="email">
										@if ($errors->has('email'))
											<span class="help-block">
												<strong>{{ $errors->first('email') }}</strong>
											</span>
										@endif
									</div>

									<div class="input-group {{ $errors->has('password') ? 'has-error' : '' }} ">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" placeholder="密码" class="form-control"  name="password"/>
										@if ($errors->has('password'))
											<span class="help-block">
												<strong>{{ $errors->first('password') }}</strong>
											</span>
										@endif
									</div>
									<div class="input-group  {{ $errors->has('password_confirmation') ? 'has-error' : '' }}">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" placeholder="确认密码" class="form-control" name="password_confirmation"/>
										@if ($errors->has('password_confirmation'))
											<span class="help-block">
												<strong>{{ $errors->first('password_confirmation') }}</strong>
											</span>
										@endif
									</div>
									<!-- If you want to add a checkbox to this form, uncomment this code -->
									<div class="checkbox">
										<label>
											<input type="checkbox" name="optionsCheckboxes" checked>
											阅读并同意 <a href="{{route('item')}}" target="_blank">用户注册协议和条款</a>.
										</label>
									</div>
								</div>
								<div class="footer text-center">
									<button type="submit" class="btn btn-primary">注册</button>
								</div>
								<div style="margin: 2px 15px;" >
									已有帐号？<a href="{{ url('login') }}">立即登陆</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection