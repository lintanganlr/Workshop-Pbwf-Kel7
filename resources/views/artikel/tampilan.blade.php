@extends('layout.main4')
@section('content')

<!-- Header -->
<div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="article-title" style="color: white; font-size:45px; text-align: center;">Artikel</h1>
            <div style="text-align: center;">
                <a href="/" class="h4 text-white" style="color: white; font-size: 20px;">Home</a>
                <i class="far fa-circle text-white px-2" style="color: white; font-size: 20px;"></i>
                <a href="/artikel" class="h4 text-white" style="color: white; font-size: 20px;">Artikel</a>
            </div>
        </div>
    </div>
</div>

<!-- Konten artikel.tampilan -->
<div class="article-wrapper" style="display: flex; justify-content: center;">
    <div class="article">
        <h2 class="article-title">{{ $artikel->judul_artikel }}</h2>
        <p class="article-date">Uploaded on: {{ $artikel->tgl_artikel }}</p>
        <img src="{{ asset('artikelimg/' . $artikel->image) }}" alt="{{ $artikel->judul_artikel }}" class="article-image">
        <p class="article-description">{{ $artikel->deskripsi }}</p>
    </div>
</div>



@endsection
