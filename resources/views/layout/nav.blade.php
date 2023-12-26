<!-- Topbar Start -->
<div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
    <div class="row gx-0">
        <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center">
                <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Tues : 6.00 am - 10.00 pm, Sunday Closed </small>
            </div>
        </div>
        <div class="col-md-6 text-center text-lg-end">
            <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                <div class="me-3 pe-3 border-end py-2">
                    <p class="m-0"><i class="fa fa-envelope-open me-2"></i>glucosync@gmail.com</p>
                </div>
                <div class="py-2">
                    <p class="m-0"><i class="fa fa-phone-alt me-2"></i>(021) 789816</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->


<!-- Navbar Start -->
<nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
    <a href="/" class="navbar-brand p-0">
        <h1 class="m-0 text-primary"> GlucoSync.</h1>
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarCollapse">
        <div class="navbar-nav ms-auto py-0">
            <a href="/" class="nav-item nav-link {{ request()->is('/') ? 'active' : '' }}">Home</a>
            <a href="/about" class="nav-item nav-link {{ request()->is('about') ? 'active' : '' }}">About</a>
            <a href="/artikel" class="nav-item nav-link {{ request()->is('artikel') ? 'active' : '' }}">Artikel</a>
            <a href="/service" class="nav-item nav-link {{ request()->is('service') ? 'active' : '' }}">Pelayanan</a>
            <a href="/history" class="nav-item nav-link {{ request()->is('artikel') ? 'active' : '' }}">Riwayat</a>
            <a href="/review" class="nav-item nav-link {{ request()->is('review') ? 'active' : '' }}">Ulasan</a>
            <div class="nav-item dropdown">
                <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Tenaga Medis</a>
                <div class="dropdown-menu m-0">
                    <a href="doctor" class="dropdown-item">Dokter</a>
                    <a href="nurse" class="dropdown-item">Perawat</a>
                </div>
            </div>
            <a href="/contact" class="nav-item nav-link {{ request()->is('contact') ? 'active' : '' }}">Contact</a>
        </div>

        @if (Auth::guest())

        <button type="button" class="btn text-dark small-btn" data-bs-toggle="modal" data-bs-target="#searchModal"><i class="fa fa-search"></i></button>
        <a class="btn-getstart small-btn" href="{{ route('login') }}">Sign In</a>
        <a class="btn-getstarted small-btn" href="{{ route('register') }}">Sign Up</a>

        @else
            <span class="text-truncate mr-2" title="profile">
                <!-- Teks dan tautan ke halaman profil -->
                <a href="profile" style="display: flex; align-items: center;">
                    <img src="img/profile.png" alt="Profile Image" style="width: 35px; height: 35px; border-radius: 50%; margin-right: 8px;">
                    <span style="font-size: 18px;">
                       Hi, {{ auth()->user()->name }}!
                    </span>
                </a>
            </span>
        @endguest
    </div>
</nav>

<style>
    .small-btn {
      font-size: 12px;
      padding: 5px 10px;
      /* Sesuaikan ukuran dan padding sesuai kebutuhan */
    }
  </style>
<!-- Navbar End -->
