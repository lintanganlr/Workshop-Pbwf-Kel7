@extends('layout.main')
@section('content')

<style>
    /* Gaya CSS untuk ulasan */
    .review-card {
        border: 1px solid #0e0c21;
        border-radius: 8px;
        background-color: #e3faff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
        padding: 20px;
    }

    .review-content h5 {
        color: #3f3c3c;
        margin-bottom: 10px;
    }

    .review-content p {
        font-size: 16px;
        margin-bottom: 5px;
    }
</style>

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
