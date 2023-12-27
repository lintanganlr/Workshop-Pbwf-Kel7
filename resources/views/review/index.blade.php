@extends('layout.main')
@section('content')

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
