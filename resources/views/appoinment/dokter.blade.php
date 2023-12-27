@extends('layout.main4')
@section('content')

<div class="container">
    <div class="row">
        @foreach($doctors as $doctor)
        <div class="col-lg-3 py-4 mb-4">
            <div class="position-relative" style="width: 240px; height: 200px;"> <!-- Menyesuaikan ukuran div untuk foto -->
                <img class="img-fluid rounded-top" src="{{ asset('medisimg/'. $doctor->image)}}" alt="{{$doctor->image}}" style="width: 100%; height: 100%; object-fit: cover;">
            </div>
            <div class="team-text bg-light text-center p-3 mt-n5 rounded" style="width: 240px;"> <!-- Menyesuaikan ukuran dan styling untuk teks -->
                <h4 class="mb-1" style="font-size: 1.2rem;">{{ $doctor->nama_medis }}</h4>
                <p class="text-primary mb-0" style="font-size: 0.9rem;">{{ $doctor->spesialisasi_medis }}</p>
                <a href="{{ route('pembayaran.dokter', ['id' => $doctor->id]) }}" class="btn btn-primary mt-2 rounded-pill" style="font-size: 0.9rem;">Book</a>
            </div>
        </div>
        @endforeach
    </div>
</div>

@endsection

