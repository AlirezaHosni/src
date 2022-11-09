@extends('front.layouts.design')
@section('content')
    @include('front.product.item.style')
    <div class="container">
        <div class="col-md-12">
            <h1 class="text-center">{{ $product->title??'' }}</h1>
            <div class="col-md-8 col-md-offset-2">
                <div class="col-xl-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="chart-container">
                                <div class="chart has-fixed-height" id="bars_basic"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('links')
    <link type="text/css" href="{{ asset('assets/front/css/font-awesome.min.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/style.css') }}" rel="stylesheet"/>
    <link type="text/css" href="{{ asset('assets/front/css/media.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="{{ asset('assets/f/css/reset.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/f/css/mediaq.css') }}">
    <link type="text/css" href="{{ asset('assets/front/css/old-style.css') }}" rel="stylesheet"/>

    <link rel="stylesheet" href="{{ asset('assets/f/vendor/swiper/css/swiper.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/f/vendor/slicknav/slicknav.min.css') }}">

    <link type="text/css" href="{{ asset('assets/front/css/iziModal.min.css') }}" rel="stylesheet"/>

    <link href="{{asset('css/components.min.css')}}" rel="stylesheet" type="text/css">

    <script src="{{ asset('assets/front/js/jquery-2.2.0.min.js') }}"></script>
    <script src="https://unpkg.com/echarts/dist/echarts.min.js"></script>
@endsection
@section('scripts')

    <script src="{{ asset('assets/f/vendor/swiper/js/swiper.min.js') }}"></script>
    <script src="{{ asset('assets/f/vendor/slicknav/jquery.slicknav.min.js') }}"></script>
    <script src="{{ asset('assets/f/vendor/jquery.countdown.min.js') }}"></script>
    <script src="{{ asset('assets/f/vendor/elevatezoom.js') }}"></script>
    <script src="{{ asset('assets/f/vendor/persianumber.min.js') }}"></script>
    <script>
        jQuery(function () {
            jQuery.each(window.jQueryQ || [], function (i, a) {
                setTimeout(function () {
                    jQuery.apply(this, a);
                }, 0);
            });
        });

    </script>
    <script src="{{ asset('assets/front/js/plugins.js') }}"></script>
    <script src="{{ asset('assets/f/js/script.js') }}"></script>
    <script src="{{ asset('assets/front/js/custom.js') }}"></script>
    <script src="{{ asset('js/share.js') }}"></script>

    <!-- Chartisan -->
    <script type="text/javascript">
        var bars_basic_element = document.getElementById('bars_basic');
        if (bars_basic_element) {
            var bars_basic = echarts.init(bars_basic_element);
            bars_basic.setOption({
                color: ['#3398DB'],
                tooltip: {
                    trigger: 'axis',
                    axisPointer: {
                        type: 'shadow'
                    }
                },
                grid: {
                    left: '3%',
                    right: '4%',
                    bottom: '3%',
                    containLabel: true
                },
                xAxis: [
                    {
                        type: 'category',
                        data: [
                            @forelse($price as $row)
                            '{{ Verta($row->created_at)->format('%d %B %Y H:i') }}',
                            @empty
                            @endforelse
                        ],
                        axisTick: {
                            alignWithLabel: true
                        }
                    }
                ],
                yAxis: [
                    {
                        type: 'value'
                    }
                ],
                series: [
                    {
                        name: 'قیمت محصول ',
                        type: 'line',
                        barWidth: '10%',
                        data: [
                          @forelse($price as $row)
                          '{{ $row->price }}',
                            @empty'
                            @endforelse
                        ]

                    }
                ]
            });
        }
    </script>

@endsection

