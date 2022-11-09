@extends('admin.layouts.design')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>نمایش  کیف پول کاربران   </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">نمایش  کیف پول کاربران</li>
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
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">نمایش  کیف پول کاربران  </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام کاربر </th>
                                        <th>نام و نام خانوادگی</th>
                                        <th>شماره تماس  </th>
                                        <th>نوع کاربر</th>
                                        <th>شماره کارت  </th>
                                        <th>شماره شبا  </th>
                                        <th>مبلغ کل </th>
                                        <th>مبلغ سفارش  خریداران  </th>
                                        <th>مبلغ  واریز شده </th>
                                        <th>مبلغ  درخواست شده </th>
                                        <th>تاریخ بروز رسانی</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($get as $key => $row)
                                        <tr>
                                            <th>{{ $key+=1 }}</th>
                                            <th>{{ $row->username }} </th>
                                            <th>{{ $row->profiles->first_name??'' }}&nbsp;{{ $row->profiles->last_name??'' }} </th>
                                            <th>{{ $row->phone??'' }} </th>
                                            <th>
                                                @if($row->type_identity=="agent")
                                                نماینده
                                                @elseif ($row->type_identity=="supplier")
                                                تامین کنند
                                                @elseif ($row->type_identity=="users")
                                                    کاربر
                                            
                                                @elseif ($row->type_identity=="selleragent")
                                                عاملیت

                                                @elseif ($row->type_identity=="seller")
                                                فروشنده
                                                @elseif ($row->type_identity=="marketer")
                                                بازاریاب
                                                @endif
                                            </th>
                                            <th>{{ $row->card_bank??'ثبت نشده' }} </th>
                                            <th>{{ $row->code_shaba??'ثبت نشده' }} </th>
                                            <th>{{ $row->amount??'0' }}</th>
                                            <th>{{ $row->transfer??'0' }}</th>
                                           
                                            <th>{{ $row->deposit??'0' }}</th>
                                            <th>{{ $row->withdraw??'0' }}</th>
                                            <th>{{ Verta($row->updated_at)->format('%d %B %Y H:i') }}</th>
                                            <th>
                                                @if($row->status==1)  این کیف پول کاربران فعال می باشد   @else این کیف پول کاربران غیر فعال می باشد @endif
                                            </th>
                                        </tr>
                                    @empty
                                        <p>کیف پول کاربران نیست</p>
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
@section('scripts')
    <script>
        $(document).on('click', '.deleteRecord', function (e) {
            var id = $(this).attr('rel');
            var deleteFunction = $(this).attr('rel1');
            swal({
                    title: "شما مطمئن هستید؟",
                    text: "شما نمیتوانید این رکورد را دوباره بازیابی کنید!",
                    type: "warning",
                    showCancelButton: true,
                    confirmButtonClass: "btn-danger",
                    confirmButtonText: "بله، آن را حذف کنید!",
                    closeOnConfirm: false
                },
                function () {
                    window.location.href = "{{ url('/ad/') }}" + "/" + deleteFunction + "/" + id;
                });

        });
    </script>
@endsection
