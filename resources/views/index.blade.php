@include('layouts.header')

<body>
    <!-- END COLORLIB-ASIDE -->
    <div id="colorlib-main">
        @yield('content')
        @include('layouts.footer')
    </div><!-- END COLORLIB-PAGE -->
    <script src="public/js/jquery.min.js"></script>
    <script src="public/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="public/js/jquery.waypoints.min.js"></script>
    <script src="public/js/jquery.stellar.min.js"></script>
    <script src="public/js/owl.carousel.min.js"></script>
    <script src="public/js/jquery.magnific-popup.min.js"></script>
    <script src="public/js/aos.js"></script>
    <script src="public/js/scrollax.min.js"></script>
    <script src="public/js/main.js"></script>
</body>