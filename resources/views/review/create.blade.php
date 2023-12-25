@extends('layout.main2')
@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="payment-info">
                <h3 style="font-family: 'Jost', sans-serif;">Ulasan untuk Pembayaran ID: {{ $payment->id }}</h3>
                <!-- Tampilkan informasi pembayaran yang relevan -->
                <p style="font-family: 'Jost', sans-serif;">Tanggal Pembayaran: {{ $payment->tgl_pembayaran }}</p>
                <p style="font-family: 'Jost', sans-serif;">Total Pembayaran: {{ $payment->total_pembayaran }}</p>
            </div>
        </div>
        <div class="col-md-6">
            <div class="review-form">
                <!-- Form untuk memberikan ulasan -->
                <form action="{{ route('review.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_pembayaran" value="{{ $payment->id }}">
                    <label for="rating" style="font-family: 'Jost', sans-serif;">Rating:</label>
                    <select name="rating" id="rating">
                        <option value="Kurang Memuaskan">Kurang Memuaskan</option>
                        <option value="Cukup">Cukup</option>
                        <option value="Bagus">Bagus</option>
                        <option value="Sangat Bagus">Sangat Bagus</option>
                        <option value="Luar Biasa">Luar Biasa</option>
                    </select><br><br>
    
                    <label for="ulasan" style="font-family: 'Jost', sans-serif;">Ulasan:</label><br>
                    <textarea name="ulasan" id="ulasan" cols="30" rows="5"></textarea><br><br>
    
                    <button type="submit" style="background-color: #7D1219; color: #fff; border: none; border-radius: 3px; padding: 10px 20px; cursor: pointer;">Submit Review</button>
                </form>
            </div>
        </div>
    </div>
</div>

<style>
    /* Gaya untuk halaman ulasan */
    .container {
        margin-top: 20px;
        font-family: 'Jost', sans-serif;
    }

    .payment-info {
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
        margin-bottom: 20px;
    }

    .review-form {
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #f9f9f9;
    }

    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }

    select,
    textarea {
        width: 100%;
        padding: 8px;
        margin-bottom: 15px;
        border-radius: 3px;
        border: 1px solid #ccc;
        box-sizing: border-box;
    }

    button {
        padding: 10px 20px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
    }

    button:hover {
        background-color: #0056b3;
    }
</style>

@endsection
