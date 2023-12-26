@extends('layout.main')
@section('content')

    @if (Auth::guest())
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Riwayat</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Riwayat</a>
            </div>
        </div>
    </div>

    @else
    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Riwayat</h1>
                <a href="/" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Riwayat</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <div class="container">
        <div class="row">
            @foreach($payments as $payment)
                @if($payment->tenagamedis)
                    <div class="col-md-6 mb-4">
                        <div class="card">
                            <img src="{{ asset('medisimg/'. $payment->tenagamedis->image) }}" class="card-img-top" alt="{{ $payment->tenagamedis->image }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $payment->tenagamedis->nama_medis }}</h5>
                                <p class="card-text">{{ $payment->tenagamedis->spesialisasi_medis }}</p>
                                <p class="card-text">ID Pembayaran: {{ $payment->id }}</p>
                                <p class="card-text">Tanggal: {{ $payment->tgl_pembayaran }}</p>
                                @if($payment->reviews->isEmpty())
                                <!-- Show the "Buat Ulasan" button if there are no reviews for this payment -->
                                <a href="{{ route('review.create', ['payment_id' => $payment->id]) }}" class="btn btn-primary">Buat Ulasan</a>
                                @endif

                                <a href="{{ route('struk', ['id' => $payment->id]) }}" class="btn btn-primary">Struk</a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
    @endif
@endsection

<style>
    .card-img-top {
        object-fit: cover; /* Memastikan gambar tetap sesuai proporsi */
        /* width: 130px; Lebar gambar */
        height: 310px; /* Tinggi gambar */
    }
</style>
