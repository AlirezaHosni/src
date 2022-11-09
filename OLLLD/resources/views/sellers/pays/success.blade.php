@extends('sellers.layouts.design')
@section('content')
    @include('account.orders.style.css')
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="col-md-3 offset-2">
                    <a class="btn btn-success" href="{{ route('user.address.add') }}">ایجاد آدرس</a>
                </div>
            </div>
            <div class="row">
                <div id="shipping-data">
                    <div class="o-headline o-headline--checkout"><span>رسید پرداخت   {{  $orders->tracking_code }} </span></div>
                </div>
                <section class="c-checkout-details container">
                    <h4 class="c-checkout-details__title">کد سفارش: </h4>
                    <div class="c-checkout-details__row">
                        <div class="c-checkout-details__col--text">
                            <p>سفارش شما با موفقیت در سیستم ثبت شد و هم اکنون <span class="text-highlight text-highlight--ok">تکمیل شده</span> است. جزئیات این سفارش را می&zwnj;توانید با کلیک بر روی دکمه  مشاهده نمایید.</p>
                        </div> </div>
                    <div class="c-checkout-details__row">
                        <div class="c-checkout-details__col--table">
                            <div class="c-checkout-table">
                                <div class="c-checkout-table__row">
                                    <div class="c-checkout-table__col"><span>نام تحویل گیرنده:  {{ $userdetails->username }}  </span></div>
                                    <div class="c-checkout-table__col"><span>{{ $userdetails->phone }}شماره تماس : </span></div>
                                </div>
                                <div class="c-checkout-table__row">
                                    <div class="c-checkout-table__col"><span>تعداد مرسوله : {{ $orders->orders_products->count() }} </span></div>
                                    <div class="c-checkout-table__col"><span>مبلغ کل: {{ $orders->total }} </span></div>
                                </div>

                                <div class="c-checkout-table__row">
                                    <div class="c-checkout-table__col full-col"><span>آدرس :{{  $userdetails->addresses->find(1)->address??'' }} </span></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    
                <div class="c-checkout__actions">
                    <a href="{{ url('/') }}" class="btn-link-spoiler">« بازگشت به خانه </a>
                </div>
            </div>
        </div>
    </div>
    
@endsection
