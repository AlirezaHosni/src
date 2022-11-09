<?php
$sideone = \App\Promte::where('type','sidesliderone')->first();
$sidetwo = \App\Promte::where('type','sideslidertwo')->first();
    ?>
@if(!@empty($sideone) && !@empty($sidetwo))
    <div class="col-md-3 col-xs-12">
        <ul class="bn_banner_side">

            <li><a target="_blank" href="{{ url($sideone->url??'') }}"><img
                        src="{{ asset($sideone->path) }}" alt=""></a></li>

            <li><a target="_blank" href="{{ url($sidetwo->url??'') }}"><img
                        src="{{ asset($sidetwo->path) }}" alt=""></a></li>
        </ul>
    </div>
@else
    <div class="col-md-3 col-xs-12">
        <ul class="bn_banner_side">

            <li><a href=""><img
                        src="{{ asset('assets/ps6782.jpg') }}" alt=""></a></li>

            <li><a href=""><img
                        src="{{ asset('assets/ps6782.jpg') }}" alt=""></a></li>
        </ul>
    </div>
@endif
