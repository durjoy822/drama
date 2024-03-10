@extends('web.layout.master')
@section('title')
Statement
@endsection
@section('body')
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
                <li><a href="{{route('home')}}">Home</a></li>
                <li><span>//</span></li>
                <li>Statement</li>
            </ul>
            <h2>Statement</h2>
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
                    <div class="card card-body bg-transparent shadow border-0 p-4" style="text-align: justify;">
                        <div class="free-access__inner">
                            <h2 class="free-access__title text-muted"> <span class="pb-3">Statement</span></h2>
                        </div>
                        <p>
                            {!!$statement->statement!!}
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
