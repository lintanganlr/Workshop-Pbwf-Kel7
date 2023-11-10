@extends('admin.layout.template')
@section('content')
<div class="container">
        <div class="row">
            <div class='col-lg-12'>

                <div class="card">
                    <div class="card-body">
                        <h6>Tambah Artikel</h6>
   <form class="row g-3" action="{{ route('artikel.store') }}" enctype="multipart/form-data" method="POST">
    @csrf
    {{-- <div class="col-12">
      <label for = "id_user" class="form-label">Pilih User: </label>
      <select class="form-control" id="id_user" name="id_user">
      <option style="color-text= light" value=""></option>
              @foreach ($satuan as $id => $nama_satuan)
              <option value="{{ $id }}">{{ $nama_satuan }}</option>
              @endforeach
      </select>
  </div> --}}
    <div class="col-12">
      <label for="inputNanme4" class="form-label">Tangggal Artikel</label>
      <input type="text" class="form-control @error('tgl_artikel') is-invalid @enderror"  name="tgl_artikel">
      @error('tgl_artikel')
        <div class='invalid-feedback'>{{ $message }}</div>
      @enderror
    </div>

    <div class="col-12">
        <label for="inputNanme4" class="form-label">Judul Artikel</label>
        <input type="judul_artikel" class="form-control @error('judul_artikel') is-invalid @enderror"  name="judul_artikel">
        @error('judul_artikel')
          <div class='invalid-feedback'>{{ $message }}</div>
        @enderror
      </div>

      <div class="col-12">
        <label for="inputNanme4" class="form-label">Deskripsi</label>
        <input type="text" class="form-control @error('deskripsi') is-invalid @enderror"  name="deskripsi">
        @error('deskripsi')
          <div class='invalid-feedback'>{{ $message }}</div>
        @enderror
      </div>

    <div class="d-flex justify-content-end">
        <button type="submit" class="btn btn-primary" style="margin-right: 10px;">Submit</button>
        <button type="reset" class="btn btn-secondary">Reset</button>
    </div>
                    </div>
                  </div>
            </div>
        </div>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            var resetButton = document.querySelector("button[type='reset']");

            var inputNamaUser = document.querySelector("input[name='nama_user']");

            resetButton.addEventListener("click", function() {
                inputNamaUser.value = "";
            });
        });
    </script>
</div>
@endsection







