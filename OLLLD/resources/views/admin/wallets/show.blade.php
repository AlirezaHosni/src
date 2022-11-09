@extends('admin.layouts.design')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>نمایش تراکنش کیف پول کاربران   </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">نمایش تراکنش کیف پول کاربران</li>
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
                                <h3 class="card-title">نمایش تراکنش کیف پول کاربران  </h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body table-responsive p-0">
                                <table class="table table-bordered">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام کاربر </th>
                                        <th>نام و فامیل </th>
                                        <th>شماره تماس  </th>
                                        <th>نوع کاربر</th>
                                        <th>شماره کارت  </th>
                                        <th>شماره شبا</th>
                                        <th>مبلغ درخواست کاربر </th>
                                        <th>مبلغ موجود کاربر  </th>
                                        <th>تاریخ بررسی مدیر </th>
                                        <th>وضعیت  مدیر </th>
                                        <th>عملیات</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($get as $key => $row)
                                        <tr>
                                            <th>{{ $key+=1 }}</th>
                                            <th>{{ $row->user->username??'' }} </th>
                                            <th>{{ $row->user->profiles->first_name }} &nbsp; {{ $row->user->profiles->last_name }}</th>
                                            <th>{{ $row->user->phone??'' }} </th>
                                            <th>
                                                @if($row->user->type_identity=="agent")
                                                نماینده
                                                @elseif ($row->user->type_identity=="supplier")
                                                تامین کنند
                                                @elseif ($row->user->type_identity=="users")
                                                    کاربر
                                            
                                                @elseif ($row->user->type_identity=="selleragent")
                                                عاملیت

                                                @elseif ($row->user->type_identity=="seller")
                                                فروشنده
                                                @elseif ($row->user->type_identity=="marketer")
                                                بازاریاب
                                                @endif
                                            </th>
                                            <th>{{ $row->user->card_bank??'ثبت نشده' }} </th>
                                            <th>{{ $row->user->code_shaba??'ثبت نشده' }} </th>
                                            <th>{{ $row->withdraw??'' }} </th>
                                            <th>{{ $row->amount??'' }} </th>
                                            
                                            <th>{{ Verta($row->set_date)->format('%d %B %Y H:i') }}</th>
                                            <th>
                                                @if($row->paid_status=="pay-final")
                                                    <span style="color: #00a65a">پرداخت به حساب کاربر واریز شد</span>
                                                @elseif($row->paid_status=="pay-error")
                                                    <span style="color: red">پرداخت به حساب کاربر کنسل شد </span>
                                                @elseif($row->paid_status=="withdraw-money")
                                                    <span style="color: #00b7ff">درخواست برداشت کاربر  </span>
                                                @else
                                                <span style="color: red">پرداخت به حساب کاربر توسط مدیر کنسل شد </span>
                                                @endif
                                            </th>
                                            <th>
                                                <div class="tools">
                                                    <div class="row">
                                                        <a href="{{ url('/ad/wallets/request/'.$row->id) }}"
                                                           style="margin-right: 10px;margin-left: 10px;">
                                                            <i class="fa fa-bars"></i>
                                                        </a>
                                                    </div>
                                                </div>
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
