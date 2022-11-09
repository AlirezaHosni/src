@extends('sellers.layouts.design')
@section('content')
    <div class="content-inner">
        <div class="container-fluid">
            <!-- Begin Page Header-->
            <div class="row">
                <div class="page-header">
                    <div class="d-flex align-items-center">
                        <h2 class="page-header-title">نمایش نمودار حجم خرید</h2>
                        <div>
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/"><i class="ti ti-home"></i></a></li>
                                <li class="breadcrumb-item active">نمایش نمودار حجم خرید</li>
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
                    <div class="container">
                        <div class="col-md-12">

                        <div class="card">
                            <div class="card-body">
                                <div class="chart-container">
                                    <div class="chart has-fixed-height" id="bars_basic"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </div>


            <!-- End Row -->
        </div>
    </div>
@endsection
@section('scripts')
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
                       
                        '{{ Verta($marks->agree_start)->format('%d %B %Y H:i') }}',
                        
                       
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
                    name: 'حجم خرید   ',
                    type: 'line',
                    barWidth: '10%',
                    data: [
                       
                        '{!! $h !!}',
                         
                    ]

                }
            ]
        });
    }
</script>
@endsection
