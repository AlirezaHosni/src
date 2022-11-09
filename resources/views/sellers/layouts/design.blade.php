<!DOCTYPE html>

<html lang="fa">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>پنل بازاریاب</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180"
          href="{{ asset('http://elecmarketing.com/assets/front/logo/img.jpg') }}">
    <link rel="icon" type="image/png" sizes="32x32"
          href="{{ asset('http://elecmarketing.com/assets/front/logo/img.jpg') }}">
    <link rel="icon" type="image/png" sizes="16x16"
          href="{{ asset('http://elecmarketing.com/assets/front/logo/img.jpg') }}">
    <!-- Stylesheet -->
    <!-- Font Iran licence -->
    <link rel="stylesheet" href="{{ asset('assets/sellers/css/fontiran.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/sellers/vendors/css/base/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sellers/vendors/css/base/seenboard-1.0.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sellers/css/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/sellers/css/owl-carousel/owl.theme.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/sweetalert.css') }}">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>

    <!-- Chartisan -->
    <script src="https://unpkg.com/@chartisan/echarts/dist/chartisan_echarts.js"></script>
    <link href="{{asset('css/components.min.css')}}" rel="stylesheet" type="text/css">
    @yield('links')
</head>
<?php
$settings = App\Setting::first();
?>
<body id="page-top">
<!-- Begin Preloader -->
<div id="preloader">
    <div class="canvas">
        <img src="{{ asset($settings->logo_path??'http://elecmarketing.com/assets/front/images/logo.png') }}" alt="logo"
             class="loader-logo">
        <div class="spinner"></div>
    </div>
</div>
<!-- End Preloader -->
<div class="page">

    <!-- Begin Header -->
@include('sellers.layouts.header')
<!-- End Header -->
    <!-- Begin Page Content -->
    <div class="page-content d-flex align-items-stretch">
        @include('sellers.layouts.sidebar')
        @yield('content')
    </div>
    <!-- End Page Content -->
</div>

<!-- Begin Vendor Js -->
<script src="{{ asset('assets/sellers/vendors/js/base/jquery.min.js') }}"></script>
<script src="{{ asset('assets/sellers/vendors/js/base/core.min.js') }}"></script>
<!-- End Vendor Js -->
<!-- Begin Page Vendor Js -->
<script src="{{ asset('assets/sellers/vendors/js/nicescroll/nicescroll.min.js') }}"></script>
<script src="{{ asset('assets/sellers/vendors/js/chart/chart.min.js') }}"></script>
<script src="{{ asset('assets/sellers/vendors/js/progress/circle-progress.min.js') }}"></script>
<script src="{{ asset('assets/sellers/vendors/js/calendar/moment.min.js') }}"></script>
<script src="{{ asset('assets/sellers/vendors/js/calendar/fullcalendar.min.js') }}"></script>
<script src="{{ asset('assets/sellers/vendors/js/calendar/locale/fa.js') }}"></script>
<script src="{{ asset('assets/sellers/vendors/js/owl-carousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/sellers/vendors/js/app/app.js') }}"></script>
<script src="{{ asset('assets/js/sweetalert.min.js') }}"></script>
<!-- End Page Vendor Js -->
<!-- Begin Page Snippets -->
@yield('scripts')
<!-- End Page Snippets -->
</body>
</html>
