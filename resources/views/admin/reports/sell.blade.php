@extends('admin.layouts.design')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>گزارش فروش </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">گزارش فروش</li>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">گزارش فروش </h3>

                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <form action="{{ route('report.sell') }}" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">نام محصول <span style="color:red">*</span></label>
                                                <input required name="title" type="text" class="form-control"
                                                       id="title"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">تاریخ شروع <span style="color:red">*</span></label>
                                                <input required name="start_date" type="text" class="form-control"
                                                       id="start_date"
                                                >
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">تاریخ پایان <span style="color:red">*</span></label>
                                                <input required name="end_date" type="text" class="form-control"
                                                       id="end_date"
                                                >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">فیلتر</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                @if($seles!=null)
                    @if(count($seles) > 0 )
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">گزارش فروش </h3>

                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>

                                                <th>نام محصول </th>
                                                <th>مبلغ محصول </th>
                                                <th>تعداد</th>
                                                <th>تاریخ بروز رسانی</th>
                                                <th>نام کاربری</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $total_amount = 0; ?>
                                            @forelse($seles as $key => $row)
                                                <tr>
                                                    <th>{{ $key+=1 }}</th>
                                                    <th>{{ $row->product_name??'' }} </th>
                                                    <th>{{ $row->product_price }} </th>
                                                    <th>{{ $row->product_qty??'' }} </th>
                                                    <th>{{ Verta($row->updated_at)->format('%d %B %Y H:i') }}</th>
                                                    <th>{{ $row->user->username??'' }} </th>
                                                </tr>
                                                <?php $total_amount = $total_amount + ($row->product_price * $row->product_qty); ?>
                                            @empty
                                                <p>گزارش فروشی موجود نیست</p>
                                            @endforelse
                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <td>مبلغ کل :</td>
                                                <td>{{ $total_amount / 10 }}تومان</td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                    <!-- /.card-body -->
                                </div>
                                <!-- /.card -->
                            </div>
                        </div>
                    @endif
                @endif
            </div><!-- /.container-fluid -->
        </section>

    </div>
@endsection
@section('links')
    <link href="{{url('assets/css/persian-datepicker.min.css')}}" rel="stylesheet"/>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/persian-datepicker.min.js') }}"></script>
    <script src="{{ url('assets/js/persian-date.min.js')}}"></script>
    <script>
        $('#start_date').persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD'
        });
        $('#end_date').persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD'
        });
    </script>
@endsection