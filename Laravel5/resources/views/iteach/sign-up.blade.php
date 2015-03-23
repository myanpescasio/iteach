@extends('iteach.indextemplate')

@section('content')
						<?php
							Auth::logout();
						?>
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<strong>Whoops!</strong> There were some problems with your input.<br><br>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
	
						<form id="contact-form">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">
						<!-- First Name & Last Name -->	
						<div class="row marginbot-20">
							<div class="col-md-6 xs-marginbot-20">
								<input type="text" class="form-control input-lg" id="firstName" placeholder="First Name" required="required" />
							</div>
							<div class="col-md-6">
								<input type="email" class="form-control input-lg" id="lastName" placeholder="Last Name" required="required" />
							</div>
						</div>
						<!-- Username & Email Address -->
						<div class="row">
							<div class="col-md-12">
								<div class="form-group">
										<input type="text" class="form-control input-lg" id="username" placeholder="Username" required="required" />
								</div>
								<div class="form-group">
										<input type="email" class="form-control input-lg" id="emailAddress" placeholder="Email Address" required="required" />
								</div>
							</div>
						</div>
						<!-- Password & Confirm Password -->
						<div class="row">
							<div class="col-md-6 xs-marginbot-20">
							<div class="form-group">
								<input type="password" class="form-control input-lg" id="password1" placeholder="Enter Password" required="required" />
							</div>
							</div>
							<div class="col-md-6">
							<div class="form-group">
								<input type="password" class="form-control input-lg" id="password2" placeholder="Confirm Password" required="required" />
							</div>
							</div>
							<div class="col-md-12">
							<button type="submit" class="btn btn-skin btn-lg btn-block marginbot-10" id="btnContactUs">
									Register</button>
							</div>
							<a href="#" class="col-lg-offset-10">< Back</a>
						</div>

						</form>
@endsection