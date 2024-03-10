<!DOCTYPE html>
<html lang="en">
<head>
  @include('web.layout.head')
</head>
<body class="custom-cursor">

    <div class="custom-cursor__cursor"></div>
    <div class="custom-cursor__cursor-two"></div>

  <!-- /.preloader start -->
    <div class="preloader">
        <div class="preloader__image"></div>
    </div>
    <!-- /.preloader end -->


    <div class="page-wrapper">
    <!----header start--->
        <header class="main-header-three">
             <!-------- top header start -------->
            {{-- @include('web.layout.top-header') --}}
             <!----- top header end -------->

             <!------Main navbar start------>
            @include('web.layout.header')
             <!-------- main navbar end -------->
        </header>
    <!----header end--->

        <div class="stricky-header stricked-menu main-menu main-menu-three">
            <div class="sticky-header__content"></div><!-- /.sticky-header__content -->
        </div><!-- /.stricky-header -->

        <!-------------Main content start  --------->
        @yield('body')
        <!-------------Main content end    --------->


        <!--Site Footer Start-->
       @include('web.layout.footer')
        <!--Site Footer End-->


    </div>
    <!-- /.page-wrapper -->


    <!-----Mobile nav start ------>
    @include('web.layout.mobile-nav')
    <!------- Mobile nav end  ---->




    <!-- script  start-->
   @include('web.layout.script')
    <!-- script  end-->
</body>
</html>
