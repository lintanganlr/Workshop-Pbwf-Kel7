@extends('layout.main3')
@section('content')
   <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Services</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Services</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Service Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-7">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                        <h1 class="display-5 mb-0">We Offer High-Quality Health Services for Diabetes</h1>
                    </div>
                    <div class="row g-5">
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <a href="service.dokter">
                                    <img class="img-fluid" src="img/service-dokter.jpg" alt="Deskripsi Gambar">
                                </a>
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <a href="service.dokter">
                                    <h5 class="m-0">Konsultasi Dokter</h5>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 service-item wow zoomIn" data-wow-delay="0.9s">
                            <div class="rounded-top overflow-hidden">
                                <a href="service.perawat">
                                    <img class="img-fluid" src="img/service-perawat.jpg" alt="">
                                </a>
                            </div>
                            <div class="position-relative bg-light rounded-bottom text-center p-4">
                                <a href="service.perawat">
                                    <h5 class="m-0">Pembersihan Luka</h5>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
