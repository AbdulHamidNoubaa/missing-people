<!DOCTYPE html>

<html lang="en">
<head>
  <meta charset="utf-8">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png')}}">

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">

  <title>@yield('title')</title>
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href={{ asset('assets/admin/plugins/fontawesome-free/css/all.min.css') }}>
  <!-- Theme style -->
  <link rel="stylesheet" href={{ asset('assets/admin/dist/css/adminlte.min.css') }}>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href={{ asset('assets/admin/fonts/SansPro/SansPro.min.css') }}>
  <link rel="stylesheet" href={{ asset('assets/admin/css/bootstrap_rtl-v4.2.1/bootstrap.min.css') }}>
  <link rel="stylesheet" href={{ asset('assets/admin/css/bootstrap_rtl-v4.2.1/custom_rtl.css') }}>
  <link rel="stylesheet" href={{ asset('assets/admin/css/mycustomstyle.css') }}>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Cairo:wght@300;400&display=swap" rel="stylesheet">

<style>
   *{
      /* font-family: 'Cairo', sans-serif; */
      font-family: 'Cairo', sans-serif;
    }
</style>
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

  {{-- navbar --}}
@include('admin.includes.navbar')
  {{-- end-navbar --}}

  <!-- Main Sidebar Container -->

@include('admin.includes.sidebar')


  <!-- Content Wrapper. Contains page content -->

  @include('admin.includes.content')
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->

  <!-- /.control-sidebar -->

  <!-- Main Footer -->
@include('admin.includes.footer')

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src={{ asset('assets/admin/plugins/jquery/jquery.min.js')}}></script>
<!-- Bootstrap 4 -->
<script src={{ asset('assets/admin/plugins/bootstrap/js/bootstrap.bundle.min.js')}}></script>
<!-- AdminLTE App -->
<script src={{ asset('assets/admin/dist/js/adminlte.min.js')}}></script>
<script src={{ asset('assets/admin/js/general.js')}}></script>

@yield('script')
</body>
</html>
