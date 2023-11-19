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

<!-- Konten artikel.index -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            @foreach($artikels as $item)
            <div class="col-lg-4 mb-4">
                <div class="position-relative">
                    <img class="img-fluid rounded-top" src="{{ asset('artikelimg/' . $artikels->image) }}" alt="{{ $artikels->judul_artikel }}">
                    <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                        <h4>{{ $artikels->judul_artikel }}</h4>
                        <a href="{{ route('artikel.tampilan', $artikels->judul_artikel) }}" class="btn btn-primary py-2 px-4">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endsection