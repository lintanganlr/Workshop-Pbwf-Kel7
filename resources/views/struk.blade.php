@extends('layout.main3')
@section('content')
<!-- Struktur HTML untuk tampilan struk -->
<div class="container">
    <div class="receipt-container">
        <h2>Struk Pembayaran</h2>

        <!-- Display Tenaga Medis Details -->
        <div class="doctor-details">
            <img class="img-fluid" src="{{ asset('medisimg/' . $tenagaMedis->image) }}" alt="gambar tenaga medis">
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
            <div class="fee-container">
                <span class="fee"><b>Total Pembayaran</b></span>
                <span class="fee"><b>Rp {{ number_format($totalPembayaran, 0, ',', '.') }}</b></span>
            </div>
            
        </div>
        <a href="/home" style="display: inline-block; padding: 10px 20px; background-color: #7D1219; color: #fff; text-decoration: none; border-radius: 5px;">Tutup</a>
    </div>

</div>
@endsection



<script>
    // Function to close the popup
    function closePopup() {
        document.querySelector('.popup-container').style.display = 'none';
    }
</script>
