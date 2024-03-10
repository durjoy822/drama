<nav class="main-menu main-menu-three">
    <div class="container">
        <div class="main-menu-three__wrapper-inner clearfix">
            <div class="main-menu-three__left">
                <div class="main-menu-three__logo">
                    <a href="{{route('home')}}"><img src="{{asset($setting->white_logo)}}" alt="logo" width="140"
                                                     height="48"></a>
                </div>
            </div>
            <div class="main-menu-three__right">
                <div class="main-menu-three__right-inner">
                    <div class="main-menu-three__main-menu-box">
                        <a href="#" class="mobile-nav__toggler"><i class="fa fa-bars"></i></a>
                        <ul class="main-menu__list">
                            <li class="dropdown current megamenu"> <a href="{{route('home')}}">Home </a></li>
                            <li class="dropdown"> <a href="{{route('statement')}}">Statement</a> </li>
                            <li class="dropdown">
                                <a href="{{route('about')}}" class="dropdown-toggle">About Prangonemor</a>
                                <ul class="shadow-box">
                                    <li><a href="{{route('founder')}}">Founder</a></li>
                                    <li><a href="{{route('teams')}}">Team</a></li>
                                    <li><a href="{{route('contact')}}">Work With Prangonemor</a></li>
                                </ul>
                            </li>

                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Productions</a>
                                <ul class="shadow-box">
                                    <li><a href="{{route('show')}}">All Show</a></li>
                                    <li><a href="{{route('single.show',1)}}">Upcoming Show</a></li>
                                    <li><a href="{{route('single.show',2)}}">Upcoming Production</a></li>
                                    <li><a href="{{route('single.show',3)}}">Now Showing</a></li>
                                    <li><a href="{{route('single.show',4)}}">Complete Show</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle">Festivals</a>
                                <ul class="shadow-box">
                                    <li><a href="">Karnaphuli Natya Utshob 2010</a></li>
                                    <li><a href="">Dui Banglar Rabindra Natya Mela 2011</a></li>
                                    <li><a href="">Jago Bahe Konthe Sobai 2013</a></li>
                                    <li><a href="">Prangonemor Natya Aojon 2013</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#">Workshops</a>
                            </li>
                            <li>
                                <a href="{{route('contact')}}">Contact</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>
