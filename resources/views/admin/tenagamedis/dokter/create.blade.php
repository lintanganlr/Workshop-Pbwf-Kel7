@extends('admin.partials.main')
@section('content')

<form method="POST" action="{{ route('tenaga_medis.store') }}" enctype="multipart/form-data">
    @csrf

    <div>
        <label for="jenis_dokter">Dokter</label>
        <input type="radio" id="jenis_dokter" name="jenis_tenaga_medis" value="Dokter">

        <label for="jenis_perawat">Perawat</label>
        <input type="radio" id="jenis_perawat" name="jenis_tenaga_medis" value="Perawat">
    </div>

    <div>
        <label for="spesialisasi">Spesialisasi Medis</label>
        <input type="text" id="spesialisasi" name="spesialisasi_medis">
    </div>

    <div>
        <label for="image">Foto</label>
        <input type="file" id="image" name="image">
    </div>

    <button type="submit">Tambahkan Tenaga Medis</button>
</form>
@endsection
