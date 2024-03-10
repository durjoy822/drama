<div class="leftside-menu">

    <!-- Logo Light -->
    <a href="{{route('dashboard')}}" class="logo logo-light">
                <span class="logo-lg">
                    <img src="{{asset('/')}}admin/assets/images/logo.png" alt="logo" height="22">
                </span>
        <span class="logo-sm">
                    <img src="{{asset('/')}}admin/assets/images/logo-sm.png" alt="small logo" height="22">
                </span>
    </a>

    <!-- Logo Dark -->
    <a href="{{route('dashboard')}}" class="logo logo-dark">
                <span class="logo-lg">
                    <img src="{{asset('/')}}admin/assets/images/logo-dark.png" alt="dark logo" height="22">
                </span>
        <span class="logo-sm">
                    <img src="{{asset('/')}}admin/assets/images/logo-dark-sm.png" alt="small logo" height="22">
                </span>
    </a>

    <!-- Sidebar Hover Menu Toggle Button -->
    <button type="button" class="btn button-sm-hover p-0" data-bs-toggle="tooltip" data-bs-placement="right" title="Show Full Sidebar">
        <i class="ri-checkbox-blank-circle-line align-middle"></i>
    </button>

    <!-- Sidebar -left -->
    <div class="h-100" id="leftside-menu-container" data-simplebar>
        <!-- Leftbar User -->
        <div class="leftbar-user">
            <a href="pages-profile.html">
                <img src="{{asset('/')}}admin/assets/images/users/avatar-1.jpg" alt="user-image" height="42"
                     class="rounded-circle shadow-sm">
                <span class="leftbar-user-name">Dominic Keller</span>
            </a>
        </div>

        <!--- Sidemenu -->
        <ul class="side-nav">

            <li class="side-nav-title side-nav-item">Navigation</li>
            <!---Dashboard---->
            <li class="side-nav-item">
                <a href="{{route('dashboard')}}" class="side-nav-link">
                    <i class="uil-home-alt"></i>
                    <span> Dashboards </span>
                </a>
            </li>
            <!---User Module--->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarEcommerce" aria-expanded="false"
                   aria-controls="sidebarEcommerce" class="side-nav-link">
                   <i class="fa-solid fa-user-large"></i>
                    <span> User Module </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarEcommerce">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('role.add')}}">Add Role</a>
                        </li>
                        <li>
                            <a href="{{route('role.manage')}}">Manage Role</a>
                        </li>
                        <li>
                            <a href="{{route('user.add')}}">Add User</a>
                        </li>
                        <li>
                            <a href="{{route('user.manage')}}">Manage User</a>
                        </li>
                    </ul>
                </div>
            </li>
             <!---Drama Module--->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#drama" aria-expanded="false"
                   aria-controls="drama" class="side-nav-link">
                   <i class="fa-solid fa-qrcode"></i>
                    <span> Drama </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="drama">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('dramas.create')}}">Add Drama</a>
                        </li>
                        <li>
                            <a href="{{route('dramas.index')}}">Manage Drama</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--Team Module-->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#team" aria-expanded="false"
                   aria-controls="team" class="side-nav-link">
                   <i class="fa-solid fa-users-rays"></i>
                    <span> Team </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="team">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('teams.create')}}">Add Member</a>
                        </li>
                        <li>
                            <a href="{{route('teams.index')}}">Manage Member</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--Statement Module-->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#statement" aria-expanded="false"
                   aria-controls="statement" class="side-nav-link">
                   <i class="fa-brands fa-wpforms"></i>
                    <span> Statement </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="statement">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('statements.create')}}">Add Statement</a>
                        </li>
                        <li>
                            <a href="{{route('statements.index')}}">Manage Statement</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--Performer Module-->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#performer" aria-expanded="false"
                   aria-controls="performer" class="side-nav-link">
                   <i class="fa-brands fa-buromobelexperte"></i>
                    <span> Performer </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="performer">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('performers.create')}}">Add Performer</a>
                        </li>
                        <li>
                            <a href="{{route('performers.index')}}">Manage Performer</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--newsletter Module-->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#newsletter" aria-expanded="false"
                   aria-controls="newsletter" class="side-nav-link">
                   <i class="fa-brands fa-firstdraft"></i>
                    <span> Newsletters </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="newsletter">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('newsletters.index')}}">Manage Newsletter</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--About Module-->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#about" aria-expanded="false"
                   aria-controls="about" class="side-nav-link">
                   <i class="fa-brands fa-codepen"></i>
                    <span> About Prangonemor </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="about">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('abouts.create')}}">Add Prangonemor</a>
                        </li>
                        <li>
                            <a href="{{route('abouts.index')}}">Manage Prangonemor</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--Contact Module-->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#contact" aria-expanded="false"
                   aria-controls="contact" class="side-nav-link">
                    {{-- <i class="uil-store"></i> --}}
                    <i class="fa-solid fa-signal"></i>
                    <span> Contacts </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="contact">
                    <ul class="side-nav-second-level">
                        {{-- <li>
                            <a href="{{route('contacts.create')}}">Add Contact</a>
                        </li> --}}
                        <li>
                            <a href="{{route('contacts.index')}}">Manage Contact</a>
                        </li>
                    </ul>
                </div>
            </li>
            <!--Settings Module-->
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#setting" aria-expanded="false"
                   aria-controls="setting" class="side-nav-link">
                   <i class="fa-solid fa-gear"></i>
                    <span>General  Settings </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="setting">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{route('settings.index')}}">Settings</a>
                        </li>
                        <li>
                            <a href="{{route('optimize.manage')}}">Optimize</a>
                        </li>
                        <li>
                            <a href="{{route('headers.index')}}">Page header Settings</a>
                        </li>
                        <li>
                            <a href="{{route('messages.index')}}">Contact message</a>
                        </li>
                        <li>
                            <a href="{{route('sliders.index')}}">Slider Manage</a>
                        </li>
                    </ul>
                </div>
            </li>
        </ul>
        <!--- End Sidemenu -->
        <div class="clearfix"></div>
    </div>
</div>
