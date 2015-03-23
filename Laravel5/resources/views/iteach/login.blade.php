@extends('iteach.indextemplate')

@section('content')		
						@if (count($errors) > 0)
							<div class="alert alert-danger">
								<strong>Whoops!</strong> There are problems in the input.<br><br>
								<ul>
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
								</ul>
							</div>
						@endif
	
						<form id="contact-form" role="form" method="POST" action="{{ url('/auth/login') }}">
						<input type="hidden" name="_token" value="{{ csrf_token() }}">

						<!-- Username & Password -->
						<div class="row">
							<div class="col-md-9 xs-marginbot-20">
							<div class="form-group">
								<input type="text" class="form-control input-lg" id="username" name="username" placeholder="Username" required="required" value="{{ old('username') }}"/>
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
							<a href="#" class="col-lg-offset-10">< Back</a>
							</div>

						</div>

						</form>
@endsection