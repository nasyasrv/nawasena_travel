
<!DOCTYPE html>
<html lang="en">
<head>
<title>Trip spot Travel Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
<!-- for-mobile-apps -->
<meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Client Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />

	<!-- css files -->
    <link href="{{asset('landing/css/bootstrap.css')}}" rel='stylesheet' type='text/css' />
    <link href="{{asset('landing/css/style.css')}}" rel='stylesheet' type='text/css' /><!-- custom css -->
	<link href="{{asset('landing/css/css_slider.css')}}" type="text/css" rel="stylesheet" media="all">
    <link href="{{asset('landing/css/font-awesome.min.css')}}" rel="stylesheet"><!-- fontawesome css -->
	<!-- //css files -->
	<!-- google fonts -->
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<!-- //google fonts -->

</head>
<body>

@include('landing.header')

@yield('content')
@stack('contens')

@include('landing.footer')

<!-- move top -->
<div class="move-top text-right">
<a href="#home" class="move-top">
    <span class="fa fa-angle-up  mb-3" aria-hidden="true"></span>
</a>
</div>
<!-- move top -->

@yield('script')
@stack('scripts')
</body>
</html>

