@extends('sellers.layouts.design')
@section('content')
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title">نمایش سفارشات من</h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><i class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item active">نمایش سفارشات من</li>
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
                            <h4>نمایش سفارشات من </h4>
                        </div>
                        <div class="widget-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام کاربر </th>
                                        <th>کد پیگیری </th>
                                        <th>مبلغ  </th>
                                        <th>وضعیت سفارشات  </th>
                                        <th>تاریخ</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($getorder as $key => $row)
                                        <tr>
                                            <th><a href="{{ url('/sellers/orders/'.$row->id) }}">{{ $key+=1 }}</a></th>
                                            <th><a href="{{ url('/sellers/orders/'.$row->id) }}">{{ $row->user->username??'' }}</a></th>
                                            <th><a href="{{ url('/sellers/orders/'.$row->id) }}">{{ $row->tracking_code??'' }}</a></th>
                                            <th class="c-price"><a href="{{ url('/sellers/orders/'.$row->id) }}">{{ $row->total??'' }}</a></th>
                                            <th><a href="{{ url('/sellers/orders/'.$row->id) }}">{{ $row->order_status??'' }}</a></th>
                                            <th><a href="{{ url('/sellers/orders/'.$row->id) }}">{{ Verta($row->created_at)->format('%d %B %Y') }}</a></th>
                                            <th>
                                                <a href="{{ url('/sellers/orders/'.$row->id) }}">نمایش فاکتور</a>
                                            </th>
                                            <th>
                                                @php
                                                    $title = trim($row->title);
                                                @endphp
                                                <div id="share" class="row-share">
                                                    <a target="_blank" href="https://twitter.com/share?text=<?php echo trim($row->title) ?>&url={{ url('/sellers/orders') }}?id=<?= $row->id ?>" title="توییتر"><i class="la la-twitter"></i></a>
                                                    <a target="_blank" href="https://wa.me/989120938596?text={{ $title }}&url={{ url('/sellers/orders') }}?id=<?= $row->id ?>" title="whatsapp"><i class="la la-whatsapp"></i></a>
                                                    <a target="_blank" href="https://www.facebook.com/sharer.php?u={{ url('/sellers/orders') }}?id=<?= $row->id ?>&t=<?php echo trim($row->title) ?>" title="فیسبوک"><i class="la la-facebook"></i></a>
                                                    <a target="_blank" href="https://plus.google.com/share?url={{ url('/sellers/orders') }}?id=<?= $row->id ?>" onclick="window.open('https://plus.google.com/share?url={{ url('/sellers/orders') }}?id=<?= $row->id ?>','gplusshare','width=600,height=400,left='+(screen.availWidth/2-225)+',top='+(screen.availHeight/2-150)+'');return false;" title="گوگل پلاس"><i class="la la-google-plus"></i></a>
                                                    <a href="mailto:?subject=<?php echo trim($row->title) ?>&body={{ url('/sellers/orders') }}?id=<?= $row->id ?>" title="ایمیل"><i class="la la-envelope"></i></a>
                                                </div>
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
                    <div class="widget has-shadow">
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <h4>وضعیت سفارشات   </h4>
                        </div>
                        <div class="widget-body">
                            <form action="{{ url('/sellers/orders/checks/status') }}" method="post" class="form-horizontal" >
                                @csrf
                                <div class="form-group">
                                    <label for="account-pass">کد پیگیری: </label>
                                    <input required class="form-control" type="text" name="price_request"
                                           >
                                </div>
                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="submit">درخواست</button>
                                    <button class="btn btn-shadow" type="reset">لغو</button>
                                </div>
                            </form>
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
