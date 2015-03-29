<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    @if($data['type'] == 'li')
		<title>Login</title>
	@else
		<title>Sign Up</title>
	@endif	

    <!-- css -->
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/nivo-lightbox.css" rel="stylesheet" />
	<link href="css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
	<link href="css/animations.css" rel="stylesheet" />
    <link href="css/style.css" rel="stylesheet">
	<link href="color/default.css" rel="stylesheet">

</head>

<body id="page-top" data-spy="scroll" data-target=".navbar-custom" class="color-dark bg-gray">
	
	<!-- Section: SIGN UP -->
    <section id="sign-up" class="home-section text-center">
		<div class="container marginbot-50">
			<div class="row">
				<div class="col-lg-8 col-lg-offset-2">
					<div class="animatedParent">
					<div class="section-heading text-center">
					<img id="sign-up-logo" src="img/logo-temp.png" class="marginbot-50">
					
						@if($data['type'] == 'li')
							@if (count($errors) > 0)
								<h2 id="sign-up-title" class="h-bold">LOGIN</h2>
							@else
								<h2 id="sign-up-title" class="h-bold animated bounceInDown">LOGIN</h2>
							@endif
						@else
							@if (count($errors) > 0)
								<h2 id="sign-up-title" class="h-bold">SIGN UP</h2>
							@else
								<h2 id="sign-up-title" class="h-bold animated bounceInDown">SIGN UP</h2>
							@endif
						@endif
					</div>
					</div>
				</div>
			</div>
		</div>

		<!-- Sign Up Form -->
		<div class="container">
			@if($data['type'] == 'li')
				<div class="row marginbot-80">
					<div class="col-lg-8 col-md-offset-3">
			@else
				<div class="row">
					<div class="col-lg-8 col-md-offset-2">
			@endif
					@yield('content');

				</div>
			</div>	
		</div>
	</section>
	<!-- /Section: SIGN UP -->


    <!-- Core JavaScript Files -->
    <script src="js/jquery.min.js"></script>	 
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	<script src="js/jquery.sticky.js"></script>
    <script src="js/jquery.easing.min.js"></script>	
	<script src="js/jquery.scrollTo.js"></script>
	<script src="js/jquery.appear.js"></script>
	<script src="js/stellar.js"></script>
	<script src="js/nivo-lightbox.min.js"></script>
	
    <script src="js/custom.js"></script>
	<script src="js/css3-animate-it.js"></script>

</body>

</html>
