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

{{-- Title --}}
<title>@yield('title')</title>

{{-- Favicon --}}
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('frontend/assets/images/home/favicon.webp') }}" />
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('frontend/assets/images/home/favicon.webp') }}" />
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('frontend/assets/images/home/favicon.webp') }}" />

<!-- Google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

<!-- Google font-->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

<!-- Font Awesome -->
<link rel="stylesheet" href="{{ asset('backend/assets/css/font-awesome.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">

<!-- ico-font-->
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/icofont.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">

<!-- Themify icon-->
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/themify.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">

<!-- Flag icon-->
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/flag-icon.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">

<!-- Feather icon-->
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/feather-icon.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">

<!-- Plugins css start-->
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/slick.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/slick-theme.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/scrollbar.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">

<!-- Range slider css-->
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/rangeslider/rSlider.min.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/animate.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/prism.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/fullcalender.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/datatables.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">
<!-- Plugins css Ends-->

<!-- Bootstrap css-->
<link rel="stylesheet" href="{{ asset('backend/assets/css/vendors/bootstrap.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">

<!-- App css-->
<link rel="stylesheet" href="{{ asset('backend/assets/css/style.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">
<link id="color" rel="stylesheet" href="{{ asset('backend/assets/css/color-1.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">

<!-- Responsive css-->
<link rel="stylesheet" href="{{ asset('backend/assets/css/responsive.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'">

<!-- Select2 -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" type="text/css" media="all" onload="if(media!='all')media='all'" />

<!-- Summernot CSS -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.9.0/dist/summernote.min.css" rel="stylesheet" type="text/css" media="all" onload="if(media!='all')media='all'" />

<!-- Toaster Message -->
<script src="{{ asset('toaster/js/jquery.min.js') }}" defer></script>
<link rel="stylesheet" href="{{ asset('toaster/css/toastr.min.css') }}" type="text/css" media="all" onload="if(media!='all')media='all'" />
<script src="{{ asset('toaster/js/toastr.min.js') }}" defer></script>
