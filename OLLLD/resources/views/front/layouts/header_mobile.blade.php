<nav class="mobilemenu mobilemenu-right" style="display: none !important;">
    <!-- Mobile Menu Search -->
    <form method="post" action="{{ url('/search') }}">
        @csrf
        <div class="bn_mobile_search">
            <input class="bn_ms_input" type="text" name="pcode" required
                   placeholder="کد و یا نام کالا را جستجو کنید...">
            <i class="fa fa-search bn_search_icon"></i>
            <input class="bn_ms_submit" type="submit" value="" tabindex="20">
        </div>
    </form>
    <!-- Mobile Menu Buttons -->
    @if(empty(Auth::check()))
        <div class="bn_mobile_btns">
            <a class="bn_mb_reg" href="{{ route('lgrg') }}">ورود / ثبت نـام</a>
        </div>
        <div class="bn_mobile_btns">
            <a class="bn_mb_reg" href="{{ url('/sellers/login') }}">ورود پنل بازاریاب </a>
        </div>
    @else
        @if($type_identity=="Admin")
            <div class="bn_mobile_btns">
                <a class="bn_mb_reg" href="{{ route('ad.dashboard') }}">پنل مدیریت </a>
            </div>
        @elseif($type_identity=="user")
            <div class="bn_mobile_btns">
                <a class="bn_mb_reg" href="{{ route('account') }}">پنل کاربری </a>
            </div>
        @else
            <div class="bn_mobile_btns">
                <a class="bn_mb_reg" href="{{ route('sellers.dashborad') }}">پنل فروشندگان </a>
            </div>
    @endif

@endif
<!-- Mobile Menu Links -->
    <ul class="bn_mb_nav">
        <li class="bold"><a href="{{ url('complaints') }}"><i class="fa fa-check"></i><span>ثبت نارضایتی</span></a>
        </li>
        <li><a href="{{ route('jobs') }}"><i class="fa fa-home"></i><span>فرم درخواست همکاری </span></a></li>
        <li><a href="{{ url('products') }}"><i class="fa fa-shopping-cart"></i><span>فـروشگاه</span></a>
        </li>
        <li><a href="{{ url('support') }}"><i class="fa fa-phone"></i><span>تمـاس با ما</span></a></li>
        <?php
        $mfooterc = \App\Menu::where('menu_type', 'menufootercatc')->take(5)->get();
        ?>
        @forelse($mfooterc as $row)
            <li><a href="/pages/{{ $row->page->slug??'' }}">{{ $row->title }}   </a></li>
        @empty
        @endforelse
    </ul>
    <!-- Mobile Menu Socials -->
    <ul class="bn_mb_socials">
        <li><a href="{{ $socails->telegram??'' }}" target="_blank" class="bn_mbs_telegram"><i
                        class="fa fa-telegram"></i><span>تلگــرام</span></a></li>
        <li><a href="{{ $socails->instagram??'' }}" target="_blank" class="bn_mbs_instagram"><i
                        class="fa  fa-instagram"></i><span>اینستاگـرام</span></a></li>
    </ul>

</nav>