<!DOCTYPE html>
<html lang="ar">

<head>
  <meta charset="utf-8">
  {{-- <meta content="width=device-width, initial-scale=1.0" name="viewport"> --}}

  {{-- <title>BizLand Bootstrap Template - Index</title> --}}
  <title>@yield('title')</title>
  {{-- <meta content="" name="description">
<meta content="" name="keywords"> --}}

{{-- <!-- Favicons -->
<link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
<link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon"> --}}

<!-- Google Fonts -->
{{-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet"> --}}
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
  
  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png')}}">

  <style>
    *, h4{
      /* font-family: 'Cairo', sans-serif; */
      font-family: 'Cairo', sans-serif;
    }
.rtl-text {
  direction: rtl;
  text-align: right;
}

.btn-get-started,
.btn-watch-video {
  display: none;
}

.counter-container {
  text-align: center;
  background-color: #333; 
  color: #fff; 
  padding: 20px;
  border-radius: 10px;
}

.counter {
  display: inline-block;
  margin: 0 20px;
}

.count {
  font-size: 36px; /* حجم الخط للعدد */
  font-weight: bold; /* سمك الخط */
}

.description {
  font-size: 18px; /* حجم الخط للوصف */
  margin-top: 10px;
}



  </style>

</head>
<body>
    @include('layouts.navbar')
    @yield('content')
    @include('layouts.footer')

    

</body>

<script src="{{ asset('assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
<script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
<script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
<script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
<script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
<script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

<!-- Template Main JS File -->
<script src="{{ asset('assets/js/main.js') }}"></script>

</html>