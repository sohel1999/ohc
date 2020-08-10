<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>{{config('app.name')}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js'></script>
    <link href='https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/themify-icons.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/nice-select.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/flaticon.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/gijgo.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/animate.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/slicknav.css">
    <link rel="stylesheet" href="{{ asset('frontend/') }}/css/style.css">
    <style>
        #booking,
        #registaiton,
        #login {
            display: inline-block;
            margin: auto;
            text-align: center;
            position: absolute;
            left: 50%;
            top: 50%;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
        }
    </style>
    @notifyCss
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->


    <!-- header-start -->
    @include('frontend.partials.header')
    <!-- header-end -->

    <!-- slider_area_start -->

    @yield('main')

    @include('frontend.partials.footer')

    <!-- link that opens popup -->

    <!-- form itself end-->
    @include('frontend.partials.from')
    <!-- form itself end -->

    <!-- JS here -->
    <script src="{{ asset('frontend/') }}/js/vendor/modernizr-3.5.0.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/popper.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/owl.carousel.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/isotope.pkgd.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/ajax-form.js"></script>
    <script src="{{ asset('frontend/') }}/js/waypoints.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/jquery.counterup.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/imagesloaded.pkgd.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/scrollIt.js"></script>
    <script src="{{ asset('frontend/') }}/js/jquery.scrollUp.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/wow.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/nice-select.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/jquery.slicknav.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/plugins.js"></script>
    <script src="{{ asset('frontend/') }}/js/gijgo.min.js"></script>
    <!--contact js-->
    <script src="{{ asset('frontend/') }}/js/contact.js"></script>
    <script src="{{ asset('frontend/') }}/js/jquery.ajaxchimp.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/jquery.form.js"></script>
    <script src="{{ asset('frontend/') }}/js/jquery.validate.min.js"></script>
    <script src="{{ asset('frontend/') }}/js/mail-script.js"></script>

    <script src="{{ asset('frontend/') }}/js/main.js"></script>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1Ijoic29oZWxjc2UxOTk5IiwiYSI6ImNrZDZjenE4eTA0dWUyc21nbXZmcmI0cXoifQ.MInELZPdYXprEjHiu1W8tg';
        var map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [-122.420679, 37.772537], // starting position
            zoom: 4  // starting zoom
        });

        $('.datepicker').datepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-calendar"></span>'
            }
        });

        $('.timepicker').timepicker({
            iconsLibrary: 'fontawesome',
            icons: {
                rightIcon: '<span class="fa fa-clock-o"></span>'
            }
        });
        $(document).ready(function() {
            $('.js-example-basic-multiple').select2();
        });
    </script>
    @include('notify::messages')
    @notifyJs
</body>

</html>
