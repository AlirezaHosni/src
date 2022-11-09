@extends('front.layouts.design')
@section('content')
    <!-- Main Login-->
    <div class="container">
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
                <div class="bn_main_login" style="background-color: #fffff5;">
                    @include('layouts.errors')
                    <div class="bn_ml_right" style="">
                        <div class="bn_title">
                            <h3>ورود اعضـاء</h3>
                        </div>
                        <form action="{{ route('lgrg') }}" method="post" formnum="1" onsubmit="javascript:return loginsubmit();"
                              class="appnitro">
                            @csrf

                            <div class="bn_ml_row">
                                <input class="bn_mlr_input_text" type="text" name="username" placeholder="نام کاربری  "
                                       required  title="حداقل 11 کاراکتر وارد نمایید."
                                       style="text-align: left;direction: ltr;">
                            </div>
                            <div class="bn_ml_row">
                                <input class="bn_mlr_input_text" type="password" name="password" placeholder="رمــز عبــور"
                                       required pattern=".{4,}" title="حداقل 4 کاراکتر وارد نمایید."
                                       style="text-align: left;direction: ltr;">
                            </div>


                            <div class="bn_ml_term">
                                <p>رمـز عبــور را فـراموش کرده اید؟ </p><a href="{{ route('forgetpass') }}">بازیابی
                                    رمـز عبور</a></label>
                            </div>

                            <div class="bn_ml_row">
                                <input class="bn_button blue bn_ml_submit" value="ورود اعضـاء" type="submit">
                                <a href="{{ route('register') }}" class="bn_button orange bn_ml_reg">ثبت نـام<i
                                        class="fa fa-lock"></i></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
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

@endsection
