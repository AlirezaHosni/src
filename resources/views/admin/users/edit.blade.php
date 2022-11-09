@extends('admin.layouts.design')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ویرایش کارمند </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active"> ویرایش کارمند</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
            @include('layouts.errors')
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">ویرایش کارمند  </h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <form method="post" action="{{ url('ad/users/edit/'.$user->id) }}"
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
                                        <div class="form-group">
                                            <div class="row">
                                                <label>با انتحاب نقش در بخش اصلی دسترسی‌های مخصوص آن نقش به کارمند داده می‌شود ولی اگر دسترسی خاصی به این کارمند میخواهید اعطا کنید انتخاب کنید(می‌تواند دست نخورده باقی بماند)</label>
                                                @forelse($permissions as $key => $row)
                                                    {{--                                                {{ $role->permissions['name']==$row->name?'checked':'' }}--}}
                                                    <div class="col-lg-3">
                                                        <div class="form-check">
                                                            <input
                                                            @if($user->hasPermissionTo($row->name)) checked @endif
                                                                    name="permissions[]" class="form-check-input"
                                                                    type="checkbox"
                                                                    value="{{ $row->name }} ">
                                                            <label class="form-check-label">{{ $row->title }} </label>
                                                        </div>
                                                    </div>

                                                @empty
                                                    <p>دسترسی نقش موجود نیست</p>
                                                @endforelse
                                            </div>
                                        </div>
                                        <div class="form-check">
                                            <input {{ $user->status=="1"?"checked":'' }} required type="checkbox" class="form-check-input" id="status" name="status" value="1">
                                            <label class="form-check-label" for="exampleCheck1">وضعیت کارمند</label>
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


            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>بروز رسانی پسورد</h4>
                            </div>
                            <div class="card-body table-responsive p-0">
                                <form method="post" action="{{ url('ad/users/updatepass/'.$user->id) }}"
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
