<!doctype html>
<html lang="en">

<!-- Mirrored from vportfolio.amcoders.xyz/ by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Jan 2021 17:27:53 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ asset('storage/uploads/logo.png') }}" type="image/ico" sizes="16x16">
    <title>{{ \TCG\Voyager\Facades\Voyager::setting('site.title') }}</title>
    <link rel="canonical" href="index.blade.php"/>
    <meta property="og:title" content="Vportfolio"/>

    <meta name="twitter:title" content="Vportfolio"/>
    <meta name="twitter:description" content=""/>
    <meta name="twitter:site" content="index.html"/>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('storage/uploads/logo.png') }}">

    <!-- css here -->

    <link rel="stylesheet" href="frontend/css/bootstrap.min.css">
    <link rel="stylesheet" href="frontend/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="frontend/css/animate-heading.css">
    <link rel="stylesheet" href="frontend/css/magnific-popup.css">
    <link rel="stylesheet" href="frontend/css/owl.carousel.min.css">
    <link rel="stylesheet" href="frontend/css/meanmenu.css">
    <link rel="stylesheet" href="frontend/css/default.css">
    <link rel="stylesheet" href="frontend/css/dark.css">

    <link rel="stylesheet" href="frontend/css/responsive.css">


</head>
<body>

<!-- preloader area start -->
<div class="loading"></div>
<!-- preloader area end -->

<!-- headear area start -->
<div id="app">


@yield('content')



</div>


<!-- back to top -->
<a href="#home" class="back_top"> <i class="fas fa-angle-up"></i> </a>


<!-- js here -->
<script src="frontend/js/lazyload.min.js"></script>
<script src="frontend/js/vendor/jquery-3.2.1.min.js"></script>
<script src="frontend/js/popper.min.js"></script>
<script src="frontend/js/bootstrap.min.js"></script>
<script src="frontend/js/animate-heading.js"></script>
<script src="frontend/js/particles.js"></script>
<script src="frontend/js/particles-custom.js"></script>
<script src="frontend/js/tilt.jquery.min.js"></script>
<script src="frontend/js/jquery.nav.min.js"></script>
<script src="frontend/js/isotope.pkgd.min.js"></script>
<script src="frontend/js/imagesloaded.pkgd.min.js"></script>
<script src="frontend/js/jquery.magnific-popup.min.js"></script>

<script src="frontend/js/owl.carousel.min.js"></script>
<script src="frontend/js/jquery.meanmenu.min.js"></script>
<script src="frontend/js/jquery.smoothscroll.js"></script>
<script src="frontend/js/main.js"></script>



</body>

</html>

