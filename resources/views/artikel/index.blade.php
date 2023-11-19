@extends('layout.main3')
@section('content')

<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Artikel</h1>
            <a href="" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="" class="h4 text-white">Artikel</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Konten artikel.tampilan -->

<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <!-- ... Bagian header ... -->
</div>

<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title Smb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Artikel</h5>
                    <h1 class="display-5 mb-0">{{ $artikels->judul_artikel }}</h1>
                    <p class="mb-4">{{ $artikels->tgl_artikel }}</p>
                </div>
                <p class="mb-4">{{ $artikels->deskripsi }}</p>
                <!-- ... Tambahan konten artikel ... -->
            </div>
        </div>
    </div>
</div>
@endsection