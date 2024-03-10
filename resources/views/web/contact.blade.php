@extends('web.layout.master')
@section('title')
Contact
@endsection
@section('body')
<style>
    .error {
        color: rgb(237, 80, 80);
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
                <li>Contact</li>
            </ul>
            <h2>Contact</h2>
        </div>
    </div>
</section>

<!--Contact Page Start-->
<section class="contact-page">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-6">
                <div class="contact-page__left">
                    <div class="section-title text-left">
                        <span class="section-title__tagline">contact with us</span>
                        <h2 class="section-title__title">Ready to get in touch
                            with Prangonemor</h2>
                    </div>
                    <ul class="list-unstyled contact-page__contact-list">
                        <li>
                            <div class="icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="content">
                                <p>Have any question?</p>
                                <h4><a href="tel:8898006802">Free(+88) {{$contact->phone}}</a></h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-phone-call"></span>
                            </div>
                            <div class="content">
                                <p>Have any question?</p>
                                <h4><a href="tel:8898006802">Free (+88) {{$contact->telephone}}</a></h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-message"></span>
                            </div>
                            <div class="content">
                                <p>Write email</p>
                                <h4><a href="mailto:needhelp@company.com">{{$contact->email}}</a></h4>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <span class="icon-placeholder"></span>
                            </div>
                            <div class="content">
                                <p>Visit anytime</p>
                                <h4>{{$contact->address}}</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6">
                @if( Session::get('success'))
                  <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>{{ Session::get('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                  </div>
                  @endif
                <div class="contact-page__right">
                    <div class="contact-page__content">
                        <div class="contact-page__content-inner">
                            <div class="contact-page-shape-1 float-bob-x">
                                <img src="{{asset('web')}}/assets/images/shapes/contact-page-shape-1.png" alt="">
                            </div>
                            <div class="section-title text-left">
                                <span class="section-title__tagline">contact us</span>
                                <h2 class="section-title__title">Write a message</h2>
                            </div>
                            <form action="{{route('messages.store')}}" method="POST" id="messageForm" >
                                  @csrf

                                <div class="row">
                                    <div class="col-xl-12">
                                        <div class="contact-page__form-input-box">
                                            <input type="text" id="name" placeholder="Your name" name="name">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__form-input-box">
                                            <input type="email" id="email" placeholder="Email address" name="email">
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="contact-page__form-input-box">
                                            <input type="text" id="phone" placeholder="Phone number" name="phone">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-12">
                                    <div class="contact-page__form-input-box text-message-box">
                                        <textarea name="message"  placeholder="Write a message"></textarea>
                                    </div>
                                    <div class="contact-page__btn-box">
                                        <button type="submit" class="thm-btn contact-page__btn  mt-3">Send a
                                            message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Contact Page End-->

<!--Google Map Start-->
<section class="google-map">
    <iframe src="{{$contact->map}}" width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

</section>
<!--Google Map End-->

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



<!-- Form rules script -->
<script>
    $(document).ready(function () {
        $("#messageForm").validate({
            rules: {
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                phone: "required",
                message: "required"
            },
            messages: {
                name: "Please enter your name",
                email: {
                    required: "Please enter your email address",
                    email: "Please enter a valid email address"
                },
                phone: "Please enter your phone number",
                message: "Please enter your message"
            },
            errorClass: "error",
            submitHandler: function (form) {
                form.submit();
            }
        });
    });
</script>

@endsection
