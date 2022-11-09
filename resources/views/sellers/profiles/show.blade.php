
@extends('sellers.layouts.design')
@section('content')
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title">نمایش پروفایل</h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><i class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item active">پنل بازاریاب</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row flex-row">
                <div class="col-xl-12">
                    <div class="widget has-shadow">
                        <div class="widget-header bordered no-actions d-flex align-items-center row">
                            <h4> پنل بازاریاب</h4>
                            @include('sellers.layouts.errors')
                        </div>
                        <div class="widget-body">
                            <div class="col-10 ml-auto">
                                <div class="section-title mt-3 mb-3">
                                    <h4>01. اطلاعات شخصی</h4>
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">نام
                                    کاربری</label>
                                <div class="col-lg-8">
                                    <input disabled type="text" class="form-control"
                                           placeholder="{{ $users->username }}">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label
                                    class="col-lg-2 form-control-label d-flex justify-content-lg-end">تلفن</label>
                                <div class="col-lg-8">
                                    <input disabled type="text" class="form-control" placeholder="{{ $users->phone }}">
                                </div>
                            </div>
                            <form action="{{ route('sellers.profile') }}" method="post" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">نام
                                    </label>
                                    <div class="col-lg-8">
                                        <input disabled type="text" name="first_name" class="form-control"
                                               value="{{ $cus->first_name }}">
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">فامیل
                                    </label>
                                    <div class="col-lg-8">
                                        <input disabled type="text" name="last_name" class="form-control"
                                               value="{{ $cus->last_name }}">
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">نام پدر
                                    </label>
                                    <div class="col-lg-8">
                                        <input disabled type="text" name="fname" class="form-control"
                                               value="{{ $cus->fname }}">
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">نام وارث
                                    </label>
                                    @if(!empty($marker))
                                        <div class="col-lg-8">
                                            <input disabled type="text" name="heirName" class="form-control"
                                                   value="{{ $marker->heir_name }}">
                                        </div>
                                    @else
                                        <div class="col-lg-8">
                                            <input disabled type="text" name="heirName" class="form-control"
                                                   value="{{ $cus->heirName }}">
                                        </div>

                                    @endif
                                </div>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">کد ملی
                                    </label>
                                    <div class="col-lg-8">
                                        <input type="text" name="nationalcode" class="form-control"
                                               value="{{$cus->nationalcode}}" disabled >
                                    </div>
                                </div>
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">تاریخ تولد
                                    </label>
                                    <div class="col-lg-8">
                                        <input type="text" id="date_of_birth" name="birth" class="form-control"
                                               value="{{ $cus->birth }}" disabled>
                                    </div>
                                </div>
                            </form>
                            <form action="{{route('image.profile')}}" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group row d-flex align-items-center mb-5">
                                    <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">پروفایل
                                    </label>
                                    <div class="col-lg-7">
                                        <input type="file" name="path" class="form-control" value="{{$cus->path}}"
                                               >
                                    </div>
                                    <input name="id" type="hidden"
                                           value="{{ $cus->id }}">
                                    <div class="col-xxl-3">
                                        @if(!empty($cus['path']))
                                            <img style="width:75px;"
                                                 src="{{ asset("upload/sellers/profiles/".$cus->path) }}">
                                        @endif
                                    </div>
                                </div>
                                <div class="em-separator separator-dashed"></div>
                                <div class="text-right">
                                    <button class="btn btn-gradient-01" type="submit">ذخیره تغییرات</button>
                                    <button class="btn btn-shadow" type="reset">لغو</button>
                                </div>
                            </form>
                            <div class="col-10 ml-auto">
                                <div class="section-title mt-3 mb-3">
                                    <h4>02. اطلاعات اصلی   </h4>
                                </div>
                            </div>
                            @if(!empty($marker))
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">سقف درآمدی
                                    </label>
                                <div class="col-lg-8">

                                    <input disabled type="text" class="form-control"
                                           placeholder="{{ $marker->income_max }}" value="{{$marker->income_max}}">

                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">نمایش  شروع قرارداد
                                </label>
                                <div class="col-lg-8">
                                    <input disabled type="text" class="form-control"
                                           placeholder="{{ Verta($marker->agree_start)->format('%d %B %Y') }}">
                                </div>
                            </div>
                            <div class="form-group row d-flex align-items-center mb-5">
                                <label class="col-lg-2 form-control-label d-flex justify-content-lg-end">نمایش  پایان قرارداد
                                </label>
                                <div class="col-lg-8">
                                    <input disabled type="text" class="form-control"
                                           placeholder="{{ Verta($marker->agree_end)->format('%d %B %Y') }}">
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('links')
    <link href="{{url('assets/css/persian-datepicker.min.css')}}" rel="stylesheet"/>
@endsection
@section('scripts')
    <script src="{{ asset('assets/js/persian-datepicker.min.js') }}"></script>
    <script src="{{ url('assets/js/persian-date.min.js')}}"></script>
    <script>
        $('#date_of_birth').persianDatepicker({
            observer: true,
            format: 'YYYY/MM/DD'
        });
    </script>
@endsection

