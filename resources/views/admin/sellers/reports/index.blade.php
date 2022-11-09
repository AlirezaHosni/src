@extends('admin.layouts.design')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>نمایش گزارش فروشنده </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">نمایش گزارش فروشنده</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <br>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                @include('layouts.errors')
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">نمایش سفارشات  </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>

                                        <th>نام کاربر </th>
                                        <th>شماره سبد خرید </th>
                                        <th>آدرس </th>
                                        <th>نوع پرداخت </th>
                                        <th>نوع حمل و نقل </th>
                                        <th>مبلغ کل </th>
                                        <th>وضعیت سفارش</th>
                                        <th>تاریخ بروز رسانی</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($orders as $key => $row)
                                        <tr>
                                            <th>{{ $key+=1 }}</th>
                                            <th>{{ $row->user->username??'' }} </th>
                                            <th>{{ $row->cart_id }} </th>
                                            <th>{{ $row->address->address??'' }} </th>
                                            <th>{{ $row->payment_type }} </th>
                                            <th>
                                                @if($row->post_string=="code")
                                                <span>حضوری</span>
                                                @elseif($row->post_string=="payk")
                                                    <span>پیک</span>
                                                @elseif($row->post_string=="tipax")
                                                    <span>tipax</span>
                                                @elseif($row->post_string=="baar")
                                                    <span>باربری</span>
                                                @elseif($row->post_string=="bus")
                                                    <span>اتوبوس رانی</span>
                                                @else
                                                    <span>نامشخص </span>
                                                @endif
                                            </th>
                                            <th>{{ $row->total }} قیمت تمام شده </th>
                                            <th>
                                                {{ $row->order_status }}
                                            </th>
                                            <th>{{ Verta($row->updated_at)->format('%d %B %Y H:i') }}</th>
                                            
                                        </tr>
                                    @empty
                                        <p>سفارشات موجود نیست</p>
                                    @endforelse
                                    </tbody>
                                </table>
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