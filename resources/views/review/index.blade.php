@extends('layout.main')
@section('content')

 <!-- Hero Start -->
 <div class="container-fluid bg-primary py-5 hero-header mb-5">
    <div class="row py-3">
        <div class="col-12 text-center">
            <h1 class="display-3 text-white animated zoomIn">Ulasan</h1>
            <a href="/" class="h4 text-white">Home</a>
            <i class="far fa-circle text-white px-2"></i>
            <a href="/review" class="h4 text-white">Ulasan</a>
        </div>
    </div>
</div>
<!-- Hero End -->

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h3>Daftar Ulasan</h3>
            @if($reviews->isEmpty())
                <p>Tidak ada ulasan yang tersedia.</p>
            @else
                <div class="review-list">
                    @foreach($reviews as $index => $review)
                        <div class="review-card">
                            <div class="review-content">
                                <h5>Rating: {{ $review->rating }}</h5>
                                <p>{{ $review->ulasan }}</p>
                                <!-- Tampilkan ID Pembayaran -->
                                <p>ID Pembayaran: {{ $review->id_pembayaran }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Konten footer Anda -->
@endsection
