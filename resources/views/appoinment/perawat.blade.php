@extends('layout.main4')
@section('content')


<div class="container-fluid py-10 px-4">
    <div class="container">
        <div class="row g-5 align-items-start">
            <div class="col-lg-4 wow slideInUp" data-wow-delay="0.1s">
                <div class="section-title bg-light rounded h-100 p-2">
                    <h1 class="display-6 mb-4">Premium care, Handpicked just for you.</h1>
                    <a href="/service" class="btn btn-primary py-3 px-5">Appointment</a>
                    <div class="d-flex align-items-center">
                        <a href="/" class="h4 text-white">Home</a>
                        <i class="far fa-circle text-white mx-2"></i>
                        <a href="/service" class="h4 text-white">Service</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container px-100">
        <div class="row gx-100">
            @foreach($nurses as $nurse)
            <div class="col-lg-4 col-md-6 col-sm-12 mb-4" style="margin-bottom: 30px;">
                <div class="position-relative" style="width: 240px; height: 300px; overflow: hidden;"> <!-- Menyesuaikan ukuran div untuk foto -->
                    <img class="img-fluid rounded-top" src="{{ asset('medisimg/'. $nurse->image)}}" alt="{{$nurse->image}}" style="width: 100%; height: 100%; object-fit: cover;">
                </div>
                <div class="team-text bg-light text-center p-3 mt-n5 rounded" style="width: 240px; margin-top: -50px; padding: 15px 0;"> <!-- Menyesuaikan ukuran dan styling untuk teks -->
                    <h4 class="mb-1" style="font-size: 1.2rem; color: black;">{{ $nurse->nama_medis }}</h4>
                    <p class="text-primary mb-0" style="font-size: 0.9rem;">{{ $nurse->spesialisasi_medis }}</p>
                    <a href="{{ route('pembayaran.perawat', ['id' => $nurse->id]) }}" class="btn btn-primary mt-2 rounded-pill" style="font-size: 0.9rem;">Book</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>




@endsection

