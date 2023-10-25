@extends('layout.main')
@section('content')

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">About Us</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">About</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-7">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                        <h1 class="display-5 mb-0">Don't let diabetes control your life!</h1>
                    </div>
                    <h4 class="text-body fst-italic mb-4">Find the solutions and support you need on our diabetes healthcare service website</h4>
                    <p class="mb-4">Tidak perlu biarkan diabetes mengendalikan hidupmu. Kunjungi website layanan kesehatan diabetes kami untuk solusi dan dukungan yang kamu butuhkan. Temukan panduan, tips, dan komunitas yang siap membantu menjalani hidup yang lebih sehat dengan diabetes. Bersama, kita bisa menghadapi diabetes dan meraih kualitas hidup yang lebih baik</p>
                    <h1 class="display-5 mb-0">VISI</h1>
                    <p class="mb-4">Menjadi sumber informasi terpercaya dan penyedia layanan terkemuka dalam perawatan dan manajemen diabetes untuk membantu individu mencapai gaya hidup yang lebih sehat dan bahagia.</p>

                    <h1 class="display-5 mb-0">MISI</h1>
                    <div class="row g-3">
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.3s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Memberikan informasi terpercaya, dukungan, dan alat praktis untuk membantu individu dengan diabetes mengelola kondisi mereka dengan lebih baik</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i> Bekerja sama dengan organisasi kesehatan, profesional medis, dan ahli diabetes untuk memberikan informasi dan layanan yang berkualitas.</h5>
                        </div>
                        <div class="col-sm-6 wow zoomIn" data-wow-delay="0.6s">
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Mempromosikan kesadaran dan pemahaman tentang diabetes</h5>
                            <h5 class="mb-3"><i class="fa fa-check-circle text-primary me-3"></i>Memfasilitasi kolaborasi dengan profesional kesehatan guna meningkatkan kualitas hidup mereka.</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about1.jpg" style="object-fit: cover;">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Newsletter Start -->
    <div class="container-fluid position-relative pt-5 wow fadeInUp" data-wow-delay="0.1s" style="z-index: 1;">
        <div class="container">
            <div class="bg-primary p-5">
                <form class="mx-auto" style="max-width: 600px;">
                    <div class="input-group">
                        <input type="text" class="form-control border-white p-3" placeholder="Your Email">
                        <button class="btn btn-dark px-4">Sign Up</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->
@endsection

