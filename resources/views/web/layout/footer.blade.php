 <footer class="site-footer">
            <div class="site-footer-shape-bg"
                style="background-image: url({{asset('web')}}/assets/images/shapes/site-footer-shape-bg.png);"></div>
            <div class="container">
                <div class="site-footer__top">
                    <div class="row">
                        <div class="col-xl-4 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="100ms">
                            <div class="footer-widget__column footer-widget__about">
                                <div class="footer-widget__about-text-box">
                                    <p class="footer-widget__about-text">{{$setting->app_name}}</p>
                                </div>
                                <div class="site-footer__social">
                                    <a href="{{$setting->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a>
                                    <a href="{{$setting->facebook}}" target="_blank"><i class="fab fa-facebook"></i></a>
                                    <a href="{{$setting->pinterest}}" terget="_blank"><i class="fab fa-pinterest-p"></i></a>
                                    <a href="{{$setting->instagram}}" terget="_blank"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-2 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="200ms">
                            <div class="footer-widget__column footer-widget__links clearfix">
                                <h3 class="footer-widget__title">Links</h3>
                                <ul class="footer-widget__links-list list-unstyled clearfix">
                                    <li><a href="{{route('about')}}">About Prangonemor</a></li>
                                    <li><a href="{{route('statement')}}">Statement</a></li>
                                    <li><a href="{{route('contact')}}">Contact</a></li>
                                    <li><a href="packages-01.html">Our Show</a></li>
                                    <li><a href="news.html">Press Media</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="300ms">
                            <div class="footer-widget__column footer-widget__meet-us clearfix">
                                <h3 class="footer-widget__title">Meet us</h3>
                                <p class="ooter-widget__meet-us-text">{{$contact->address}}<br> {{$setting->state}} <br> {{$setting->country}}</p>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay="400ms">
                            <div class="footer-widget__column footer-widget__contact">
                                <h3 class="footer-widget__title">Say Hello!</h3>
                                <ul class="list-unstyled footer-widget__contact-list">
                                    <li>
                                        <div class="text">
                                            <p><a href="mailto:needhelp@company.com ">
                                               {{$setting->email}}
                                            </a></p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="text">
                                            <p><a href="tel:{{$contact->phone}}">(+88) {{$contact->phone}}</a></p>
                                            <p><a href="tel:{{$contact->telephone}}">(+88) {{$contact->telephone}}</a></p>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="site-footer__bottom">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="site-footer__bottom-inner">
                                <p class="site-footer__bottom-text">© All Copyright 2022 by <a href="{{route('home')}}">{{$setting->copyright}} </a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
