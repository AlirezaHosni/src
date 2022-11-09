<style>
    @media only screen and (max-width: 480px) {
        .bn_accsi_img_x{
            width : 50px;
            height : 50px;
        }
    }
</style>

<div class="bn_awards">
    <div class="container">
        <div class="row">
            <div class="bn_awards_container">

                <div class="col-md-6 col-md-push-6 col-xs-12">
                    <div class="bn_title bn_awards_title">
                        <h3>افتخـارات و دستاوردها</h3>
                    </div>
                    <div class="bn_ac_container">
                        <ul class="bn_acc_slider">
                            @forelse($honor as $row)
                                <li>
                                    <a href="{{ url('/awards/'.$row->slug) }}">
                                        <div class="bn_accs_item">
                                            <div class="bn_accsi_img "><img class="bn_accsi_img_x"
                                                    src="{{ asset($row->cover) }}" alt="">
                                            </div>
                                            <div class="bn_accsi_content">
                                                <h5>{{ $row->title }}</h5>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                            @empty
                            @endforelse

                        </ul>
                    </div>
                </div>
                <div class="col-md-6 col-md-pull-6 col-xs-12">
                    <div class="bn_title bn_awards_title">
                        <h3>نظرات کاربران</h3>
                    </div>
                    <div class="bn_ac_container">
                        <ul class="bn_acc_slider">
                            @php
                            $coments = \App\Comment::latest()->take(5)->get();
                            @endphp
                            @forelse($coments as $row)
                            <li>
                                <a href="">
                                    <div class="bn_accs_item">

                                        <div class="bn_accsi_content">
                                            <h5> {{ $row->user->username }}</h5>
                                            <p>{{ $row->body }}</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            @empty
                            @endforelse
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</div>
