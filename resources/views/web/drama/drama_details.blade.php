<!----------------drama details page --------------->
@extends('web.layout.master')
@section('title')
Details
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
                <li>SHEYMAPREM</li>
            </ul>
            <h2>SHEYMAPREM</h2>
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
                    <div class="card mb-3 py-5">
                        <div class="row">
                            <div class="col">
                                <figure class="text-center">
                                    <blockquote class="blockquote">
                                        <h1 class="display-5">{{$drama->title}}</h1>
                                    </blockquote>
                                </figure>
                            </div>
                        </div>

                        {{-- <hr class="py-3 my-5"/> --}}
                            @foreach ($drama_details as $index=>$drama_detail)
                            @if($index % 2 == 0)
                            <hr class="py-3 my-5"/>
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="{{asset($drama_detail->image)}}" class="img-fluid h-100" alt="..."/>
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text" style="text-align: justify">
                                            {!!$drama_detail->description!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            @else
                            <hr class="py-3 my-5"/>
                            <div class="row g-0">
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <p class="card-text" style="text-align: justify">
                                            {!!$drama_detail->description!!}
                                        </p>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <img src="{{asset($drama_detail->image)}}" class="img-fluid h-100" alt="..."/>
                                </div>
                            </div>
                            @endif
                            @endforeach
                        <hr class="py-3 my-5"/>
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="{{asset($drama->dramaDetail->image)}}" class="img-fluid h-100" alt="..."/>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <p class="card-text" style="text-align: justify">
                                        Cast and Crew list(Total Member:{{$performers->count()}} ) :
                                    </p>
                                    <table class="table table-bordered table-hover">
                                        <thead>
                                        <tr>
                                            {{-- <th scope="col">#</th> --}}
                                            <th scope="col">Performer</th>
                                            <th scope="col">Character</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($performers as $index=> $performer )
                                            @if($performer->position==1)
                                            <tr>
                                                {{-- <th scope="row">{{$index +1}}</th> --}}
                                                <td style="width: 68%">{{$performer->name}}</td>
                                                <td class="w-25">{{$performer->character}}</td>
                                            </tr>
                                            @endif
                                            @endforeach

                                        </tbody>
                                    </table>
                                    <p class="card-text" style="text-align: justify">
                                        Back  Stage :
                                    </p>
                                    <table class="table table-bordered table-hover">
                                        <tbody>
                                            @foreach ($performers as $index=>$performer)
                                            @if ($performer->position==0)
                                            <tr>
                                                {{-- <th scope="row">{{$index +1}}</th> --}}
                                                <td style="width: 68%;">{{$performer->name}}</td>
                                                <td class="w-25">{{$performer->character}}</td>
                                            </tr>
                                            @endif
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            </div>
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
