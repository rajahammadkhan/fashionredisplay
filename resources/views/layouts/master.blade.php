<!doctype html>
<html lang="zxx">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Links of CSS files -->
        <link rel="stylesheet" href="{{url('')}}/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/animate.min.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/boxicons.min.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/flaticon.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/magnific-popup.min.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/nice-select.min.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/slick.min.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/rangeSlider.min.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/style.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/dark.css">
        <link rel="stylesheet" href="{{url('')}}/assets/css/responsive.css">
        <link rel="icon" type="image/png" href="{{url('')}}/assets/img/favicon.png">

        <title>Fashion Redesign</title>

        <meta name="description" content="Fashion Redesign Description">
        <meta name="keywords" content="Fashion Redesign Keywords">

        @yield('top-styles')
    </head>
    <body>


        @section('header')
          @include('layouts/header')
        @show

          @yield('content')

        @section('footer')
          @include('layouts/footer')
        @show


        <div class="go-top"><i class='bx bx-up-arrow-alt'></i></div>

        <!-- Links of JS files -->
        <script src="{{url('')}}/assets/js/jquery.min.js"></script>
        <script src="{{url('')}}/assets/js/popper.min.js"></script>
        <script src="{{url('')}}/assets/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('')}}/assets/js/owl.carousel.min.js"></script>
        <script src="{{url('')}}/assets/js/magnific-popup.min.js"></script>
        <script src="{{url('')}}/assets/js/parallax.min.js"></script>
        <script src="{{url('')}}/assets/js/rangeSlider.min.js"></script>
        <script src="{{url('')}}/assets/js/nice-select.min.js"></script>
        <script src="{{url('')}}/assets/js/meanmenu.min.js"></script>
        <script src="{{url('')}}/assets/js/isotope.pkgd.min.js"></script>
        <script src="{{url('')}}/assets/js/slick.min.js"></script>
        <script src="{{url('')}}/assets/js/sticky-sidebar.min.js"></script>
        <script src="{{url('')}}/assets/js/wow.min.js"></script>
        <script src="{{url('')}}/assets/js/form-validator.min.js"></script>
        <script src="{{url('')}}/assets/js/contact-form-script.js"></script>
        <script src="{{url('')}}/assets/js/ajaxchimp.min.js"></script>
        <script src="{{url('')}}/assets/js/main.js"></script>
        @yield('bottom-mid-scripts')

        @yield('bottom-bot-scripts')
    </body>
</html>