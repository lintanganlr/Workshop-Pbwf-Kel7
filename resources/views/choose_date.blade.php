<!-- choose_date.blade.php -->
@extends('layout.main2')
@section('content')
    <div class="container">
        <h1>Pilih Tanggal</h1>


            <div class="form-group">
                <label for="tanggal">Pilih Tanggal:</label>
                <input type="date" id="tgl_tindakan" name="tgl_tindakan" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Lanjutkan</button>

    </div>
@endsection
