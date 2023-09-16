<section id="topbar" class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">info@example.com</a></i>
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>+218920000000</span></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="https://www.facebook.com/ncglhr?mibextid=LQQJ4d" class="facebook"><i class="bi bi-facebook"></i></a>
    </div>
  </div>
</section>

<header id="header" class="d-flex align-items-center">
  <div class="container d-flex align-items-center justify-content-between">
    <nav id="navbar" class="navbar">
      <ul>
        <li><a class="nav-link scrollto active" href="{{ route('index') }}">الرئيسية</a></li>
        <li><a class="nav-link scrollto" href="{{ route('login') }}">التسجيل</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav><!-- .navbar -->
    
    <h1 class="logo"><a href="{{ route('index') }}"><span><img src="{{ asset('assets/img/logo.png')}}" width="70px" height="100px" alt=""></span></a></h1>
  </div>
</header><!-- End Header -->
