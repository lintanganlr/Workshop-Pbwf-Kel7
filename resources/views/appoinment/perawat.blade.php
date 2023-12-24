@extends('layout.main')
@section('content')
<div class="container">
    <div class="row">
        @foreach($nurses as $nurse)
        <div class="col-lg-6 py-5">
            <div class="team-item d-flex">
                <div class="position-relative rounded-top" style="z-index: 1; width: 50%;">
                    <img class="img-fluid rounded-top" src="{{ asset('medisimg/'. $nurse->image)}}" alt="{{$nurse->image}}">
                </div>
                <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5 mt-7s w-50">
                    <h4 class="mb-2">{{ $nurse->nama_medis }}</h4>
                    <p class="text-primary mb-0">{{ $nurse->spesialisasi_medis }}</p>
                    <a href="reservasi" class="btn btn-primary mt-3 rounded-pill">Book</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
