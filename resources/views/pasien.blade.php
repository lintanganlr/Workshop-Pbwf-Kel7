@extends('layout.main3')
@section('content')
<!-- Di dalam pasien.blade.php -->

<!-- Contoh tampilan tabel dengan data pasien menggunakan foreach -->
<table>
    <thead>
        <tr>
            <th>Nama Pasien</th>
        </tr>
    </thead>
    <tbody>
        @foreach($data_pasien as $pasien)
            <tr>
                <td>{{ $pasien->nama_pasien }}</td>
            </tr>
        @endforeach
    </tbody>
</table>


@endsection