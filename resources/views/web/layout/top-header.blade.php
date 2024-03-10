 <div class="main-header-three__top con">
                <div class="main-header-three__top-inner container px-4">
                    <div class="main-header-three__top-left">
                        <ul class="list-unstyled main-menu-three__contact-list">
                            <li>
                                <div class="icon">
                                    <i class="fas fa-phone-alt"></i>
                                </div>
                                <div class="text">
                                    <p>(+88){{$contact->phone}}</p>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="text">
                                    <p><a >{{$contact->email}}</a></p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="main-header-three__top-right">
                        <div class="main-menu-three__social">
                            <a href="{{$setting->twitter}}" terget="_blank"><i class="fab fa-twitter"></i></a>
                            <a href="{{$setting->facebook}}" terget="_blank"><i class="fab fa-facebook"></i></a>
                            <a href="{{$setting->pinterest}}" terget="_blank"><i class="fab fa-pinterest-p"></i></a>
                            <a href="{{$setting->instagram}}" terget="_blank"><i class="fab fa-instagram"></i></a>
                        </div>
                    </div>
                </div>
            </div>
