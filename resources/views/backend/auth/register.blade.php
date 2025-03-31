<!DOCTYPE html>
<html lang="en">

<head>
    {{-- Required meta tags --}}
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    <meta http-equiv="content-language" content="en">

    {{-- SEO --}}
    <meta name="description" content="Sara Research, Sara Research, Sara Research, SRDC, SARA Research & Development Center Pvt Ltd">
    <meta name="keywords" content="Sara Research, Sara Research, Sara Research, SRDC, SARA Research & Development Center Pvt Ltd">
    <meta name="author" content="Sara Research, Sara Research, Sara Research, SRDC, SARA Research & Development Center Pvt Ltd">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="content">
    <meta name="csrf-token" id="csrf-token" content="{{ csrf_token() }}">

    {{-- Favicon --}}
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/images/home/favicon.webp') }}" />
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/home/favicon.webp') }}" />
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/images/home/favicon.webp') }}" />

    <!-- Title -->
    <title>SARA Research & Development Center Pvt. Ltd. | Register</title>

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="csrf-param" content="_token">

    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">

    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/font-awesome.css') }}">

    <!-- ico-font-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/icofont.css') }}">

    <!-- Themify icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/themify.css') }}">

    <!-- Flag icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/flag-icon.css') }}">

    <!-- Feather icon-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/feather-icon.css') }}">

    <!-- Bootstrap css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/vendors/bootstrap.css') }}">

    <!-- App css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/style.css') }}">

    <!-- color css-->
    <link id="color" rel="stylesheet" href="{{ asset('backend/assets/css/color-1.css') }}" media="screen">

    <!-- Responsive css-->
    <link rel="stylesheet" type="text/css" href="{{ asset('backend/assets/css/responsive.css') }}">

    <!-- Toaster Message -->
    <script src="{{ asset('toaster/js/jquery.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('toaster/css/toastr.min.css') }}" />
    <script src="{{ asset('toaster/js/toastr.min.js') }}"></script>

</head>

<body>
    <!-- login page start-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 p-0">
                <div class="login-card login-dark">
                    <div>
                        <div style="align-items: center; justify-content: center; display: flex;">
                            <a class="logo text-start" href="{{ route('admin.register.store') }}">
                                <img class="img-fluid for-dark" src="{{ asset('frontend/assets/images/home/logo.webp') }}" alt="looginpage" style="height: 80px; width: 180px;">
                                <img class="img-fluid for-light" src="{{ asset('frontend/assets/images/home/logo.webp') }}" alt="looginpage" style="height: 80px; width: 180px;">
                            </a>
                        </div>
                        <div class="login-main">
                            <form class="theme-form" method="POST" action="{{ route('admin.register.store') }}" aria-label="{{ __('Login') }}" enctype="multipart/form">
                                @csrf

                                <h4>Sign Up to account</h4>
                                <p>Enter your personal details to create account</p>

                                <div class="form-group">
                                    <label class="col-form-label"><b>Username : <span class="text-danger">*</span></b></label>
                                    <input type="text" class="form-control @error('name') is-invalid @enderror" name="name" id="name" value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Enter Username">
                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label"><b>Email Id : <span class="text-danger">*</span></b></label>
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Enter Email Id">
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label"><b>Password : <span class="text-danger">*</span></b></label>
                                    <div class="form-input position-relative">
                                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" autocomplete="password" placeholder="Enter Password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-form-label"><b>Confirm Password : <span class="text-danger">*</span></b></label>
                                    <div class="form-input position-relative">
                                        <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation" autocomplete="password_confirmation" placeholder="Enter Confirm Password">
                                        @error('password_confirmation')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group mb-0">
                                    <button class="btn btn-primary btn-block w-100" type="submit">
                                        <i class="fa fa-sign-in"></i>
                                        <b>{{ __('Register') }}</b>
                                    </button>
                                </div>

                                <p class="mt-4 mb-0 text-center">
                                    Already have an account?
                                    <a class="ms-2" href="{{ route('admin.login') }}">
                                        <b>Sign In</b>
                                    </a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- latest jquery-->
    <script src="{{ asset('backend/assets/js/jquery.min.js') }}"></script>

    <!-- Bootstrap js-->
    <script src="{{ asset('backend/assets/js/bootstrap/bootstrap.bundle.min.js') }}"></script>

    <!-- feather icon js-->
    <script src="{{ asset('backend/assets/js/icons/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('backend/assets/js/icons/feather-icon/feather-icon.js') }}"></script>

    <!-- Sidebar jquery-->
    <script src="{{ asset('backend/assets/js/config.js') }}"></script>

    <!-- Theme js-->
    {{-- <script src="{{ asset('backend/assets/js/script.js') }}"></script> --}}

    <!-- Toaster JS -->
    <script>
        $(document).ready(function () {
            @if (Session::has('success'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                };
                toastr.success("{{ session('success') }}");
            @endif

            @if (Session::has('error'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                };
                toastr.error("{{ session('error') }}");
            @endif

            @if (Session::has('info'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                };
                toastr.info("{{ session('info') }}");
            @endif

            @if (Session::has('warning'))
                toastr.options = {
                    "closeButton": true,
                    "progressBar": true
                };
                toastr.warning("{{ session('warning') }}");
            @endif
        });
    </script>
</body>

</html>
