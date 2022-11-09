@extends('front.layouts.design')

@section('content')
    @include('front.product.link.style')
    <div class="container" style="margin-top:5%">
        <div class="row">
            <div class="col-sm-12">
                <section class="bn_main_section">
                    <!-- Product List -->
                    <ul class="product_list grid row">
                        @forelse($productsAll as $row)
                            <?php
                            $link = $row->id . "/" . $row->slug;
                            if (Auth::check()) {
                                $user_id = Auth::user()->id;
                                $cat_id = $row->category_id;
                                $userDetails = App\User::where('id', $user_id)->first();
                                $type_identity = $userDetails->type_identity;
                                $checkcat = App\CategoryUser::where(['user_id' => $user_id, 'category_id' => $cat_id])->first();
                                if (!empty($checkcat)) {
                                    $countdown = $checkcat->discount_category ?? '5';
                                    $totalprice = ($row->price - ($row->price * ($countdown / 100)));
                                } else {
                                    $countdown = 0;
                                    $totalprice = $row->price;
                                }
                            } else {
                                $checkcat = null;
                                $countdown = 0;
                                $totalprice = $row->price;
                            }
                            ?>
                            <li class="ajax_block_product col-xs-12 col-sm-6 col-md-3 col-lg-3 last-item-of-tablet-line">
                                <div class="product-container" itemscope="" itemtype="http://schema.org/Product">
                                    @if($row->is_stock=="1")
                                        <span
                                               style="background-color: #FF9F00;
position: absolute;
left: 10px;
top: 10px;
text-transform: uppercase;
color: #fff;
padding: 2px 8px;
font-size: 13px;
z-index: 1;">استوک</span>
                                    @elseif($row->feature_items=="1")
                                        <span
                                                class="price-percent-reduction ">F</span>
                                    @else
                                    @endif
                                    <div class="left-block">
                                        <div class="product-image-container"><a class="product_img_link"
                                                                                href="{{ url('/product/'.$link) }}"
                                                                                title="{{ $row->title }}"
                                                                                itemprop="url"> <img
                                                        class="replace-2x img-responsive"
                                                        src="{{ asset($row->cover) }}"
                                                        alt="{{ $row->title }}" title="{{ $row->title }}"
                                                        width="160" height="160"
                                                        itemprop="image"> </a> <a class="quick-view"
                                                                                  href="{{ url('/product/'.$link) }}"
                                                                                  rel="{{ url('/product/'.$link) }}"
                                                                                  title="نمایش سریع"> <span><i
                                                            class="fa fa-arrows-alt"></i></span> </a>
                                        </div>
                                    </div>
                                    <div class="right-block" style="margin-top:20px;margin-bottom: 30px;">
                                        <a class="date_upd"><span>تاریخ بروزرسانی : </span>
                                            {{ Verta($row->created_at)->format('%d %B %Y') }}</a>
                                        <h3 itemprop="name"><a class="product-name" href="{{ url('/product/'.$link) }}"
                                                               title="{{ $row->title }}" itemprop="url">
                                                {{ $row->title }}</a>
                                        </h3>
                                        <p class="product-desc" style="font-size: small !important;" itemprop="description">
                                            {!!  Str::limit($row->description_short) !!}
                                        </p>
                                        <div class="content_price">
                                            @if($row->show_price=="1")
                                                @if($checkcat!=null)
                                                    @if(!@empty($checkcat->category_id == $cat_id))
                                                        @if($totalprice > 0)
                                                            <span class="bn_picp_off price product-price "> {{ $totalprice / 10 }} تومان </span>
                                                        @endif
                                                    @endif
                                                @endif
                                                <span
                                                        class="old-price product-price price"> {{ $row->price / 10 }} تومان </span>
                                            @endif
                                        </div>
                                        @auth
                                            @if($type_identity=="user")
                                                <form action="{{ url('add-cart') }}" method="post">
                                                    <input type="hidden" name="product_id"
                                                           value="{{ $row->id }}">
                                                    <input type="hidden" name="price" value="{{ $totalprice }}">
                                                    <input type="hidden" name="quantity" value="1">
                                                    @csrf
                                                    <div class="button-container">
                                                        <button type="submit" class="lnk_view">
                                                            <span>خرید</span>
                                                        </button>
                                                        <a class="lnk_view btn btn-primary"
                                                           href="{{ url('/product/'.$link) }}" title="مشاهده">
                                                            <span>توضیحات</span> </a>
                                                        <span class="availability hidden-xs"> <span
                                                                    class="available-now"> <i
                                                                        class="fa fa-check"></i> </span> </span>
                                                    </div>
                                                </form>
                                            @elseif($type_identity=="marketer")
                                            @elseif($type_identity=="Admin")
                                            @endif
                                        @endauth
                                        @guest
                                            <div class="button-container">
                                                <a href="{{ route('lgrg') }}" class="btn lnk_view">
                                                    ابتدا وارد شوید
                                                </a>
                                                <a class="lnk_view btn btn-primary"
                                                   href="{{ url('/product/'.$link) }}" title="مشاهده">
                                                    <span>توضیحات</span> </a>
                                                <span class="availability hidden-xs"> <span
                                                            class="available-now"> <i
                                                                class="fa fa-check"></i> </span> </span>
                                            </div>
                                        @endguest
                                    </div>
                                </div>
                            </li>
                        @empty
                        @endforelse
                    </ul>

                    <!-- Pagination-->
                    <div class="bn_pagination">
                        <ul class="bn_pagination_list">
                            {{ $productsAll->links() }}

                        </ul>
                    </div>

                </section>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/front/js/custom.js') }}"></script>
    <script src="{{ asset('assets/front/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/front/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.countdown.min.js') }}"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="{{ asset('assets/front/js/edit.js') }}"></script>
    <script src="{{ asset('assets/front/js/scripthome.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('assets/front/js/script.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('assets/front/js/main.js') }}"></script>
    <script type="text/javascript" language="javascript" src="{{ asset('assets/front/js/main-old.js') }}"></script>
@endsection
@section('links')
    <!-- Stylesheets -->
    <link type="text/css" href="{{ asset('assets/front/css/normalize.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/grid12.css') }}" rel="stylesheet"/>

    <link rel='stylesheet' href='{{ asset('assets/front/css/owl.carousel.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('assets/front/css/owl.theme.default.min.css') }}'>
    <link rel='stylesheet' href='{{ asset('assets/front/css/owl.theme.css') }}'>

    <link type="text/css" href="{{ asset('assets/front/css/slick-theme.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/slick.css') }}" rel="stylesheet"/>

    <link type="text/css" href="{{ asset('assets/front/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/magnific-popup.css') }}" rel="stylesheet"/>

    <link type="text/css" href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/media.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/old-style.css') }}" rel="stylesheet"/>
    <!-- JavaScript -->
    <script>
        window.jQueryQ = window.jQueryQ || [];
        window.$ = window.jQuery = function () {
            window.jQueryQ.push(arguments);
        }
    </script>
    <script type="text/javascript" src="{{ asset('assets/front/js/jquery-2.2.0.min.js') }}"></script>

@endsection