@extends('front.layouts.design')
@section('content')
    @include('front.faqs.style.new_style')
    <div class="container">
        <div class="info-page-faq">
            <div class="content-info-page">
                <div class="box-rounded_headline text-subtitle-strong" style="text-align: center">{{ $cat->title??'' }}</div>
                @forelse($faq as $key => $faqs)
                    <div class="toggle-box">
                        <div class="toggle-box-active">
                            <ul>
                                <li class="has-sub"><a href="{{ url('/faqs/'.$faqs->id) }}" class="text-subtitle-strong">{{ $faqs->title??''  }} </a>
                                    <ul>
                                        <li class="has-sub"><a href="#">
                                                  {!! Str::limit($faqs->des,50) !!}
                                            </a></li>
                                        <li>
                                            <a href="{{ url('/faqs/'.$faqs->id) }}" class="info-page-show-more">مشاهده
                                                توضیحات تکمیلی<i class="fa fa-angle-left"></i></a>
                                        </li>
                                    </ul>
                                </li>

                            </ul>
                        </div>
                    </div>
                @empty

                @endforelse
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