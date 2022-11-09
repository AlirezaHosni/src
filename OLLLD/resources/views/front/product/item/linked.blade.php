<style>

    .swiper-button-next, .swiper-button-prev{
        color: red !important; 
        position: absolute;
        top: 50%;
        width: 10px;
        height: 10px;
        margin-top: -22px;
        z-index: 10;
        cursor: pointer;
        background-size: 10px 10px;
        background-position: center;
        background-repeat: no-repeat;
    }
</style>
<section class="product-wrapper container">
    <div class="headline">
        <h3>محصولات مکمل</h3></div>
    <div id="pslider" class="swiper-container swiper-container-horizontal swiper-container-rtl">
        <div class="product-box swiper-wrapper"
             style="transform: translate3d(239.25px, 0px, 0px); transition-duration: 0ms;">
            @forelse($linkeds as $row)
                <div class="product-item swiper-slide swiper-slide-prev" style="width: 229.25px; margin-left: 10px;font-size: 1em;">
                    <a href="#"><img src="{{ asset($row->cover) }}" alt=""></a>
                    <a class="title" href="#">  {{ $row->title }}</a> <span
                            class="price" style="padding-right: 0px;text-align: center;">{{ $row->price / 10 ??''  }} تومان</span>
                </div>
            @empty
            @endforelse
        </div>
        <div id="pslider-nbtn" class="slider-nbtn swiper-button-next" tabindex="0" role="button" aria-label="Next slide"
             aria-disabled="false"></div>
        <div id="pslider-pbtn" class="slider-pbtn swiper-button-prev" tabindex="0" role="button"
             aria-label="Previous slide" aria-disabled="false"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
</section>
