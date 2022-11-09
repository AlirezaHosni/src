<section class='layerDiscount' style="background: #33cc33; ">

    <div class='layerDiscount-right'>
        <img class='image' src='{{ asset('assets/front/images/used_products.png') }}'>
    </div>

    <div class='layerDiscount-left owl-carousel owl-theme' id='layer_discounttwo'>

        <div id='layer_productsCardLogo' class='productsCard productsCard-logo'>
            <img class='image' src='{{ asset('assets/front/images/used_products.png') }}'>
        </div>
        <style>
            pr_flash {
                left: auto;
                right: 10px;
            }
            .pr_flash {
                background-color: #FF9F00;
                position: absolute;
                left: 10px;
                top: 10px;
                text-transform: uppercase;
                color: #fff;
                padding: 2px 8px;
                font-size: 13px;
                z-index: 1;
            }
        </style>
        @forelse($works as $key => $row)
            @if(!@empty($row->product))
                @php

                    $slug = \App\Library\Helper::slugfix($row->product->title);
                    $idP  = $row->product->id;
                    $link = $idP."/".$slug;
                @endphp

                <div class='productsCard'>
                    @if($row->product->is_stock=="1")
                        <span
                                class="pr_flash">استوک</span>
                    @else
                    @endif
                    <div class='productsCard-image'>
                        <a href="{{ url('/product/'.$link) }}">
                            <img src='{{ asset($row->product->cover) }}'>
                        </a>
                    </div>
                    <div class='productsCard-title'>
                        <a href="{{ url('/product/'.$link) }}">
                            {{ $row->product->title }}
                        </a>
                    </div>

                    <div class='productsCard-description'>
                        <i class='fa fa-info-circle'></i>
                        <span>گارانتی : {{ $row->product->warranty??'' }}  </span>
                    </div>
                    <div class='productsCard-price'>
                        <div class='price'>{{ $row->product->price / 10 }} <span class='currency'>تومان</span></div>
                    </div>
                    <div class='productsCard-price'>
                        <div class="date">تاریخ کارکرده : {{ Verta($row->time_special)->format('%Y/%m/%d') }}</div>
                    </div>
                </div>
            @endif

        @empty
        @endforelse

        <div class='productsCard productsCard-last'></div>

    </div>
</section>
<script>
    $(document).ready(function () {
        owl = $("#layer_discounttwo").owlCarousel({
            rtl: true,
            loop: false,
            margin: 10,
            nav: true,
            dots: false,
            autoplay: false,
            autoplayTimout: 0,
            autoplayHoverPause: false,
            responsive: {
                0: {items: 2},
                768: {items: 2},
                1024: {items: 4},
            },
        });

        let matchMedia = window.matchMedia('(max-width: 425px)');
        if (matchMedia.matches == false) {
            document.querySelector(".productsCard-logo").closest(".owl-item").remove();
            document.querySelector(".productsCard-last").closest(".owl-item").remove();
            owl.owlCarousel('destroy'); // destroyed
            owl.owlCarousel({
                rtl: true,
                loop: false,
                margin: 10,
                nav: true,
                dots: false,
                autoplay: false,
                autoplayTimout: 0,
                autoplayHoverPause: false,
                responsive: {
                    0: {items: 2},
                    768: {items: 2},
                    1024: {items: 4},
                },
            });
        }
        owl.trigger('refresh.owl.carousel');
    });
</script>
