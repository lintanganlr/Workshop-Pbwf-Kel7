@extends('layout.main3')
@section('content')

<!-- Hero Start -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="article-title" style="color: white;">Artikel Kesehatan</h1>
        </div>
    </div>
</div>
<!-- Hero End -->

<!-- Konten artikel.tampilan -->

<div class="article-wrapper">
    <div class="article">
        <h2 class="article-title">{{ $artikel->judul_artikel }}</h2>
        <p class="article-date">Uploaded on: {{ $artikel->tgl_artikel }}</p>
        <img src="{{ asset('artikelimg/' . $artikel->image) }}" alt="{{ $artikel->judul_artikel }}" class="article-image">
        <p class="article-description">{{ $artikel->deskripsi }}</p>
    </div>
</div>
{{--
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <!-- ... Bagian header ... -->
</div> --}}
{{--
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
</div> --}}
@endsection
