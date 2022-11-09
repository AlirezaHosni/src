@extends('sellers.layouts.design')
@section('content')
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title">سفارشات مشتریان</h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><i class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item active">سفارشات مشتریان</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Page Header -->
            <div class="row flex-row">
                <div class="col-12">
                    <!-- Form -->
                    @include('layouts.errors')
                    <div class="widget has-shadow">
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <h4>سفارشات مشتریان </h4>
                        </div>
                        <div class="widget-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام کاربر </th>
                                        <th>شماره پیگیری </th>
                                        <th>مبلغ  </th>
                                        <th>وضعیت سفارشات  </th>
                                        <th>تاریخ</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($getorder as $key => $row)
                                        <tr>
                                            <th><a href="{{ url('/sellers/orders/users/factor/'.$row->id.'/'.$row->user->id) }}">{{ $key+=1 }}</a></th>
                                            <th><a href="{{ url('/sellers/orders/users/factor/'.$row->id.'/'.$row->user->id) }}">{{ $row->user->username??'' }}</a></th>
                                            <th><a href="{{ url('/sellers/orders/users/factor/'.$row->id.'/'.$row->user->id) }}">{{ $row->tracking_code }}</a></th>
                                            <th><a href="{{ url('/sellers/orders/users/factor/'.$row->id.'/'.$row->user->id) }}">{{ $row->total??'' }}</a></th>
                                            <th><a href="{{ url('/sellers/orders/users/factor/'.$row->id.'/'.$row->user->id) }}">{{ $row->order_status??'' }}</a></th>
                                            <th><a href="{{ url('/sellers/orders/users/factor/'.$row->id.'/'.$row->user->id) }}">{{ Verta($row->created_at)->format('%d %B %Y') }}</a></th>
                                            <th>
                                                <a href="{{ url('/sellers/orders/users/factor/'.$row->id.'/'.$row->user->id) }}">نمایش فاکتور</a>
                                            </th>
                                        </tr>
                                    @empty
                                    @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <!-- End Form -->
                </div>
            </div>
            <!-- End Row -->
        </div>
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
                    window.location.href = "/sellers/" + deleteFunction + "/" + id;
                });

        });
    </script>
@endsection
