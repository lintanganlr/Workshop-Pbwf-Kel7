@extends('admin.partials.main')
@section('content')

@extends('admin.partials.main')
@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">
                <h5 class="card-title m-b-0">Upload Artikel</h5>
                <a href="{{ route('tenagamedis.create') }}" class="btn bg-gradient-dark">
                    <i class="fas fa-plus"></i> Tambah Artikel
                </a>
            </div>

            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID_Role</th>
                      <th scope="col">ID_Artikel</th>
                      <th scope="col">Tanggal</th>
                      <th scope="col">Judul Artikel</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Deskripsi</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($artikels as $item)
                    <tr>
                        <th scope="row"></th>
                        <td>{{$item->id}}</td>
                        <td>{{$item->id_roles}}</td>
                        <td>{{$item->tgl_artikel}}</td>
                        <td>{{$item->judul_artikel}}</td>
                        <td>
                            @if($item->image)
                            <img src="{{ asset('artikelimg/'. $item->image)}}" alt="{{$item->image}}"  width="50" >
                            @else
                            Tidak ada foto
                            @endif
                        </td>
                        <td>{{$item->deskripsi}}</td>
                        <td>
                            <button onclick="window.location='{{ route('tenagamedis.edit', $item->id) }}'" type="button" class="btn btn-sm btn-warning" title="Edit data">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <form method="POST" action="{{ route('tenagamedis.destroy', $item->id) }}" style="display: inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" title="Hapus data" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                    <i class="fas fa-trash-alt"></i> Hapus
                                </button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                  </tbody>
            </table>
        </div>
    </main>
@endsection


@endsection
