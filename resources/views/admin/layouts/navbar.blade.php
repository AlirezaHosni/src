<!-- Navbar -->
<nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('ad.dashboard') }}" class="nav-link">داشبورد</a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a target="_blank" href="{{ url('/') }}" class="nav-link">نمایش سایت</a>
        </li>
    </ul>

    <!-- SEARCH FORM -->
    <!-- Right navbar links -->
    <ul class="navbar-nav mr-auto">
        <!-- Messages Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-comments-o"></i>
                <span class="badge badge-danger navbar-badge">{{\App\Product::where('stock','=', 0)->orderBy('updated_at', 'desc')->limit(15)->get()->count()}}</span>
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-left">
                <div class="dropdown-divider"></div>
                @foreach(\App\Product::where('stock','=', 0)->orderBy('updated_at', 'desc')->limit(15)->get() as $product)
                    <a href="#" class="dropdown-item dropdown-footer"> {{$product->title}} ناموجود است</a>
                @endforeach
            </div>
        </li>
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item d-none d-sm-inline-block">
            <a href="{{ route('ad.logout') }}" class="nav-link">خروج</a>
        </li>
    </ul>
</nav>
<!-- /.navbar -->
