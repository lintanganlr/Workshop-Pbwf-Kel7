@extends('layout.main3')
@section('content')
<!-- Struktur HTML untuk tampilan struk -->
<div class="container">
    <div class="receipt-container">
        <h2>Struk Pembayaran</h2>

        <!-- Display Tenaga Medis Details -->
        <div class="doctor-details">
            <img src="{{ $tenagaMedis->img }}" alt="gambar tenaga medis">
            <h5 class="card-title">{{ $tenagaMedis->nama_medis }}</h5>
            <p class="card-text">Spesialisasi : {{ $tenagaMedis->spesialisasi_medis }}</p>
        </div>

        <p class="card-text">ID Pembayaran: {{$pembayaran->id}}</p>
        <div class="status">  
            @if($status === 'onSuccess')
                <p>Status: Selesai</p>
            @else
                <p>Status: Selesai</p>
            @endif
        </div>
        <h3>Ringkasan Pembayaran</h3>
        <div class="payment-summary">
            <div class="fee-container">
                <span class="fee">Biaya Sesi (1 Jam)</span>
                <span class="fee">Rp 99.000</span>
            </div>
            <div class="fee-container">
                <span class="fee">Biaya Layanan</span>
                <span class="fee">Rp 1.000</span>
            </div>
            <div class="total-amount">
                <span class="total-label">Total Pembayaran</span>
                <span class="total-fee">Rp {{ number_format($totalPembayaran, 0, ',', '.') }}</span>
            </div>
        </div>
        <a href="/home">Tutup</a>

    </div>
</div>
@endsection



<script>
    // Function to close the popup
    function closePopup() {
        document.querySelector('.popup-container').style.display = 'none';
    }
</script>

<style>
    /* Gaya CSS untuk tampilan struk */
    .popup-container {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        display: flex;
        justify-content: center;
        align-items: center;
        z-index: 9999;
    }

    .popup-content {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        text-align: center;
    }

    .doctor-details {
        margin-bottom: 20px;
    }

    .doctor-details img {
        width: 100px;
        height: 100px;
        border-radius: 50%;
    }

    .status p {
        font-weight: bold;
    }

    /* Add your remaining styles here */

</style>