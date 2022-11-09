@extends('front.layouts.design')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <section class="bn_main_section">
                <div class="d-flex flex-column ai-center my-7">
                    <div class="p-4 bg-secondary-500 radius-circle mb-1 FaqCategories_FaqCategories__titleIcon__NxauF">
                        <div class="d-flex">
                            <svg style="width: 24px; height: 24px; fill: var(--color-icon-secondary);">
                                <use xlink:href="#categoryOutline"></use>
                            </svg>
                        </div>
                    </div>
                    <div class="break-words py-3">
                        <div class="d-flex ai-center grow-1"><p class="grow-1 text-h4 color-900">دسته&zwnj;بندی پرسش&zwnj;ها</p>
                        </div>
                    </div>
                </div>
                <div class="bn_main_content old">
                    <div class="bn_contact">
                        <div class="row">
                            @forelse($cat as $key => $cats)
                            <div class="col-md-3 pull-right">
                                <div class="card">
                                    <div class="card-body">
                                        <h3><a href="{{ url('/faqs/cat/'.$cats->id) }}">{{ $cats->title??'' }}</a></h3>
                                    </div>
                                  </div>
                                
                            </div>
                            @empty
                                
                            @endforelse
                            
                        </div>
                    </div>

                </div>
            </section>
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