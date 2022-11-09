
@extends('account.layouts.design')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>نمایش مرجوع   </h1>
                    </div>
                    <div class="col-sm-6" style="margin: 0 300px;">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">نمایش مرجوع</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- general form elements -->
                <!-- /.card-header -->
                <!-- form start -->

                @include('layouts.errors')
                <div class="row">
                    <div class="col-12" style="margin: 0 250px;">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">نمایش مرجوع  </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>

                                        <th>نام محصول  </th>
                                        <th>دلیل درخواست   </th>
                                        <th>کد پیگری</th>
                                        <th>وضعیت</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                      @foreach($orderall as $row)
                                          <tr>
                                              <td>{{$row->product_name}}</td>
                                              <td>@if($row->referral_text==null) - @else{{$row->referral_text}} @endif</td>
                                              <td>{{$row->TrackingCode}}</td>
                                              <td>
                                                  @if($row->referral === 0)
                                                      درحال بررسی
                                                  @else
                                                      مرجوع شد
                                                  @endif
                                              </td>
                                          </tr>
                                      @endforeach
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