@extends('layout.main3')
@section('content')


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Artikel</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Artikel</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Artikel Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Artikel</h5>
                        <h1 class="display-5 mb-0">Tingkatkan Pemahaman Anda tentang Diabetes dengan Membaca Artikel Kami</h1>
                    </div>
                    <p class="mb-4">Pilih salah satu artikel dengan klik "Baca Selengkapnya" Coba sekarang juga! Dapatkan fakta menarik lainnya</p>
                </br>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/pricing-1.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Pahami Diabetes: Pengertian, Tipe, dan Gejalanya</h4>
                                <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/pricing-2.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Mengenal Komplikasi Diabetes: Pencegahan dan Pengobatan</h4>
                                <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/pricing-3.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Pengelolaan Diabetes: Tips Menjaga Gula Darah Tetap Stabil</h4>
                                <a href="artikel.tampilan" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

