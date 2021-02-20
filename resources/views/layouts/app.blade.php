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
	<title>Jobping</title>
	@yield('top_head_files')

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
	<link id="theme" rel="stylesheet" type="text/css" media="all" href="{{asset('assets/color-skins/color-skins/color10.css')}}" />
	<script>
		window.Laravel = <?php echo json_encode([
								'csrfToken' => csrf_token(),
							]); ?>
	</script>
	<!-- Styles -->
	@yield('head')

</head>

<!--Header Main-->


<!--/Header Main-->

<body>
	<!-- <div id="global-loader">
		<img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="">
	</div> -->
	<div id="app" style="position: relative">

		@yield('top_bar')

		@yield('content')
		<!--Footer Section-->
		<section style="display:{{@$hideFooter?'none':'block'}}">
			<footer class="bg-dark text-white cover-image" data-image-src="./assets/images/banners/banner3.jpg">
				<div class="footer-main">
					<div class="container">
						<div class="row justify-content-between">
							<div class="col-lg-3 col-md-12">
								<h6>About us</h6>
								<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">

								<p class="pr-4 text-justify">

									Jobdcodetech is the No.1 Jobsite for Fresher’s &amp;
									Experience in India. Apply to Top MNC Jobs /
									Internships Jobs by registering now! jobdcodetech established in
									2020.

									Jobdcodetech is new career
									website for the job in India.</p>

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
								<h6 class="mb-2">Subscribe</h6>
								<hr class="deep-purple  accent-2 mb-4 mt-0 d-inline-block mx-auto">
								<div class="input-group w-100">
									<input class="form-control  border" placeholder="Email" type="text">
									<div class="input-group-append ">
										<button class="btn btn-primary " type="button">
											Subscribe</button>
									</div>
								</div>

							</div>
						</div>
					</div>
				</div>
				<div class="text-white-50 border-top p-0">
					<div class="container">
						<div class="row d-flex">
							<div class="col-lg-8 col-sm-12  mt-2 mb-2 text-left ">
								Copyright © 2019 <a class="fs-14 text-white" href="index.html">Dcodetech</a>. Designed by <a class="fs-14 text-white" href="http://dcodetech.in/">Dezignolics</a>
								All rights
								reserved.
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
				<!-- <div class="text-white p-0 border-top">
            <div class="container">
                <div class="p-2 text-center footer-links">
                    <a class="btn btn-link" href="#">How It Works</a>
                    <a class="btn btn-link" href="#">About Us</a>
                    <a class="btn btn-link" href="#">Pricing</a>
                    <a class="btn btn-link" href="#">Ads Categories</a>
                    <a class="btn btn-link" href="#">Privacy Policy</a>
                    <a class="btn btn-link" href="#">Terms Of Conditions</a>
                    <a class="btn btn-link" href="#">Blog</a>
                    <a class="btn btn-link" href="#">Contact Us</a>
                    <a class="btn btn-link" href="#">Premium Ad</a>
                </div>
            </div>
        </div> -->
			</footer>

		</section>
		<!--Footer Section-->
	</div>
	<!-- Notification -->

	<!-- Back to top -->
	<a href="#top" id="back-to-top"><i class="fa fa-arrow-up"></i></a>

	<!-- JQuery js-->
	<script src="{{asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>

	<!-- Bootstrap js -->
	<script src="{{asset('assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/common.js')}}"></script>

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