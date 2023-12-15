@extends('layout.main')
@section('content')

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->

    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Dokter</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Tenaga Medis</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- Team Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                    <div class="section-title bg-light rounded h-100 p-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Doctor </h5>
                        <h1 class="display-6 mb-4">Meet Our Certified & Experienced Doctor</h1>
                        <a href="service.dokter" class="btn btn-primary py-3 px-5">Appointment</a>
                    </div>
                </div>

                <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
                    <div class="team-item">
                        @foreach ($dokter as $doctor)
                        <div class="position-relative rounded-top" style="z-index: 1;">
                            <div class="team-img rounded-top overflow-hidden position-relative" style="height: 200px;">
                                <div class="d-flex align-items-center justify-content-center" style="height: 100%;">
                                    <img class="img-fluid w-100 h-100 object-cover" src="{{ asset('medisimg/'. $doctor->image)}}" alt="{{$doctor->image}}">
                                </div>
                                <div class="position-absolute bottom-0 start-50 translate-middle-x bg-light rounded p-2 d-flex">
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                                    <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                                </div>
                            </div>
                            <div class="medis-text position-relative bg-light text-center rounded-bottom p-4">
                                <div class="d-flex flex-column align-items-center">
                                    <h4 class="mb-2">{{ $doctor->nama_medis }}</h4>
                                    <p class="text-primary mb-0">{{ $doctor->spesialisasi_medis }}</p>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>



            </div>
        </div>
    </div>
    <!-- Team End -->
    @endsection
