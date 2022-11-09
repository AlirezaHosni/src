<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta Tags -->
    <meta charset="UTF-8"/>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width,initial-scale=1"/>
    <meta http-equiv="X-UA-Compatible" content="IE=EmulateIE10"/>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="revisit-after" content="1 days">
    <meta name="fontiran.com:license" content="">
    <!-- Title -->
    <title> فروشگاه اینترنتی الکمارکتینگ </title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/front/logo/img.jpg') }}"/>
    <!-- Shiv -->
    <!--[if lte IE 9]
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    @yield('links')

</head>
<body>
@php
    use App\User;
    $menuheader = \App\Menu::where('menu_type', 'menuheaderright')->take(4)->get();
    $socails = \App\Social::latest()->first();
    if (Auth::check()) {
        $user_id = Auth::user()->id;
        $userDetails = User::find($user_id);
        $userProfileDetails = \App\Profile::with('user')->where('user_id', $user_id)->first();

        // dd($userProfileDetails);
        $userCart = DB::table('carts')->where(['user_id' => $user_id])->get();
        $userDetails = User::where('id', Auth::user()->id)->first();
        //dd($userDetails->type_identity);
        $userCart = DB::table('carts')->where(['user_id' => $user_id])->get();
        $cartCount = \App\Product::cartCount();
        $type_identity = $userDetails->type_identity;
    }else{
        $type_identity = "guest";
    }


@endphp
<style>
    body {
        min-height: 100vh;
        min-height: -webkit-fill-available;
    }

    html {
        height: -webkit-fill-available;
    }

    @media only screen and (max-width: 480px) {
        .mobilemenu.mobilemenu-right {
             right: -2% !important;
        }
        .mobilemenu {
            position: fixed;
            width: 300px;
            height: 100%;
            top: 0;
            z-index: 9999;
            background: #f5f5f5;
            overflow: auto;
            visibility: hidden;
            -webkit-overflow-scrolling: touch;
            margin-right: -10px;
        }
    }
</style>


<!-- Start: Main Wrapper -->
<div class="bn_wrapper" style="width: 100% !important;right:0 !important;top:0 !important;left:0 !important">

    @include('front.layouts.header_mobile')

    <div class="site-overlay"></div>

    @include('front.layouts.header')
    @yield('content')



    @include('front.layouts.footerdesktop')


    @include('front.layouts.footermobile')


</div>
@yield('model')
@include('front.layouts.whatsapp')

@yield('scripts')

<script>

    if (window.matchMedia("(max-width: 500px)").matches) {
        // Viewport is less or equal to 700 pixels
        document.querySelector(".mobilemenu").style.display = 'block';
        document.querySelector(".mobilemenu").style.visibility = 'visible';
        document.querySelector("#footer-desktop").style.display = 'none';

        document.querySelector("#footer-mobile").style.display = 'block';
    } else {
        // Viewport is greater than 700 pixels wide
        document.querySelector("#footer-desktop").style.display = 'block';
        document.querySelector("#footer-mobile").style.display = 'none';
        document.querySelector(".mobilemenu").style.display = 'none';
        document.querySelector(".mobilemenu").style.visibility = 'none';
    }

    $(document).ready(function () {
        $(".price").each(function () {
            var num = $(this).text();
            var commaNum = numberWithCommas(num);
            $(this).text(commaNum);
        });

        function numberWithCommas(number) {
            var parts = number.toString().split(".");
            parts[0] = parts[0].replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            return parts.join(".");
        }


    });
    
</script>
<script src="{{ asset('assets/front/js/jquery.countdown.min.js') }}"></script>

                        
</body>
</html>
