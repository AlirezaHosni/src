@extends('sellers.layouts.design')
@section('content')
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title">کیف پول کاربران</h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><i class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item active">کیف پول کاربران</li>
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
                            <h4>کیف پول کاربران </h4>
                        </div>
                        <div class="widget-body">
                            <form action="" method="post" class="form-horizontal" enctype="multipart/form-data">
                                @csrf
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" name="money_total" value="{{ implode(',',$user->wallets()->get()->pluck('ballence')->toArray()) }}">
                                <input type="hidden" name="wallet_id" value="{{ implode(',',$user->wallets()->get()->pluck('id')->toArray()) }}">
                                <div class="form-group">
                                    <label for="account-pass">مبلغ موجود کیف پول ریال </label>
                                    <input disabled class="form-control" type="text"
                                           value="{{ $user->wallets->ballence??'0' }}">
                                </div>
                                
                                @if( implode(',',$user->wallets()->get()->pluck('ballence')->toArray())  > 1000000)
                                    <div class="em-separator separator-dashed"></div>
                                    <div class="form-group">
                                        
                                        <input required class="form-control" type="number" name="price_request"
                                               value="{{ $user->wallets->ballence??'0' }}">
                                    </div>
                                    <div class="text-right">
                                        <button class="btn btn-gradient-01" type="submit">درخواست</button>
                                        <button class="btn btn-shadow" type="reset">لغو</button>
                                    </div>
                                @else
                                <div class="form-group">
                                    <label for="account-pass">
                                        فرم کیف پول در صورت که بالا ۱۰۰ هزار تومان باشد نمایش می دهد
                                    </label>
                                </div>
                                @endif
                            </form>
                        </div>
                    </div>
                    <!-- End Form -->
                </div>
            </div>
            <div class="row flex-row">
                <div class="col-12">
                    <!-- Form -->
                    @include('layouts.errors')
                    <div class="widget has-shadow">
                        <div class="widget-header bordered no-actions d-flex align-items-center">
                            <h4>کیف پول کاربران </h4>
                        </div>
                        <div class="widget-body">
                            <div class="table-responsive">
                                <table class="table mb-0">
                                    <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>نام</th>
                                        <th>شماره تماس</th>
                                        <th>شماره بانک</th>
                                        <th>درصد</th>
                                        <th>مبلغ واریزی</th>
                                        <th>وضعیت</th>
                                        <th>تاریخ</th>

                                    </tr>
                                    </thead>
                                    <tbody>
                                    @if(!empty($user->wallets->transactions))
                                    @forelse($user->wallets->transactions as $key => $row)

                                        <tr>
                                            <th>{{ $key+=1 }}</th>
                                            <th>{{ $user->profiles->first_name??'' }} &nbsp; {{ $user->profiles->last_name??'' }}</th>
                                            <th>{{ $user->phone??'' }}</th>
                                            <th>{{ $user->card_bank??'' }}</th>
                                            <th>{{ $row->percent	??'' }}%</th>
                                            <th>{{ $row->amount	??'' }}</th>
                                            <th>
                                                @if($row->status=="withdraw-money")
                                                    <span
                                                        style="color: #00a65a">در حال بررسی </span>
                                                @endif

                                            </th>
                                            <th>{{ Verta($row->created_at)->format('%d %B %Y') }}</th>
                                        </tr>
                                    @empty
                                    @endforelse
                                    @endif
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
