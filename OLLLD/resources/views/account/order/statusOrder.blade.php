@extends('account.layouts.design')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-6 offset-4 mt-5">
            <div class="card card-body">
                <form action="{{route('statusStore')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label>شماره سفارش:</label>
                        <input type="text" name="identifiercode" class="form-control" placeholder="شماره سفارش خود را وارد کنید">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="پیگیری" class="btn btn-lg float-right btn-success">
                    </div>
                </form>
                @if(!empty($status))
                @foreach($status as $item)
                <p> <span class="text-success">وضعیت سفارش:</span>{{$item->order_status}}</p>
                @endforeach
                @endif
            </div>
        </div>
    </div>
</div>
@endsection