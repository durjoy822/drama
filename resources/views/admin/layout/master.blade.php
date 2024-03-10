<!DOCTYPE html>
<html lang="en">

<!--head section  -->
<head>
    @include('admin.layout.head')
</head>

<body>
<!-- Begin page -->
<div class="wrapper">


    <!-- ========== Topbar Start ========== -->
    @include('admin.layout.navbar')
    <!-- ========== Topbar End ========== -->

    <!-- ========== Left Sidebar Start ========== -->
    @include('admin.layout.leftsidebar')
    <!-- ========== Left Sidebar End ========== -->

    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="content-page">
        <div class="content">

            <!-- Start Content-->
            <div class="container-fluid mt-3">
                @yield('body')
            </div>
            <!-- container -->

        </div>
        <!-- content -->

        <!-- Footer Start -->
       @include('admin.layout.footer')
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Theme Settings -->
    @include('admin.layout.theme-setting')
<!-- Theme Settings -->

<!--------script start------------>
    @include('admin.layout.script')
<!--------script end------------>

{{--<script>var baseURL = {!! json_encode(url('/')) !!}</script>--}}
{{--<script src="{{asset('/')}}admin/assets/js/script.js"></script>--}}
</body>

</html>
