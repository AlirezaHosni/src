@extends('admin.layouts.design')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>نمایش گزارش قیمت های کمتر </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">نمایش  گزارش قیمت های کمتر</li>
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
                                <h3 class="card-title">نمایش  گزارش قیمت ها کمتر </h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام محصول</th>
                                        <th>وضعیت </th>
                                        <th>سایت </th>
                                        <th>استان</th>
                                        <th>نام فروشگاه</th>
                                        <th>شماره تماس فروشنده</th>
                                        <th>آدرس فروشگاه</th>

                                        <th>قیمت </th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($value as $key => $row)
                                        <tr>
                                            <th>{{ $key+=1 }}</th>
                                            <th>{{ $row->product->title }} </th>
                                            <td>
                                                @if($row->is_internet=="0")
                                                    فروشگاه فیزیکی
                                                @else
                                                    اینترنتی
                                                @endif
                                            </td>
                                            <th>{{ $row->site ?? '' }} </th>
                                            <td>{{ $row->province->name ?? '' }}</td>
                                            <th>{{ $row->name_shop ?? '' }} </th>
                                            <th>{{ $row->phoneNumber ?? '' }} </th>
                                            <th>{{ $row->address_store ?? '' }} </th>

                                            <td>
                                                {{ $row->price ??'' }}تومان
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

                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
    </div>
@endsection

