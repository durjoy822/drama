@include('web.layout.top-header')
@extends('web.layout.master')
@section('title')
Home page
@endsection
@section('body')
<style>
    .img{
        height: 300px;
    }

</style>
     <!--Main Slider Start-->
        <section class="main-slider-three clearfix">
            <div class="swiper-container thm-swiper__slider" data-swiper-options='{"slidesPerView": 1, "loop": true,
                "effect": "fade",
                "pagination": {
                "el": "#main-slider-pagination",
                "type": "bullets",
                "clickable": true
                },
                "navigation": {
                "nextEl": "#main-slider__swiper-button-next",
                "prevEl": "#main-slider__swiper-button-prev"
                },
                "autoplay": {
                "delay": 5000
                }}'>
                <div class="swiper-wrapper">
                    @foreach ($dramas as $drama)
                        @foreach ($sliders as $slider )
                        @if ($slider->slider_type==$drama->drama_status)
                        <div class="swiper-slide">
                            <div class="image-layer-three"
                                style="background-image: url({{asset($drama->dramaDetail->image)}});"></div>
                            <!-- /.image-layer -->

                            <div class="container">
                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="main-slider-three__content">
                                            <h2 class="main-slider-three__title">{{$drama->title}}</h2>
                                            <div class="main-slider-three__btn-box">
                                                <a href="{{route('show')}}" class="thm-btn main-slider__btn"> Discover more</a>
                                            </div>
                                            <div class="main-slider-three__shape-1">
                                                <img src="{{asset('web')}}/assets/images/shapes/main-slider-three-shape-2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    @endforeach

                    {{-- <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url({{asset('web')}}/assets/images/backgrounds/main-slider-3-2.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <h2 class="main-slider-three__title">Droho Prem Nari</h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="" class="thm-btn main-slider__btn"> Discover more</a>
                                        </div>
                                        <div class="main-slider-three__shape-1">
                                            <img src="{{asset('web')}}/assets/images/shapes/main-slider-three-shape-2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <div class="image-layer-three"
                            style="background-image: url({{asset('web')}}/assets/images/backgrounds/main-slider-3-3.jpg);"></div>
                        <!-- /.image-layer -->

                        <div class="container">
                            <div class="row">
                                <div class="col-xl-12">
                                    <div class="main-slider-three__content">
                                        <h2 class="main-slider-three__title">Raktakarabi</h2>
                                        <div class="main-slider-three__btn-box">
                                            <a href="" class="thm-btn main-slider__btn"> Discover more</a>
                                        </div>
                                        <div class="main-slider-three__shape-1">
                                            <img src="{{asset('web')}}/assets/images/shapes/main-slider-three-shape-2.png" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}

                </div>

                <!-- If we need navigation buttons -->
                <div class="main-slider-three__nav">
                    <div class="swiper-button-prev" id="main-slider__swiper-button-next">
                        <i class="icon-left-arrow"></i>
                    </div>
                    <div class="swiper-button-next" id="main-slider__swiper-button-prev">
                        <i class="icon-right-arrow1"></i>
                    </div>
                </div>

            </div>
        </section>
        <!--Main Slider End-->


        <!--About Two Start-->
        <section class="about-two">
            <div class="container">
                <div class="row">
                    <div class="col-xl-6">
                        <div class="about-two__left">
                            <div class="section-title text-left">
                                <h2 class="section-title__title">About Prangonemor</h2>
                            </div>

                            <p class="mb-1">
                                {!!$about->details!!}
                            </p>
                            <a href="{{route('show')}}" class="thm-btn about-two__btn">Discover more</a>
                        </div>
                    </div>
                    <div class="col-xl-6">
                        <div class="about-two__right">
                            <div class="about-two__img-box wow slideInRight" data-wow-delay="100ms"
                                data-wow-duration="2500ms">
                                <div class="about-two__img">
                                    <img src="{{asset($about->image)}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Two End-->
        <!--Entertainment Start-->
        <section class="entertainment">
            <div class="entertainment-shape-bg"
                style="background-image: url({{asset('web')}}/assets/images/shapes/entertainment-shape-bg.png);"></div>
            <div class="container">
                <div class="section-title text-center">
                    <h2 class="section-title__title">Our Upcomin Show</h2>
					<hr/>
                </div>
                <div class="row">
                    <!--Entertainment Single Start-->
                    @if ($upcomings->count())
                    @foreach ($upcomings as $upcoming )
                    <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="entertainment__single">
                            <div class="entertainment__img">
                                <img class="img" src="{{asset($upcoming->dramaDetail->image)}}" alt="">
                                <div class="entertainment__hover-box">
                                    <p class="entertainment__hover-text">{{$upcoming->created_at->format('l jS \o\f F Y'), "\n"}}
                                        {{-- <i class="fa fa-star"></i>
                                        <span>6.5</span> --}}
                                     </p>
                                    <h3 class="entertainment__hover-title"><a href="{{route('drama.details',$upcoming->id)}}">{{$upcoming->title}}</a></h3>
                                    <div class="entertainment__video-link">
                                        <a href="{{$upcoming->video_link}}" class="video-popup">
                                            <div class="entertainment__video-icon">
                                                <span class="fa fa-play"></span>
                                                <i class="ripple"></i>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Entertainment Single End-->
                    @endforeach
                    @else
                    <p class="text-white text-center">Right now upcoming show is not available. coming soon.</p>
                    @endif

                </div>
            </div>
        </section>
        <!--Entertainment End-->

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
                        <form class="service-available__form" method="POST" action="{{route('newsletters.store')}}">
                            @csrf
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
