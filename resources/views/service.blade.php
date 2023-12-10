@extends('layout.main')
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
                <div class="col-lg-10">
                    <div class="section-title mb-5">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                        <h1 class="display-5 mb-0">We Offer High-Quality Health Services for Diabetes</h1>
                    </div>
                    <div class="row g-5">
                        @foreach($services as $service)
                            <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.9s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('serviceimg/' . $service->image) }}" alt="Deskripsi Gambar">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    @guest
                                        <h5 class="m-0">{{ $service->nama_service }}</h5>
                                    @else
                                    <a href="{{ route('appoinment.dokter') }}">
                                        <h5 class="m-0">{{ $service->nama_service }}</h5>
                                    </a>                                    
                                    @endguest
                                </div>
                            </div>
                        @endforeach
                    </div>                                     
                </div>
            </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
@endsection
