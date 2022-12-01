
 
<!DOCTYPE html>
<html>
<head>
	<title>FRD</title>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css"> -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
	<link rel="stylesheet" type="text/css" href="assets/fonts/stylesheet.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="{{URL::asset('css/custom.css')}}">
    @yield('link')
</head>
<body>
	
	<!-- ___________ Code for Header ____________ -->
	<header>
		<div class="container">
			<div class="header-wrap">
				<img class="logo" src="{{URL::asset('assets/img/brand/logo.png')}}">
				<a href="#" class="humburger">
					<span class="humburger-lg"></span>
					<span class="humburger-sm"></span>
					<span class="humburger-lg"></span>
					<span class="humburger-sm"></span>
				</a>
				<ul class="menubar">
					<li><a href="#"><span></span>Home</a></li>
					<li><a href="#"><span></span>Book Mobile</a></li>
					<li><a href="#"><span></span>Phone Repair</a></li>
					<li><a href="#"><span></span>EDV-Repair</a></li>
					<li class="header-cart"><a href="#"><i class="fas fa-shopping-cart"></i></a></li>
				</ul>
			</div>
		</div>
	</header>

                @include('flash-message')
                @yield('content')
          



	<!-- ___________ Code for Footer ____________  -->
	<footer>
		<div class="top_footer">
			<div class="container">
				<div class="row">
					<div class="col-lg-3 col-md-4">
						<div class="footer-items">
							<h4><span>About us</span></h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur interdum gravida eros, ac consequat mi malesuada eget. Fusce venenatis consectetur placerat.</p>
						</div>
					</div>
					<div class="col-lg-2 col-md-1"></div>
					<div class="col-lg-3 col-md-3">
						<div class="footer-items">
							<h4><span>Quick links</span></h4>
							<ul>
								<li><a href="#">Home</a></li>
								<li><a href="#">About us</a></li>
								<li><a href="#">Contact us</a></li>
								<li><a href="#">Privacy & Policy</a></li>
								<li><a href="{{route('term')}}">Term & Condition</a></li>
							</ul>
						</div>
					</div>
					<div class="col-lg-1 col-md-1"></div>
					<div class="col-lg-3 col-md-3">
						<div class="footer-items">
							<h4><span>Contact us</span></h4	>
							<ul>
								<li><a href="#"><i class="fa-solid fa-phone"></i>+91-1234567890</a></li>
								<li><a href="#"><i class="fa-solid fa-envelope"></i>info@gmail.com</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="btm_footer">
			<div class="container">
				<div class="row">
					<div class="col-sm-12">
						<div class="footer-icons">
							<a href="#"><i class="fa-brands fa-facebook"></i></a>
							<a href="#"><i class="fa-brands fa-twitter"></i></a>
							<a href="#"><i class="fa-brands fa-square-instagram"></i></a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>


	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.0/jquery.min.js"></script>
	<script type="text/javascript" src="{{URL::asset('js/custom.js')}}"></script>
    @yield('scripts')
        @stack('custom-scripts')
</body>
</html>
       
