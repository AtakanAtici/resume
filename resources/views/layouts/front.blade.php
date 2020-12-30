<!doctype html>
<html lang="en">
<head>

    <!-- Simple Page Needs
    ================================================== -->
    <title>@yield('title')</title>
    <meta charset="UTF-8">
    <meta name="description" content="Mat - Resume & vCard HTML Template">
    <meta name="keywords" content="personal, vcard, portfolio">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Favicon
    ================================================== -->
    <link href="favicon.ico" rel="shortcut icon" type="image/x-icon">

    <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/cubeportfolio/css/cubeportfolio.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/colors/yellow.css') }}" id="color">
    @yield('css')


    <!-- Google Web fonts
    ================================================== -->
    <link href="../../../css.css?family=Roboto:400,500,700,900" rel="stylesheet">

    <!-- Font Icons
    ================================================== -->
    <link rel="stylesheet" href="{{ asset('assets/icon-fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/icon-fonts/web-design/flaticon.css') }}">

    <!--[if lt IE 9]>
    <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->


</head>
<body>
<!-- Preloading -->
<div id="preloader">
    <div class="spinner">
    </div>
</div>

<!-- Wrapper -->
<div class="wrapper top_60 container">
    <div class="row">

        <!-- Profile Section
        ================================================== -->
        <div class="col-lg-3 col-md-4">
            <div class="profile">
                <div class="profile-name">
                    <span class="name">Henry Rooney</span><br>
                    <span class="job">Creative Designer</span>
                </div>
                <figure class="profile-image">
                    <img src="{{ asset('assets/images/profile.jpg') }}" alt="">
                </figure>
                <ul class="profile-information">
                    <li></li>
                    <li><p><span>Name:</span> Chris Johnson</p></li>
                    <li><p><span>Birthday:</span> 06 December 1987</p></li>
                    <li><p><span>Job:</span> Freelancer</p></li>
                    <li><p><span>Email:</span> henry@domain.com</p></li>
                    <li><p><span>Skype:</span> henryrooney85</p></li>
                </ul>
                <div class="col-md-12">
                    <button class="site-btn icon">Download Cv <i class="fa fa-download" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>

        <!-- Page Tab Container Div -->
        <div id="ajax-tab-container" class="col-lg-9 col-md-8 tab-container">

            <!-- Header
            ================================================== -->
            <div class="row">
                <header class="col-md-12">
                    @include('layouts.menu')
                </header>

                <!-- Page Content
                ================================================== -->
                @yield('content')
            </div><!-- row end -->
            <!-- Footer
            ================================================== -->
            <footer>
                <div class="footer col-md-12 top_30 bottom_30">
                    <div class="name col-md-4 hidden-md hidden-sm hidden-xs">Henry Rooney.</div>
                    <div class="copyright col-lg-8 col-md-12">© 2017 All rights reserved. Designed by <a href="../../../user/tavonline.html">tavonline</a> </div>
                </div>
            </footer>

        </div> <!-- Tab Container - End -->
    </div> <!-- Row - End -->
</div> <!-- Wrapper - End -->

<!-- Javascripts
================================================== -->
<script src="{{ asset('assets/js/jquery-2.1.4.min.js') }}"></script>
<script src="{{ asset('assets/cubeportfolio/js/jquery.cubeportfolio.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery.easytabs.min.js') }}"></script>
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/main.js') }}"></script>
<!-- for color alternatives -->
<script src="{{ asset('assets/js/jquery.cookie-1.4.1.min.js') }}"></script>
<script src="{{ asset('assets/js/Demo.js') }}"></script>
@yield('js')
<link rel="stylesheet" href="{{ asset('assets/css/Demo.min.css') }}">


</body>
</html>
