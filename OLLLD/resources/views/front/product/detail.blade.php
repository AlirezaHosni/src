@extends('front.layouts.design')
@section('content')
    @include('front.product.item.style')
    @include('errors.errors')
    @php
        $gallery = \App\Gallery::where(['product_id' => $productDetails->id ])->get();
    @endphp
    <div class="container">
        <nav class="nav-product-d">
            <ul class="c-breadcrumb" style="margin-right: 10px;">
                <li class="list-item"><a href="#">فروشگاه اینترنتی </a></li>
                <li class="list-item"><a
                            href="{{ url('/products/category/'.$productDetails->category->slug) }}">{{ $productDetails->category->title??'' }} </a>
                </li>
                <li class="list-item"><a
                            href="{{ url('/products/category/'.$productDetails->category->slug) }}"> {{ $productDetails->title }} </a>
                </li>
            </ul>
        </nav>
        <style>
            .en-title {
                font-family: Arial, sans-serif;
                font-weight: normal;
            }
        </style>
        <article class="c-product">
            <section class="c-product__info">
                <div class="c-product__headline">
                    <h1 class="c-product__title">
                        <span
                                class="en-title title-pro">{{ $productDetails->title }}
                        </span>
                    </h1>
                </div>
                <div class="c-product__attributes">
                    <div class="c-product__right">
                        <div class="c-product__directory">
                            <ul>
                                <li><span>برند : </span> <a href="#"
                                                            class="btn-link-spoiler">{{  $productDetails->brand->title??'' }}</a>
                                </li>
                                <li><span>دسته بندی : </span> <a href="#"
                                                                 class="btn-link-spoiler"> {{ $productDetails->category->title??'' }} </a>
                                </li>
                            </ul>
                        </div>
                        <div class="c-product__params">

                            {{--                            {!!  Str::limit($productDetails->description_short, 150) !!}--}}

                            {!!  Str::limit($productDetails->description_short, 100) !!}
                            @if (strlen($productDetails->description_short) > 100)
                                <div id="dots">...</div>
                                <div id="more">{!! substr($productDetails->description_short, 100) !!}</div>
                            @endif


                            <button onclick="myMore()" id="myBtn"> موارد بیشتر</button>

                        </div>
                        @if($productDetails->stock <= 0)
                            <div class="c-product__params">
                                موجوی ناکافی
                            </div>
                        @else
                            <div class="c-product__params">
                                موجودی : {{ $productDetails->stock }}
                            </div>
                        @endif
                    </div>
                    @include('front.product.item.product_cart')
                </div>
                @include('front.product.item.feature')
            </section>
            <section class="c-product__gallery">
                @include('front.product.item.option')
                @include('front.product.item.gallery')
            </section>
        </article>
        <div style="margin: 15px 0;"></div>
    @include('front.product.item.linked')
    <!--@include('front.product.item.related')-->
        @include('front.product.item.tabs')

    </div>


@endsection

@section('links')
    <!-- Stylesheets -->
    <link type="text/css" href="{{ asset('assets/front/css/normalize.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/grid12.css') }}" rel="stylesheet"/>

    <link type="text/css" href="{{ asset('assets/front/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/media.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/f/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/f/css/mediaq.css') }}">
    <link type="text/css" href="{{ asset('assets/front/css/old-style.css') }}" rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('assets/f/vendor/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/f/vendor/slicknav/slicknav.min.css') }}">

    <link type="text/css" href="{{ asset('assets/front/css/iziModal.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/model.css') }}" rel="stylesheet"/>
    <script src="{{ asset('assets/front/js/jquery-2.2.0.min.js') }}"></script>
@endsection
@section('scripts')
    <script src="{{ asset('assets/front/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/f/js/script.js') }}"></script>
    <script src="{{ asset('assets/front/js/custom.js') }}"></script>
    <script src="{{ asset('assets/front/js/zoom.js') }}"></script>
    <script src="{{ asset('assets/f/vendor/swiper/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/f/vendor/slicknav/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/f/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/f/vendor/elevatezoom.js') }}"></script>
    <script src="{{ asset('assets/f/vendor/persianumber.min.js') }}"></script>
    <script>
        jQuery(function () {
            jQuery.each(window.jQueryQ || [], function (i, a) {
                setTimeout(function () {
                    jQuery.apply(this, a);
                }, 0);
            });
        });

    </script>
    <script src="{{ asset('js/share.js') }}"></script>
    <script>
        $(document).ready(function () {
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('.likeas').click(function () {
                var id = $(this).parents(".panel").data('id');

                var c = $('#' + this.id + '-bs3').html();
                var cObjId = this.id;
                var cObj = $(this);
                var cObjx = $(this);

                $.ajax({
                    type: 'POST',
                    url: '/product/like',
                    data: {id: id},
                    success: function (data) {
                        //alert(data);
                        if (data == 'notlogin') {
                            alert("لطفا ابتدا وارد حساب کاربری بشوید");
                            window.location.href = "{{ url('/user/login') }}";
                            location.replace("{{ url('/user/login') }}");

                        } else {
                            if (!$.trim(data)) {
                                $('#' + cObjId + '-bs3').html(parseInt(c) + 1);
                                $(cObj).removeClass("btn-option");
                                $(cObjx).addClass("like-post");
                                location.reload();

                            } else {
                                if (jQuery.isEmptyObject(data.success)) {

                                    $('#' + cObjId + '-bs3').html(parseInt(c) + 1);
                                    $(cObj).removeClass("btn-option");
                                    $(cObjx).addClass("like-post")
                                    location.reload();
                                } else if (jQuery.isEmptyObject(data.true)) {

                                    $('#' + cObjId + '-bs3').html(parseInt(c) - 1);
                                    $(cObj).removeClass("like-post");
                                    $(cObjx).addClass("btn-option")
                                    location.reload();
                                }

                            }
                        }

                    }
                });


            });
        });
        $(document).ready(function () {
            // Get the modal
            var modal = document.getElementById("myModalstock");

            // Get the button that opens the modal
            var btn = document.getElementById("mystock");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function () {
                modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function () {
                modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function (event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
            }
        });
        /*--------------------------------------------------------------------------------*/
    </script>
    <script>
        function myMore() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("myBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "موارد بیشتر";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "نیاز نیست";
                moreText.style.display = "inline";
            }
        }
    </script>

@endsection

