@php
    if (Auth::check()) {
    $cat_id = $productDetails->category_id;
    $user_id = Auth::user()->id;
     $userDetails = App\User::where('id', $user_id)->first();
     $type_identity = $userDetails->type_identity;
    $checkcat = App\CategoryUser::where(['user_id' => $user_id,'category_id' => $cat_id])->first();
     if(!@empty($checkcat)){
          $countdown = $checkcat->discount_category??'5';
                   //dd($countdown);
          $totalprice = ($productDetails->price - ($productDetails->price * ($countdown / 100)));
     }else{
         $totalprice = $productDetails->price;
     }
    }else{
        $totalprice = $productDetails->price;
        $type_identity = "guest";
    }
@endphp

<div class="c-product__summary">
    <div class="c-product__guarantee">گارانتی :<span>{{ $productDetails->warranty??'' }} </span></div>
    <div class="c-product__delivery" style="padding-bottom: 50px;">
        <div class="delivery-warehouse"><span
                    class="c-product__delivery-warehouse--no-lead-time"> @if($productDetails->show_price=="1")
                    <div class="product__delivery price original">قیمت :{{ $totalprice / 10??'' }} تومان</div>
                @endif </span></div>
    </div>

    <div class="c-product__add" style="margin-top: 10px;">
        @if($productDetails->stock ==0)
            <button style="background-color: #1cdb81" id="mystock" class="btn btn-info"><i class="fa fa-check"></i>
                موجود شد، خبرم کن
            </button>
        @else
            @if($type_identity=="user")
                <form action="{{ url('add-cart') }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $productDetails->id }}">
                    <input type="hidden" name="price" value="{{ $totalprice??'' }}">
                    <input type="hidden" name="quantity" value="1">
                    <div class="button-cart">
                        <button style="width: 100%;" class="btn-add-to-cart" type="submit"
                                value="افزودن به سبد خرید">افزودن
                            به
                            سبد
                            خرید
                        </button>
                    </div>
                </form>
            @elseif($type_identity=="marketer")
            @elseif($type_identity=="Admin")
            @elseif($type_identity=="guest")
                <div class="button-cart">
                    <a href="{{ url('user/login') }}" style="width: 100%;" class="btn-add-to-cart"
                            value="افزودن به سبد خرید">افزودن
                        به
                        سبد
                        خرید
                    </a>
                </div>
            @else
                <form action="{{ url('/sellers/add-cart') }}" method="post">
                    @csrf
                    <input type="hidden" name="product_id" value="{{ $productDetails->id }}">
                    <input type="hidden" name="price" value="{{ $totalprice??'' }}">
                    <input type="hidden" name="quantity" value="1">
                    <div class="button-cart">
                        <button style="width: 100%;padding: 14px 20px;" class="btn-add-to-cart cart-btn-action"
                                type="submit" value="افزودن به سبد خرید">افزودن
                            به
                            سبد
                            خرید
                        </button>
                    </div>
                </form>
            @endif
        @endif
    </div>
    <div class="c-product__unfair-price">
        <span>آیا قیمت مناسب‌تری سراغ دارید؟ </span>
        <a class="btn-link-spoiler" href="{{ url('/products/reports/price/'.$productDetails->id) }}">بله</a>
    </div>
</div>

<div id="myModalstock" class="modal">
    <style>
        .btn {
            display: inline-block;
            width: 100%;
            font-weight: 400;
            text-align: center;
            white-space: nowrap;
            vertical-align: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.5625rem 1rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 5px;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
        }

        .btn-success {
            color: #f8f9fa;
            background-color: #007c59;
            border-color: #004e38;
        }

        .btn-secondary {
            color: #f8f9fa;
            background-color: #3b3a4a;
            border-color: #262630;
        }
    </style>
    <!-- Modal content -->
    <div class="modal-content">
        <div class="modal-header">

            <h2>اطلاع از موجودی کالا</h2>
            <span class="close">&times;</span>
        </div>
        <form action="{{ route('product.stock') }}" method="post">
            @csrf
            <input type="hidden" class="hidden" name="product_id" value="{{ $productDetails->id }}">
            <div class="modal-body">
                <p class="mb-5">اطلاعات خود را تکمیل کنید</p>
                <div class="row">

                    <div class="row">
                        <div class="col-md-6 form-group">
                            <label for="">نام</label>
                            <input require type="text" class="form-control" name="first_name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">نام خانوادگی</label>
                            <input require type="text" class="form-control" name="last_name">
                        </div>
                        <div class="col-md-6 form-group">
                            <label for="">شماره همراه</label>
                            <input require type="text" dir="ltr" placeholder="۰۹"
                                   class="form-control" name="phone">
                        </div>
                    </div>

                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary close">منصرف شدم</button>
                <button type="submit" class="btn btn-success ">ثبت</button>
            </div>
        </form>
    </div>

</div>
