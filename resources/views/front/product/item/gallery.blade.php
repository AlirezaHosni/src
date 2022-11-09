<style>
    @media only screen and (max-width: 480px) {
        .c-gallery__options {
            display: flex;
            flex-direction: row;
            margin-left: 20%;
            margin-right: 20%;

        }

        .c-gallery__options li:first-child {
            /* margin-top: 0; */
        }

        .c-gallery__options li {
            position: relative;
            margin-left: 10px;
            margin-right: 10px;
            margin-top: 0px;
        }

        .c-gallery__item .c-gallery__img {
            position: absolute;
            top: 20%;
            width: 80%;
            right: 10%;
        }

        .c-product__title .en-title {
            color: #333;
            font-size: 1.2em;
            line-height: 2.7;
            text-align: center;
            font-weight: bold;
        }

        .c-product__directory {
            margin: 20px 20px 20px 20px;
            font-size: 1em;
            line-height: 3;
        }

        .c-product__params {
            margin: 20px 20px 20px 20px;
            font-size: 1em;
            line-height: 3;
            color: #333;
            font-size: 1.2em;
            line-height: 2.7;
            text-align: center;
            font-weight: bold;
        }

        .c-product__summary .seller, .c-product__guarantee, .c-product__delivery {
            border-bottom: 1px solid #ddd;
            margin: 20px 20px 20px 20px;
            font-size: 1em;
            line-height: 3;
            color: #333;
            font-size: 1.2em;
            line-height: 2.7;
            text-align: center;
            font-weight: bold;
        }

        .button-cart {
            border-radius: 0;
            position: fixed;
            bottom: 0;
            width: 100%;
            right: 0;
            z-index: 9;
            display: -webkit-box;
            display: -ms-flexbox;
            display: flex;
            -webkit-box-pack: justify;
            -ms-flex-pack: justify;
            justify-content: space-between;
            -webkit-box-shadow: 0 -1px 2px 0 rgb(0 0 0 / 8%);
            box-shadow: 0 -1px 2px 0 rgb(0 0 0 / 8%);
            background-color: #fff;
            padding: 12px;
        }

        .cart-btn-action {
            border-radius: 9px;
            font-size: 18px;
            font-size: 1.286rem;
            line-height: 1.222;
            letter-spacing: -.6px;
            background-color: #00bfd6;
            color: #fff;
            padding: 20px;
            width: 100%;
            background-color: #ef394e;
        }

        .btn-add-to-cart {
            font-size: 1.286rem;
            line-height: 1.222;
            padding: 16px 32px 16px 18px;
            border-radius: 8px;
            background-color: #ef394e;
            color: #fff;
            overflow: hidden;
            letter-spacing: -.7px;
            max-width: 380px;
            font-weight: 600;
        }

        .cart-btn-action::after {
            text-align: center;
        }

        .price {
            -webkit-box-orient: vertical;
            -webkit-box-direction: normal;
            -ms-flex-direction: column;
            /* flex-direction: column; */
            -webkit-box-align: end;
            -ms-flex-align: end;
            align-items: flex-end;
            color: #fb3449;
        }

        .c-box-tabs__tab span {
            font-size: 0.91em;
            font-weight: 400;
        }

    }

    .countlisk {
        font-family: fontawesome;
        font-size: 1.2em;
        color: #e11919;
        top: 40%;
        right: 50%;
    }

    .like-post {
        width: 45px;
        height: 35px;
        background-color: #fff;
        color: #eeebeb;
        position: relative;
        transition: .3s all;
        font-size: 1.3em;
    }

    .like-post:before {
        font-family: fontawesome;
        transition: .3s all;
        font-size: 1.3em;
        color: #f10c0c;
        width: 45px;
        height: 35px;
    }
</style>
<div class="c-gallery">
    <div class="c-gallery__item">
        <ul id="product__option" class="c-gallery__options">
            <li class="panel" data-id="{{ $productDetails->id }}">

                <?php $user = auth()->user();?>
                <button data-toggle="lightbox"
                        class="likeas  @auth {{ $user->hasLiked($productDetails) ? 'like-post' : 'btn-option' }} @endauth  @guest btn-option @endguest btn-option--add-to-wish  ">
                    <i id="like{{$productDetails->id}}">
                        @if($productDetails->likers()->get()->count() >= 1)
                            <div class="countlisk" id="like{{$productDetails->id}}-bs3">
                                {{ $productDetails->likers()->get()->count() }}
                            </div>

                        @endif
                    </i>

                </button>
            </li>
            <li>
                @php
                    $urls = '/product/'.$productDetails->id.'/'.$productDetails->slug;
                @endphp
                <a rel="nofollow" target="_blank" href="whatsapp://send?text={{ url($urls) }}">
                    <button class="btn-option btn-option--social"></button>
                </a>

            </li>

            <li>
                <a rel="nofollow" target="_blank" href="{{ url('/products/price/'.$productDetails->id) }}">
                    <button class="btn-option btn-option--stats"></button>
                </a>
            </li>
            @if($productDetails->stock ==0)
                <li id="BellStock">
                    <a class="BellStock" href="#reminder">
                        <button class="btn-option fa fa-bell BellStock"></button>
                    </a>
                </li>

            @endif
        </ul>

        <div class="c-gallery__img"><img src="{{ asset($productDetails->cover) }}" class="zoom_03 xzoom" id="zoom_03"
                                         alt=""
                                         data-zoom-image="{{ asset($productDetails->cover) }}">
        </div>
    </div>
    <ul class="c-gallery__items">
        <li id="gallery_02">
            <a href="#" onclick="return false;" data-toggle="modal" data-target="#product-gallery"
               data-image="{{ asset($productDetails->cover) }}"
               data-zoom-image="{{ asset($productDetails->cover) }}">
                <img style="height: 50px;width: 50px" src="{{ asset($productDetails->cover) }}">
            </a>
        </li>
        @forelse($gallery as $row)

            <li id="gallery_01">
                <a href="#" onclick="return false;" data-toggle="modal" data-target="#product-gallery"
                   data-image="{{ asset($row->path.$row->image) }}"
                   data-zoom-image="{{ asset($row->path.$row->image) }}">
                    <img style="height: 50px;width: 50px" src="{{ asset($row->path.$row->image) }}">
                </a>
            </li>
        @empty
        @endforelse
    </ul>
</div>

