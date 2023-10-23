<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    @section('head')
        @seo

        @include('layout.parts.favicons')

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link
            href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Oswald:wght@400;500;600&display=swap"
            rel="stylesheet">

        @section('styles')
            <link rel="stylesheet" href="{{ asset('assets/css/preloader.css') }}"/>

            <link rel="stylesheet" href="{{ asset('assets/vendors/bootstrap/css/bootstrap.min.css') }}"/>
            <link rel="stylesheet" href="{{ asset('assets/vendors/fontawesome/css/all.min.css') }}"/>
            <link rel="stylesheet" href="{{ asset('assets/vendors/animate/animate.min.css') }}"/>
            <link rel="stylesheet" href="{{ asset('assets/vendors/jarallax/jarallax.css') }}"/>
{{--            <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.min.css') }}"/>--}}
{{--            <link rel="stylesheet" href="{{ asset('assets/vendors/nouislider/nouislider.pips.css') }}"/>--}}
            <link rel="stylesheet" href="{{ asset('assets/vendors/odometer/odometer.min.css') }}"/>
            <link rel="stylesheet" href="{{ asset('assets/vendors/swiper/swiper.min.css') }}"/>
            <link rel="stylesheet" href="{{ asset('assets/vendors/crsine-icons/style.css') }}">
{{--            <link rel="stylesheet" href="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.css') }}"/>--}}
            <link rel="stylesheet" href="{{ asset('assets/vendors/jquery-fancybox/jquery.fancybox.min.css') }}">

            <!-- template styles -->
            <link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}"/>
        @show
    @show
</head>

<body{!! body_classes() !!}>
@include('layout.parts.preloader')
<div class="page-wrapper" id="page-wrapper">
    @include('layout.parts.header')

    <div id="page-content">
        @if(!isset($pageHeader) || $pageHeader)
            @include('layout.parts.page-header')
        @endif

        @section('content')
        @show
    </div>

    @include('layout.parts.footer')
</div><!-- /.page-wrapper -->


@include('layout.parts.mobile-nav')

<a href="#" data-target="html" class="scroll-to-target scroll-to-top"><i class="fa fa-angle-up"></i></a>


@section('scripts')
    <script src="{{ asset('assets/vendors/jquery/jquery-3.5.1.min.js') }}"></script>
    @yield('scripts-after-jquery')
    <script src="{{ asset('assets/vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/swiper/swiper.min.js') }}"></script>
{{--    <script src="{{ asset('assets/vendors/tiny-slider/tiny-slider.min.js') }}"></script>--}}
    <script src="{{ asset('assets/vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('assets/vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('assets/vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-fancybox/jquery.fancybox.min.js') }}"></script>
    <!-- template js -->
    <script src="{{ asset('assets/js/js.js') }}"></script>
@show
</body>

</html>
