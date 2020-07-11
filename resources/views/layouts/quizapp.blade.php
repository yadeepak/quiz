<!doctype html>
<html lang="en" dir="ltr">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Description" content="Job board Admin template">
	<meta name="Author" content="Spruko Technologies Private Limited">
	<meta name="keywords" content="bootstrap job board template, bootstrap job template" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent" />
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<link rel="icon" href="favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/new images/favicon.ico')}}" />

	<!-- Title -->
	<title>JobDcodetech</title>
	<link rel="stylesheet" href="{{asset('assets/fonts/fonts/font-awesome.min.css')}}">

	<!-- Bootstrap Css -->
	<link href="{{asset('assets/plugins/bootstrap-4.3.1-dist/css/bootstrap.min.css')}}" rel="stylesheet" />

	<!-- Sidemenu Css -->
	<link href="{{asset('assets/plugins/toggle-sidebar/sidemenu.css')}}" rel="stylesheet" />

	<link href="{{asset('assets/plugins/date-picker/spectrum.css')}}" rel="stylesheet" />
	<!-- Dashboard css -->
	<link href="{{asset('assets/css/style.css')}}" rel="stylesheet" />
	<link href="{{asset('assets/css/admin-custom.css')}}" rel="stylesheet" />

	<!-- select2 Plugin -->
	<link href="{{asset('assets/plugins/select2/select2.min.css')}}" rel="stylesheet" />

	<!-- c3.js')}} Charts Plugin -->
	<link href="{{asset('assets/plugins/charts-c3/c3-chart.css')}}" rel="stylesheet" />

	<!---Font icons-->
	<link href="{{asset('assets/css/icons.css')}}" rel="stylesheet" />
    <link href="{{asset('assets/css/custom.css')}}" rel="stylesheet" />
    @yield('heads')
    
</head>
<body class="{{$bodyClass}}">
<div id="global-loader">
        <img src="{{asset('assets/images/loader.svg')}}" class="loader-img" alt="">
    </div>
@yield('content')


	<!-- Dashboard js -->
	<script src="{{asset('assets/js/vendors/jquery-3.2.1.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-4.3.1-dist/js/popper.min.js')}}"></script>
	<script src="{{asset('assets/plugins/bootstrap-4.3.1-dist/js/bootstrap.min.js')}}"></script>
	<script src="{{asset('assets/js/vendors/jquery.sparkline.min.js')}}"></script>
	<script src="{{asset('assets/js/vendors/selectize.min.js')}}"></script>
	<script src="{{asset('assets/js/vendors/jquery.tablesorter.min.js')}}"></script>
	<script src="{{asset('assets/js/vendors/circle-progress.min.js')}}"></script>
	<script src="{{asset('assets/plugins/rating/jquery.rating-stars.js')}}"></script>
	<!-- Custom scroll bar Js-->
	<script src="{{asset('assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js')}}"></script>

	<!-- Fullside-menu Js-->
	<script src="{{asset('assets/plugins/toggle-sidebar/sidemenu.js')}}"></script>

	<!-- Inline js -->
	<script src="{{asset('assets/js/select2.js')}}"></script>
	<script src="{{asset('assets/js/formelements.js')}}"></script>

	<!--Select2 js -->
	<script src="{{asset('assets/plugins/select2/select2.full.min.js')}}"></script>

	<!--Counters -->
	<script src="{{asset('assets/plugins/counters/counterup.min.js')}}"></script>
	<script src="{{asset('assets/plugins/counters/waypoints.min.js')}}"></script>
	<script src="{{asset('assets/plugins/counters/numeric-counter.js')}}"></script>
	<script src="{{asset('assets/plugins/date-picker/spectrum.js')}}"></script>
	<script src="{{asset('assets/plugins/date-picker/jquery-ui.js')}}"></script>
	<script src="{{asset('assets/plugins/input-mask/jquery.maskedinput.js')}}"></script>

	<!-- Custom Js-->
	<script src="{{asset('assets/js/admin-custom.js')}}"></script>
    @yield('scripts')
</body>

</html>