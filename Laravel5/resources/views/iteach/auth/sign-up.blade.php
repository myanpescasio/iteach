@extends('iteach.auth.auth')

@section('content')
						@if (count($errors) > 0)
							<div class="col-md-12 xs-marginbot-20">
								<strong>Whoops!</strong> There are problems in the input.<br>
								<ul>
									@foreach ($errors as $error)
										{{ $error }}<br>
									@endforeach
								</ul>
							</div>
						@endif
	
						<form id="contact-form" role="form" method="POST" action="{{ url('/attempt_register') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<!-- First Name & Last Name -->	
						<!-- Username & Email Address -->
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
										<input type="text" class="form-control input-lg" id="username"  name="username" placeholder="Username" required="required" value="{{ $old['username'] }}"/>
								</div>
								<div class="form-group">
										<input type="text" class="form-control input-lg" id="employeeID"  name="employeeID" placeholder="Employee ID" required="required"/>
								</div>
							</div>
						</div>
						<!-- Password & Confirm Password -->
						<div class="row">
							<div class="col-md-6 xs-marginbot-20">
							<div class="form-group">
								<input type="password" class="form-control input-lg" id="password1"  name="password1" placeholder="Enter Password" required="required" />
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
								<input type="password" class="form-control input-lg" id="password2"  name="password2" placeholder="Confirm Password" required="required" />
							</div>
							</div>
							<div class="col-md-12">
							<button type="submit" class="btn btn-skin btn-lg btn-block marginbot-10" id="btnContactUs">
									Register</button>
							</div>
							<a href="index" class="col-lg-offset-10">< Back</a>
						</div>

						</form>
@endsection