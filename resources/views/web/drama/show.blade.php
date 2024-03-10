@extends('web.layout.master')
@section('title')
All Show
@endsection
@section('body')
<style>
    .img{
        height: 300px;
    }
</style>
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
                <li>All show</li>
            </ul>
            <h2>All show</h2>
        </div>
    </div>
</section>
<!---upcoming show--->
{{-- @if ($dramas->count()>0) --}}
<section class="upcoming my-5">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Our Upcomin Show</h2>
            <hr/>
        </div>
        <div class="row">
            @foreach ($dramas as $drama)
            @if ($drama->drama_status==1)
                <!--Entertainment Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="entertainment__single">
                        <div class="entertainment__img">
                            <img class="img" src="{{asset( $drama->dramaDetail->image)}}" alt="">
                            <div class="entertainment__hover-box">
                                <p class="entertainment__hover-text">{{$drama->created_at->format('l jS \o\f F Y'), "\n"}}
                                    {{-- <span>6.5</span> --}}
                                 </p>
                                <h3 class="entertainment__hover-title"><a href="{{route('drama.details',$drama->id)}}">{{$drama->title}}</a></h3>
                                <div class="entertainment__video-link">
                                    <a href="{{$drama->video_link}}" class="video-popup">
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
                @endif
                @endforeach
        </div>
    </div>
</section>
{{-- @endif --}}
<!---Now Showing-->
<section class=" my-5">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Now Showing </h2>
            <hr/>
        </div>
        <div class="row">
            @foreach ($dramas as $drama)
            @if ($drama->drama_status==3)
                <!--Entertainment Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="entertainment__single">
                        <div class="entertainment__img">
                            <img class="img" src="{{asset( $drama->dramaDetail->image)}}" alt="">
                            <div class="entertainment__hover-box">
                                <p class="entertainment__hover-text">{{$drama->created_at->format('l jS \o\f F Y'), "\n"}}
                                    {{-- <span>6.5</span> --}}
                                 </p>
                                <h3 class="entertainment__hover-title"><a href="{{route('drama.details',$drama->id)}}">{{$drama->title}}</a></h3>
                                <div class="entertainment__video-link">
                                    <a href="{{$drama->video_link}}" class="video-popup">
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
                @endif
                @endforeach
        </div>
    </div>
</section>
<!---complete  show-->
<section class=" my-5">
    <div class="container">
        <div class="section-title text-center">
            <h2 class="section-title__title">Complete Show</h2>
            <hr/>
        </div>
        <div class="row">
            @foreach ($dramas as $drama)
            @if ($drama->drama_status==4)
                <!--Entertainment Single Start-->
                <div class="col-xl-6 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                    <div class="entertainment__single">
                        <div class="entertainment__img">
                            <img class="img" src="{{asset( $drama->dramaDetail->image)}}" alt="">
                            <div class="entertainment__hover-box">
                                <p class="entertainment__hover-text">{{$drama->created_at->format('l jS \o\f F Y'), "\n"}}
                                    {{-- <span>6.5</span> --}}
                                </p>
                                <h3 class="entertainment__hover-title"><a href="{{route('drama.details',$drama->id)}}">{{$drama->title}}</a></h3>
                                <div class="entertainment__video-link">
                                    <a href="{{$drama->video_link}}" class="video-popup">
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
                @endif
                @endforeach
        </div>
    </div>
</section>
@endsection

