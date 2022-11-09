@extends('layouts.front.design')
@section('content')
    <section class="not-found">
        <h3>صفحه‌ای که دنبال آن بودید پیدا نشد!</h3>
        <a href="#">صفحه اصلی</a>
        <img src="{{ asset('assets/f/images/404bg.png') }}" alt="">
    </section>
@endsection

@section('scripts')
    <script src="{{ asset('assets/front/js/custom.js') }}"></script>
    <script src="{{ asset('assets/front/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/front/js/edit.js') }}"></script>
    <script src="{{ asset('assets/front/js/scripthome.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('assets/front/js/script.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('assets/front/js/main.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('assets/front/js/main-old.js') }}"></script>
@endsection
@section('links')
    <!-- Stylesheets -->
    <link type="text/css" href="{{ asset('assets/front/css/normalize.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/grid12.css') }}" rel="stylesheet"/>

    <link rel='stylesheet' href='{{ asset('assets/front/css/owl.carousel.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('assets/front/css/owl.theme.default.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('assets/front/css/owl.theme.css') }}'>

    <link type="text/css" href="{{ asset('assets/front/css/slick-theme.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/slick.css') }}" rel="stylesheet"/>

    <link type="text/css" href="{{ asset('assets/front/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/magnific-popup.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/media.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/old-style.css') }}" rel="stylesheet"/>
    <!-- JavaScript -->
    <script>
        window.jQueryQ = window.jQueryQ || [];
        window.$ = window.jQuery = function () {
            window.jQueryQ.push(arguments);
        }
    </script>
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery-2.2.0.min.js') }}"></script>

    <style>
        .not-found {
            /*display: flex;*/
            justify-content: center;
            flex-direction: column;
            align-items: center;
            padding: 68px 0;
            line-height: 22px;
            background: url({{ asset('assets/f/images/404bg.png') }});
            background-size: auto 100%;
        }

        .not-found h3 {
            font-size: 2.571rem;
            line-height: 1.222;
            margin: 25px auto
        }

        .not-found a {
            background-color: #6ab946;
            border-radius: 8px;
            padding: 10px 20px;
            color: #fff;
            border: none;
            min-width: 161px;
            margin: 10px 19.5px 46px;
            text-decoration: none;
            font-size: 2em
        }
        .not-found img {
            max-width: 50%;
            max-height: 200px;
        }

        .account-box .foot, .account-box button, .c-mask__handler, .c-product__guaranteed, .copyright-en, .image-row a, .jump-to-up, .not-found, .product-item, .product-item .title, .register-logo, .suggestion h3, footer .copyright p {
            text-align: center;
        }
    </style>

@endsection
