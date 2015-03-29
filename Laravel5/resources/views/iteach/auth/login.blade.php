@extends('iteach.auth.auth')

@section('content')		
						@if (count($errors) > 0)
						<div class="animatedParent">
							<div class="animated bounceInDown">
								<div class="col-md-9 xs-marginbot-20">
									<strong>Whoops!</strong> There are problems in the input.<br>
									<ul>
										@foreach ($errors as $error)
											{{ $error }}<br>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
						@endif
	
						<form id="contact-form" role="form" method="POST" action="{{ url('/attempt_login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<!-- Username & Password -->
						<div class="row">
							<div class="col-md-9 xs-marginbot-20">
							<div class="form-group">
								<input type="text" class="form-control input-lg" id="username" name="username" placeholder="Username" required="required" value="{{ $old['username'] }}"/>
							</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-9">
							<div class="form-group">
								<input type="password" class="form-control input-lg" id="password" name="password" placeholder="Confirm Password" required="required" value="{{ old('password') }}"/>
							</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-9">
							<button type="submit" class="btn btn-skin btn-lg btn-block marginbot-10" id="btnContactUs">
								Login
							</button>
							<a href="index" class="col-lg-offset-10">< Back</a>
							</div>

						</div>

						</form>
@endsection