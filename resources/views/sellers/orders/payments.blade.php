@extends('front.layouts.design')
@section('content')
@include('sellers.orders.style.css')
<main class="main-cart container">
    <div class="o-page__content">
        <div id="payment-data">
            <div class="o-headline o-headline--checkout"><span>انتخاب شیوه پرداخت </span></div>
            <div class="row">
                <h3>
                    شرایط خرید اعتباری : {{ $settings->credit_term??'' }}
                </h3>
            </div>
            <ul class="c-checkout-paymethod">
                <li>
                    <h4 style="margin-right: 5%;margin-top: 2%" class="c-checkout-paymethod__title">
                        کاربر عزیز لطفا روش پرداخت خود را انتخاب کنید
                    </h4>

                    <div
                        class="c-checkout-paymethod__item c-checkout-paymethod__item--cc has-options js-checkout-paymethod__item is-selected is-select-mode">
                        <label class="c-ui-radio c-ui-radio--primary">
                            <input type="radio" class="payment_method" onClick="showformonline()" name="payment_method">
                            <span class="c-ui-radio__check"></span> </label>
                        <h4 class="c-checkout-paymethod__title"> پرداخت اینترنتی ( آنلاین با تمامی کارت‌های
                            بانکی )
                            <span>سرعت بیشتر در ارسال و پردازش سفارش</span></h4>
                    </div>
                    <div
                        class="c-checkout-paymethod__item c-checkout-paymethod__item--cc has-options js-checkout-paymethod__item is-selected is-select-mode">
                        <label class="c-ui-radio c-ui-radio--primary">
                            <input type="radio" onClick="showwallets()" class="payment_method" name="payment_method">
                            <span class="c-ui-radio__check"></span> </label>
                        <h4 class="c-checkout-paymethod__title">پرداخت اعتباری (کیف پول)
                        </h4>
                    </div>
                </li>
            </ul>

            <?php
                $total_amount = 0;
                foreach ($prodcutorders as $row) {
                    $total_amount = $total_amount + ($row->product_price * $row->product_qty);
                }
                ?>
            <div class="o-headline o-headline--checkout"><span>نحوه پرداخت حساب سفارش </span></div>
            <div class="c-checkout__to-shipping-sticky">
                <a style="design:none;visibility:hidden" href="{{ route('sellers.factor') }}" id="pay-online"
                    class="c-checkout__to-shipping-link ">نمایش فاکتور و پرداخت آنلاین</a>
                <br>

                <form style="design:none;visibility:hidden" id="pay-online2" action="{{ route('sellers.pay.online') }}"
                    method="post">
                    @csrf
                    <?php
                        $user_id = Auth::User()->id;
                        $userphone = App\User::where(['id' => $user_id])->first()->phone;
                        ?>
                    <input type="hidden" class="hidden" name="order_id" value="{{ $orders->id }}">
                    <input type="hidden" class="hidden" name="amount" value="{{ $orders->total }}">
                    <input type="hidden" class="hidden" name="phone" value="{{ $userphone }}">
                    <button type="submit" class="btn-order-traking">پرداخت انلاین</button>
                </form>

            </div>

            <div class="c-checkout__to-shipping-sticky">
                <div class="c-checkout__to-shipping-price-report">
                    <p>مبلغ قابل پرداخت</p>
                    <div class="c-checkout__to-shipping-price-report--price c-price">{{ $total_amount }}
                        <span>ریال</span>
                    </div>
                </div>
            </div>
            <form id="cod" style="design:none;visibility:hidden;margin-top: 20px"
                action="{{ route('sellers.payments.cod') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="order_id" value="{{ $orders->id }}">
                <input type="hidden" name="total" value="{{ $total_amount }}">
                <button class="btn btn-add-to-cart" type="submit">استفاده از اعتبار موجودی</button>
            </form>
            <form id="codadmin" style="design:none;visibility:hidden;margin-top: 20px"
                action="{{ route('sellers.payments.codadmin') }}" method="post">
                @csrf
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <input type="hidden" name="order_id" value="{{ $orders->id }}">
                <input type="hidden" name="total" value="{{ $total_amount }}">
                <button class="btn btn-add-to-cart" type="submit">درخواست اعتبار از ادمین</button>
            </form>

            <aside class="o-page__aside">
                <div class="c-checkout-aside">
                    <div class="c-checkout-summary">
                        <ul class="c-checkout-summary__summary">
                            <li class="has-devider">
                                <span>جمع</span>
                                <span class="c-price"> {{ $total_amount }} ریال </span>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </aside>
</main>
@endsection
@section('links')
<!-- Stylesheets -->
<link type="text/css" href="{{ asset('assets/front/css/normalize.css') }}" rel="stylesheet" />
<link type="text/css" href="{{ asset('assets/front/css/grid12.css') }}" rel="stylesheet" />

<link rel='stylesheet' href='{{ asset('assets/front/css/owl.carousel.min.css') }}'>
<link rel='stylesheet' href='{{ asset('assets/front/css/owl.theme.default.min.css') }}'>
<link rel='stylesheet' href='{{ asset('assets/front/css/owl.theme.css') }}'>

<link type="text/css" href="{{ asset('assets/front/css/slick-theme.css') }}" rel="stylesheet" />
<link type="text/css" href="{{ asset('assets/front/css/slick.css') }}" rel="stylesheet" />

<link type="text/css" href="{{ asset('assets/front/css/font-awesome.min.css') }}" rel="stylesheet" />
<link type="text/css" href="{{ asset('assets/front/css/magnific-popup.css') }}" rel="stylesheet" />

<link type="text/css" href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet" />
<link type="text/css" href="{{ asset('assets/front/css/media.css') }}" rel="stylesheet" />
<link type="text/css" href="{{ asset('assets/front/css/old-style.css') }}" rel="stylesheet" />
<!-- JavaScript -->
<script>
    window.jQueryQ = window.jQueryQ || [];
    window.$ = window.jQuery = function () {
        window.jQueryQ.push(arguments);
    }
</script>
<script type="text/javascript" src="{{ asset('assets/front/js/jquery-2.2.0.min.js') }}"></script>

<link rel="stylesheet" href="{{ asset('assets/f/css/reset.css') }}">
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
<script>
    $('.c-checkout-order-summary__header').click(function () {
        $('.c-checkout-order-summary__content').slideToggle(200);
    });
</script>
<script>
    $('.c-checkout-order-summary__header').click(function () {
        $('.c-checkout-order-summary__content').slideToggle(200);
    });

    function showformonline() {
        document.getElementById("pay-online").style.display = "block";
        document.getElementById("pay-online").style.visibility = "visible";
        document.getElementById("pay-online2").style.display = "block";
        document.getElementById("pay-online2").style.visibility = "visible";
        document.getElementById("cod").style.display = "none";
        document.getElementById("cod").style.visibility = "hidden";
        document.getElementById("codadmin").style.visibility = "hidden";
        //alert('showformonline');
    }

    function showwallets() {
        //alert('showwallets');
        document.getElementById("pay-online").style.display = "none";
        document.getElementById("pay-online").style.visibility = "hidden";
        document.getElementById("pay-online2").style.display = "none";
        document.getElementById("pay-online2").style.visibility = "hidden";
        document.getElementById("cod").style.display = "block";
        document.getElementById("cod").style.visibility = "visible";
        document.getElementById("codadmin").style.visibility = "visible";
    }
</script>
@endsection