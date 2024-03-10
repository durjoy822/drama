<!DOCTYPE html>
<html lang="en">



<head>
    <meta charset="utf-8" />
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Coderthemes" name="author" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{asset('/')}}admin/assets/images/favicon.ico">

    <!-- Theme Config Js -->
    <script src="{{asset('/')}}admin/assets/js/hyper-config.js"></script>

    <!-- App css -->
    <link href="{{asset('/')}}admin/assets/css/app-saas.min.css" rel="stylesheet" type="text/css" id="app-style" />

    <!-- Icons css -->
    <link href="{{asset('/')}}admin/assets/css/icons.min.css" rel="stylesheet" type="text/css" />
</head>

<body class="authentication-bg">
<div class="account-pages pt-2 pt-sm-5 pb-4 pb-sm-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xxl-4 col-lg-5">
                <div class="card">

                    <!-- Logo -->
                    <div class="card-header pt-4 pb-4 text-center bg-primary">
                        <a href="">
                            <span><img src="{{asset('/')}}admin/assets/images/logo.png" alt="logo" height="22"></span>
                        </a>
                    </div>

                    <div class="card-body p-4">

                        <div class="text-center w-75 m-auto">
                            <p class="text-muted mb-4">Enter your name, email address and password to register for new user .</p>
                        </div>

                        <form method="POST" action="{{ route('register') }}" >
                            @csrf
                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Name</label>
                                <input class="form-control" type="text" id="emailaddress" required="" name="name" value="{{old('name')}}"  placeholder="Enter your name">
                                <div class="text-danger mt-1">@error('name') {{$message}}  @enderror</div>
                            </div>

                            <div class="mb-3">
                                <label for="emailaddress" class="form-label">Email address</label>
                                <input class="form-control" type="email" id="emailaddress" required="" name="email" value="{{old('email')}}" placeholder="Enter your email">
                                <div class="text-danger mt-1">@error('email') {{$message}}  @enderror</div>
                            </div>

                            <div class="mb-3">
                                <label for="password" class="form-label">Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password" placeholder="Enter your password"/>
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                                <div class="text-danger mt-1">@error('password') {{$message}}  @enderror</div>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label">Confirm Password</label>
                                <div class="input-group input-group-merge">
                                    <input type="password" id="password" class="form-control" name="password_confirmation" placeholder="Enter confirm password"/>
                                    <div class="input-group-text" data-password="false">
                                        <span class="password-eye"></span>
                                    </div>
                                </div>
                                <div class="text-danger mt-1">@error('password_confirmation') {{$message}}  @enderror</div>
                            </div>

                            <div class="mb-3 mb-0 text-center">
                                <button class="btn btn-primary" type="submit">Register  </button>
                            </div>
                        </form>
                    </div> <!-- end card-body -->
                </div>
                <!-- end card -->
            </div> <!-- end col -->
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</div>
<!-- end page -->
<!-- Vendor js -->
<script src="{{asset('/')}}admin/assets/js/vendor.min.js"></script>
<!-- App js -->
<script src="{{asset('/')}}admin/assets/js/app.min.js"></script>
</body>
</html>
