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
                <div class="widget has-shadow">
                    <div class="widget-header bordered no-actions d-flex align-items-center">
                        <h4>وضعیت سفارشات   </h4>
                    </div>
                    <div class="widget-body">
                        <div class="form-group">
                            <label for="account-pass"> وضعیت سفارش </label>
                            @if($getorder->order_status=="Panding")
                            <input disabled required class="form-control" type="text" value="در دست بررسی"
                                   >
                                   @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection