<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/ico" href="{{asset('/images/logo/'. $setting->favicon)}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <!--[if IE]>
    <link rel="shortcut icon" href="/favicon.ico" type="image/vnd.microsoft.icon">
    <![endif]-->

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>Job Dcodetech</title>

	<!-- Bootstrap Css -->
	<link href="{{asset('assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}" rel="stylesheet" />

	<!-- Dashboard Css -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />

	<!-- Font-awesome  Css -->
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />

	<!--Horizontal Menu-->
	<link href="{{asset('assets/plugins/horizontal/horizontal-menu/animation/fade-down.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/plugins/horizontal/horizontal-menu/horizontal.css')}}" rel="stylesheet" />

	<!--Select2 Plugin -->
	<link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />

	<!-- Cookie css -->
	<link href="{{asset('assets/plugins/cookie/cookie.css')}}" rel="stylesheet">

	<!-- Owl Theme css-->
	<link href="{{asset('assets/plugins/owl-carousel/owl.carousel.css')}}" rel="stylesheet" />

	<!-- Custom scroll bar css-->
	<link href="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.css')}}" rel="stylesheet" />

	<!-- COLOR-SKINS -->
	<link id="theme" rel="stylesheet" type="text/css" media="all"
        href="{{asset('assets/color-skins/color-skins/color10.css')}}" />
        <script>
    window.Laravel =  <?php echo json_encode([
        'csrfToken' => csrf_token(),
    ]); ?>
  </script>
    <!-- Styles -->
    @yield('head')

</head>
<body>
<div id="global-loader">
		<img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="">
	</div>
    <div id="app"  style="position: relative">
        @yield('top_bar')
        @yield('content')
  	<!--Footer Section-->
	<section style="display:{{$hideFooter?'none':'block'}}">
		<footer class="bg-dark text-white cover-image" data-image-src="../assets/images/banners/banner3.jpg">
			<div class="footer-main">
				<div class="container">
					<div class="row">
						<div class="col-lg-2 col-md-12">
							<h6>Job Categories</h6>
							<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
							<ul class="list-unstyled mb-0">
								<li><a href="#">Developement</a></li>
								<li><a href="#">Designing</a></li>
								<li><a href="#">Marketing</a></li>
								<li><a href="#">Others</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-12">
							<h6>Job Type</h6>
							<hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto">
							<ul class="list-unstyled mb-0">
								<li><a href="#">Work from home</a></li>
								<li><a href="#">Internship</a></li>
								<li><a href="#">Part time</a></li>
								<li><a href="#">Full time</a></li>
							</ul>
						</div>
						<div class="col-lg-2 col-md-12">
							<h6>Resources</h6>
							<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
							<ul class="list-unstyled mb-0">
								<li><a href="#">Support</a></li>
								<li><a href="#">FAQ</a></li>
								<li><a href="#">Terms of Service</a></li>
								<li><a href="#">Contact Details</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-12">
							<h6>Popular Ads</h6>
							<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
							<ul class="list-unstyled mb-0">
								<li><a href="#"><i class="fa fa-caret-right text-white-50"></i> Educational college
										Ads</a></li>
								<li><a href="#"><i class="fa fa-caret-right text-white-50"></i> Free Lancer for Web
										Developer</a></li>
								<li><a href="#"><i class="fa fa-caret-right text-white-50"></i> Searching for
										Developer</a></li>
								<li><a href="#"><i class="fa fa-caret-right text-white-50"></i> BPO Online In
										Bangalore</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-12">
							<h6 class="mb-2">Subscribe</h6>
							<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
							<div class="input-group w-100">
								<input type="text" class="form-control  border" placeholder="Email">
								<div class="input-group-append ">
									<button type="button" class="btn btn-primary "> Subscribe </button>
								</div>
							</div>
							<h6 class="mb-2 mt-5">Payments</h6>
							<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
							<ul class="payments mb-0">
								<li>
									<a href="javascript:;" class="payments-icon"><i class="fa fa-cc-amex"
											aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;" class="payments-icon"><i class="fa fa-cc-visa"
											aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;" class="payments-icon"><i class="fa fa-credit-card-alt"
											aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;" class="payments-icon"><i class="fa fa-cc-mastercard"
											aria-hidden="true"></i></a>
								</li>
								<li>
									<a href="javascript:;" class="payments-icon"><i class="fa fa-cc-paypal"
											aria-hidden="true"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="text-white-50 border-top p-0">
				<div class="container">
					<div class="row d-flex">
						<div class="col-lg-8 col-sm-12  mt-2 mb-2 text-left ">
							Copyright © 2019 <a href="index.html" class="fs-14 text-white">rejoin</a>. Designed by <a
								href="spruko.com" class="fs-14 text-white">Spruko</a> All rights reserved.
						</div>
						<div class="col-lg-4 col-sm-12 ml-auto mb-2 mt-2 d-none d-lg-block">
							<ul class="social mb-0">
								<li>
									<a class="social-icon" href=""><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a class="social-icon" href=""><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a class="social-icon" href=""><i class="fa fa-rss"></i></a>
								</li>
								<li>
									<a class="social-icon" href=""><i class="fa fa-youtube"></i></a>
								</li>
								<li>
									<a class="social-icon" href=""><i class="fa fa-linkedin"></i></a>
								</li>
								<li>
									<a class="social-icon" href=""><i class="fa fa-google-plus"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			<div class="text-white p-0 border-top">
				<div class="container">
					<div class="p-2 text-center footer-links">
						<a href="#" class="btn btn-link">How It Works</a>
						<a href="#" class="btn btn-link">About Us</a>
						<a href="#" class="btn btn-link">Pricing</a>
						<a href="#" class="btn btn-link">Ads Categories</a>
						<a href="#" class="btn btn-link">Privacy Policy</a>
						<a href="#" class="btn btn-link">Terms Of Conditions</a>
						<a href="#" class="btn btn-link">Blog</a>
						<a href="#" class="btn btn-link">Contact Us</a>
						<a href="#" class="btn btn-link">Premium Ad</a>
					</div>
				</div>
			</div>
		</footer>
	</section>
	<!--Footer Section-->
    </div>
	<!-- Notification -->
	<a href="advanced-search.html" id="notification"><span class="notification-text">Create Job Alert</span><i
			class="fa fa-bell"></i></a>

	<!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fa fa-arrow-up"></i></a>

	<!-- JQuery js-->
	<script src="{{asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>

	<!-- Bootstrap js -->
	<script src="{{asset('assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>

	<!--JQuery Sparkline Js-->
	<script src="{{asset('assets/js/vendors/jquery.sparkline.min.js')}}"></script>

	<!-- Circle Progress Js-->
	<script src="{{asset('assets/js/vendors/circle-progress.min.js')}}"></script>

	<!-- Star Rating Js-->
	<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>

	<!--Counters -->
	<script src="{{asset('assets/plugins/counters/counterup.min.js')}}"></script>
	<script src="{{asset('assets/plugins/counters/waypoints.min.js')}}"></script>
	<script src="{{asset('assets/plugins/counters/numeric-counter.js')}}"></script>

	<!--Owl Carousel js -->
	<script src="{{asset('assets/plugins/owl-carousel/owl.carousel.js')}}"></script>

	<!--Horizontal Menu-->
	<script src="{{asset('assets/plugins/horizontal/horizontal-menu/horizontal.js')}}"></script>

	<!--JQuery TouchSwipe js-->
	<script src="{{asset('assets/js/jquery.touchSwipe.min.js')}}"></script>

	<!--Select2 js -->
	<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>
	<script src="{{asset('assets/js/select2.js')}}"></script>

	<!-- sticky Js-->
	<script src="{{asset('assets/js/sticky.js')}}"></script>

	<!-- Ion.RangeSlider -->
	<script src="{{asset('assets/plugins/jquery-uislider/jquery-ui.js')}}"></script>

	<!--Showmore Js-->
	<script src="{{asset('assets/js/jquery.showmore.js')}}"></script>
	<script src="{{asset('assets/js/showmore.js')}}"></script>

	<!-- Cookie js -->
	<script src="{{asset('assets/plugins/cookie/jquery.ihavecookies.js')}}"></script>
	<script src="{{asset('assets/plugins/cookie/cookie.js')}}"></script>

	<!-- Custom scroll bar Js-->
	<script src="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

	<!-- Swipe Js-->
	<script src="{{asset('assets/js/swipe.js')}}"></script>

	<!-- Scripts Js-->
	<script src="{{asset('assets/js/scripts2.js')}}"></script>

	<!-- Custom Js-->
	<script src="{{asset('assets/js/custom.js')}}"></script>
    @yield('scripts')
</body>
</html>
