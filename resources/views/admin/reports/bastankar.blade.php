@extends('admin.layouts.design')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>گزارش بستانکار </h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-left">
                            <li class="breadcrumb-item"><a href="{{ route('ad.dashboard') }}">خانه</a></li>
                            <li class="breadcrumb-item active">گزارش بستانکار</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <div class="row">
            @include('layouts.errors')
        </div>
        <div class="row mx-2">
            <a href="{{ route('report.bastankar.downloadPdf') }}" class="btn btn-primary mx-2">خروجی به pdf</a>
        </div>
        <br>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h3 class="card-title">گزارش بستانکار </h3>

                                    </div>
                                    <!-- /.card-header -->
                                    <div class="card-body">
                                        <table class="table table-bordered">
                                            <thead>
                                            <tr>
                                                <th>#</th>

                                                <th>نام کاربر </th>
                                                <th>مبلغ بستانکار </th>
                                                <th>مبلغ واریزی</th>
                                                <th>تاریخ بروز رسانی</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php $total_amount = 0; ?>
                                            @forelse($wallet as $key => $row)
                                                <tr>
                                                    <th>{{ $key+=1 }}</th>
                                                    <th>{{ $row->user->username??'' }} </th>
                                                    <th>{{ $row->deposit }} </th>
                                                    <th>{{ $row->transfer??'' }} </th>
                                                    <th>{{ Verta($row->updated_at)->format('%d %B %Y H:i') }}</th>

                                                </tr>
                                            @empty
                                                <p>گزارش بستانکاری موجود نیست</p>
                                            @endforelse
                                            </tbody>
                                        </table>
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