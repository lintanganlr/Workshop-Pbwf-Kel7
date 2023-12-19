@extends('layout.main')
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

<!-- Konten artikel.tampilan -->

<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <!-- ... Bagian header ... -->
</div>

<div class="container">
    <div class="row g-4">
        <div class="col-lg-12">
            <div class="custom-card">
                <img src="{{ asset('artikelimg/' . $artikel->image) }}" class="card-img-top custom-img" alt="{{ $artikel->judul_artikel }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $artikel->judul_artikel }}</h5>
                    <p class="card-text">Tanggal: {{ $artikel->tgl_artikel }}</p>
                    <p class="card-text">{{ $artikel->deskripsi }}</p>
                    <!-- Other content related to the article -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
