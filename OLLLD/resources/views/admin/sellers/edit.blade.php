@extends('admin.layouts.design')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ویرایش فروشنده </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active"> ویرایش فروشنده</li>
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
                                <h3 class="card-title">ویرایش فروشنده  </h3>
                                @include('layouts.errors')
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <form method="post" action="{{ url('ad/seller/edit/'.$user->id) }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">تلفن   </label>
                                                    <input disabled value="{{ $user->phone }}" required name="phone" type="number" class="form-control"
                                                           id="phone"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">نام کاربری به انگلیسی  </label>
                                                    <input value="{{ $user->username }}" required name="username" type="text" class="form-control"
                                                           id="first_name"
                                                    >
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">انتخاب نوع فروشندگی    </label>
                                                <select required name="seller" id="seller"  class="form-control">
                                                    <option value="0">انتخاب نوع فروشندگی</option>
                                                    <option {{ $user->type_identity=="supplier"?'selected':'' }} value="supplier">تامین کننده</option>
                                                    <option {{ $user->type_identity=="agent"?'selected':'' }} value="agent">نماینده</option>
                                                    <option {{ $user->type_identity=="selleragent"?'selected':'' }} value="selleragent">عاملیت</option>
                                                    <option {{ $user->type_identity=="seller"?'selected':'' }} value="seller">فروشنده</option>
                                                    <option {{ $user->type_identity=="marketer"?'selected':'' }} value="marketer">بازاریاب</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="form-check">
                                            <input {{ $user->status=="1"?'checked':'' }} required type="checkbox" class="form-check-input" id="status" name="status" value="1">
                                            <label class="form-check-label" for="exampleCheck1">وضعیت </label>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">ذخیره</button>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>

                <!-- /.row -->
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>بروز رسانی پسورد</h4>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <form method="post" action="{{ url('ad/seller/updatepass/'.$user->id) }}"
                                      enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">پسورد </label>
                                            <input required name="password" type="password" class="form-control"
                                                   id="password"
                                            >
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">بروز رسانی</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
