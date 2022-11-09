@extends('admin.layouts.design')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>اطلاعات کامل مشتری </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">اطلاعات کامل مشتری</li>
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
                                <h3 class="card-title">اطلاعات کامل مشتری </h3>
                                @include('layouts.errors')
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive pb-3">
                                <div class="col-12 row">
                                    <h5>نام کاربری :</h5>
                                    <p class="mr-2">{{ $user->username ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>نام :</h5>
                                    <p class="mr-2">{{ $user->profiles->first_name ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>نام خانوادگی :</h5>
                                    <p class="mr-2">{{ $user->profiles->last_name ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5> شماره تماس :</h5>
                                    <p class="mr-2">{{ $user->phone ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5> کد معرف :</h5>
                                    <p class="mr-2">{{ $user->identifiercode ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>تاریخ ثبت :</h5>
                                    <p class="mr-2">{{ Verta($user->created_at)->format('%d %B %Y') }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>وضعیت :</h5>
                                    @if($user->status=="0")
                                        <p class="mr-2">در حال بررسی</p>
                                    @else
                                        <p class="badge badge-primary">تایید شده</p>
                                    @endif
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>استان :</h5>
                                    <p class="mr-2">{{ $user->address->province->name ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>شهر :</h5>
                                    <p class="mr-2">{{ $user->city->name ?? '' }}</p>
                                </div>
                                <div class="col-12 row mb-2">
                                    <h5>آدرس :</h5>
                                    <p class="mr-2">{{ $user->address->address ?? '' }}</p>
                                </div>
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
