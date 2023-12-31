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
        @foreach($artikels as $artikel)
        <div class="col-lg-4">
            <div class="card">
                <img src="{{ asset('artikelimg/' . $artikel->image) }}" class="card-img-top" alt="{{ $artikel->judul_artikel }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $artikel->judul_artikel }}</h5>
                    <p class="card-text">{{ $artikel->tgl_artikel }}</p>
                    <a href="{{ '/artikel/tampilan/'.$artikel->id }}" class="btn btn-primary">Read More</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
