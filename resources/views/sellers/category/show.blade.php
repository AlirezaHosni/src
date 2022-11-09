@extends('sellers.layouts.design')
@section('content')
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title">نمایش دسته بندی ها</h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><i class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item active">نمایش دسته بندی ها</li>
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
                            <h4>نمایش دسته بندی ها </h4>
                        </div>
                        <div class="widget-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام دسته بندی</th>
                                        <th>درصد تخفیف خرید</th>
                                        <th>  تعهد </th>
                                        <th>تاریخ</th>
                                        
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @forelse($getall as $key => $row)
                                        <tr>
                                            <th><a href="{{ url('/sellers/category/nemodar/'.$row->id) }}">{{ $key+=1 }}</a></th>
                                            <th>
                                                <a href="{{ url('/sellers/category/nemodar/'.$row->id) }}">
                                                @php
                                                    $cat = \App\Category::where('id',$row->category_id)->first();
                                                @endphp
                                                @if(!@empty($cat))
                                                    {{ $cat->title??'' }}
                                                @endif
                                                </a>
                                            </th>
                                            <th><a href="{{ url('/sellers/category/nemodar/'.$row->id) }}">
                                                {{ $row->discount_category??'' }} درصد</th>
                                            <th><a href="{{ url('/sellers/category/nemodar/'.$row->id) }}">
                                                @if($row->onus=="success")
                                                    تایید
                                                @else
                                                    در حال بررسی
                                                @endif
                                                </a>
                                            </th>
                                            <th><a href="{{ url('/sellers/category/nemodar/'.$row->id) }}">{{ Verta($row->created_at)->format('%d %B %Y') }}</a></th>
                                            
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
