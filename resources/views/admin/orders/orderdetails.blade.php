@extends('admin.layouts.design')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>اطلاعات کامل سفارش </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">اطلاعات کامل سفارش</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">اطلاعات کامل سفارش </h3>
                                @include('layouts.errors')
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive pb-3">
                                <div class="col-12 row">
                                    <h5>نام کاربری :</h5>
                                    <p class="mr-2">{{ $order->user->username ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>نام :</h5>
                                    <p class="mr-2">{{ $order->user->profiles->first_name ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>نام خانوادگی :</h5>
                                    <p class="mr-2">{{ $order->user->profiles->last_name ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>استان :</h5>
                                    <p class="mr-2">{{ $order->user->address->province->name ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>شهر :</h5>
                                    <p class="mr-2">{{ $order->user->city->name ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>آدرس :</h5>
                                    <p class="mr-2">{{ $order->user->address->address ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5> شماره تماس :</h5>
                                    <p class="mr-2">{{ $order->user->phone ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>تاریخ ثبت سفارش:</h5>
                                    <p class="mr-2">{{ Verta($order->created_at)->format('%d %B %Y') }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>تاریخ بروزرسانی:</h5>
                                    <p class="mr-2">{{ Verta($order->updated_at)->format('%d %B %Y') }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>شماره پیگیری:</h5>
                                    <p class="mr-2">{{ $order->tracking_code }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>نوع پرداخت:</h5>
                                    <p class="mr-2">{{ $order->payment_type }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>نوع حمل و نقل:</h5>
                                    <p class="mr-2">
                                        @if($order->post_string=="code")
                                            <span>حضوری</span>
                                        @elseif($order->post_string=="payk")
                                            <span>پیک</span>
                                        @elseif($order->post_string=="tipax")
                                            <span>tipax</span>
                                        @elseif($order->post_string=="baar")
                                            <span>باربری</span>
                                        @elseif($order->post_string=="bus")
                                            <span>اتوبوس رانی</span>
                                        @else
                                            <span>نامشخص </span>
                                        @endif
                                    </p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>نام محصول(محصولات) :</h5>
                                    @foreach($order->product as $product)
                                        <p class="mr-2">{{ $product->title }}</p>
                                    @endforeach
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>تعداد :</h5>
                                        <p class="mr-2">{{ $order->orders_products()->sum('product_qty') }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>مبلغ کل :</h5>
                                        <p class="mr-2">{{ $order->total }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>وضعیت سفارش:</h5>
                                        <p class="mr-2">{{ $order->order_status }}</p>
                                </div>
                                @if(count($order->orders_products()->whereNotNull('referral_text')->get()) > 0)
                                <div class="col-12 mb-2">
                                    <h5 class="font-weight-bold">کالاهای مرجوعی:</h5>
                                    @foreach($order->orders_products()->whereNotNull('referral_text')->get() as $referral)
                                    <div class="col-12 mb-1">
                                        <h5>نام محصول :{{ $referral->product_name }}</h5>
                                        <p class="mr-2">دلیل درخواست مرجوعی {{ $order->referral_text }}</p>
                                    </div>
                                    @endforeach
                                </div>
                                @endif
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
