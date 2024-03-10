@extends('web.layout.master')
@section('title')
Teams
@endsection
@section('body')
<!--page  header -->
<section class="page-header">
    @if($header && $header->image)
        <div class="page-header-bg" style="background-image: url({{ asset($header->image) }})">
    @else
        <div class="page-header-bg" style="background-image: url({{ asset('web/assets/images/backgrounds/page-header-bg.jpg') }})">
    @endif
    </div>

    <div class="main-slider-border"></div>
    <div class="main-slider-border main-slider-border-two"></div>
    <div class="main-slider-border main-slider-border-three"></div>
    <div class="main-slider-border main-slider-border-four"></div>
    <div class="main-slider-border main-slider-border-five"></div>
    <div class="main-slider-border main-slider-border-six"></div>
    <div class="container">
        <div class="page-header__inner">
            <ul class="thm-breadcrumb list-unstyled">
                <li><a href="index.html">Home</a></li>
                <li><span>//</span></li>
                <li>Team</li>
            </ul>
            <h2>Team</h2>
        </div>
    </div>
</section>


<section class="services-one">
    <div class="services-one-shape-1 float-bob-x">
        <img src="{{asset('web')}}/assets/images/shapes/services-one-shape-1.png" alt="">
    </div>
    <div class="services-one-shape-2 float-bob-y">
        <img src="{{asset('web')}}/assets/images/shapes/services-one-shape-2.png" alt="">
    </div>
    <div class="container">
        <div class="services-one__top">
            <div class="row">
                <div class="col">
                    <div class="card card-body bg-transparent border-0 p-4" style="text-align: justify;">
                        <div class="free-access__inner">
                            <h2 class="free-access__title text-muted"> <span class="pb-3"> Meet our professional </span></h2>
                        </div>
                        <div class="row mt-4">
                            <!--Team One Single Start-->
                            @foreach ($teams as $team)
                            <div class="col-md-4">
                                <div class="team-one__single">
                                    <div class="team-one__img">
                                        <img src="{{asset($team->image)}}" alt="">
                                        <div class="team-one__content">
                                            <h4 class="team-one__name"><a href="#" >{{$team->name}}</a></h4>
                                            <p class="team-one__sub-title">
                                                @if ($team->member_type==1)
                                                Founder
                                                @elseif ($team->member_type==2)
                                                Primary Member
                                                @elseif ($team->member_type==3)
                                                Permanent Member
                                                @elseif ($team->member_type==4)
                                                Associate Member
                                                @endif
                                        </p>
                                        </div>
                                        <ul class="list-unstyled team-one__social">
                                            <li><a href="{{$team->twitter}}" target="blank"><i class="fab fa-twitter"></i></a></li>
                                            <li><a href="{{$team->facebook}}" target="blank"><i class="fab fa-facebook"></i></a></li>
                                            <li><a href="{{$team->instagram}}" target="blank"><i class="fab fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!--Team One Single End-->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Newsletter Start-->
<section class="service-available service-available-two">
    <div class="container">
        <div class="service-available__inne">
            <div class="service-available__shape-1 float-bob-y">
                <img src="{{asset('web')}}/assets/images/shapes/service-available-shape-1.png" alt="">
            </div>
            <div class="service-available__shape-2 float-bob-x">
                <img src="{{asset('web')}}/assets/images/shapes/service-available-shape-2.png" alt="">
            </div>
            <div class="service-available__shape-3 float-bob-y">
                <img src="{{asset('web')}}/assets/images/shapes/service-available-shape-3.png" alt="">
            </div>
            <div class="service-available__shape-4 float-bob-x">
                <img src="{{asset('web')}}/assets/images/shapes/service-available-shape-4.png" alt="">
            </div>
            <div class="service-available__left">
                <h3 class="service-available__title">Check ability to connect our <br>
                    show in your area</h3>
            </div>
            <div class="service-available__right">
                <form class="service-available__form" method="POST" action="">
                    <div class="service-available__input-box">
                        <input type="text" placeholder="Enter address" name="address">
                        <button type="submit" class="service-available__btn thm-btn">Check availability</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!--Newsletter End-->
@endsection
