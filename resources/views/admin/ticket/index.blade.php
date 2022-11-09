@extends('admin.layouts.design')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>نمایش تیکت‌ها </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">نمایش تیکت‌ها</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="row ">
            @include('layouts.errors')
        </div>
        <br>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- general form elements -->
                <!-- /.card-header -->
                <!-- form start -->

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">نمایش  تیکت‌ها </h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام محصول</th>
                                        <th>نام کاربر </th>
                                        <th>شماره تلفن کاربر </th>
                                        <th>عمل</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($inventories as $key => $row)
                                        <tr>
                                            <th>{{ $key+=1 }}</th>
                                            <th>{{ $row->product->title }} </th>
                                            <th>{{ ($row->first_name ?? '') . ($row->last_name ?? '') }} </th>
                                            <td>{{ $row->phone  ?? '' }}</td>
                                            <td>
                                                <div class="tools">
                                                    <div class="row">
                                                        <a href="{{ url('/ad/products/stock/'. $row->product_id) }}"
                                                           style="margin-right: 10px;margin-left: 10px;">
                                                            <i class="fa fa-edit p-1"> افزایش موجودی </i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>

                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">نمایش درخواست ها </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام درخواست‌دهنده</th>
                                        <th>ایمیل</th>
                                        <th>نوع درخوست</th>
                                        <th>نام معرف</th>
                                        <th>تلفن</th>
                                        <th>پیام</th>
                                        <th>تاریخ بروز رسانی</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($req  as $key => $row)
                                        <tr>
                                            <th>{{ $key+=1 }}</th>
                                            <th>{{ $row->name }} </th>
                                            <th>{{ $row->email }} </th>
                                            <th>{{ $row->type }} </th>
                                            <th>{{ empty($row->identifier->profiles) ? : $row->identifier->profiles->first_name ?? '' . $row->identifier->profiles->last_name ?? ''}} </th>
                                            <th>{{ $row->tel }} </th>
                                            <th>{{ $row->message }} </th>
                                            <th>{{ Verta($row->updated_at)->format('%d %B %Y H:i') }}</th>
                                        </tr>
                                    @empty
                                        <p> درخواست ها موجود نیست</p>
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

