@extends('admin.partials.main')
@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">
                <h5 class="card-title m-b-0">Upload Medis</h5>
                <a href="{{ route('tenagamedis.create') }}" class="btn bg-gradient-dark">
                    <i class="fas fa-plus"></i> Tambah medis
                </a>
            </div>

            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID_Role</th>
                      <th scope="col">ID_Medis</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Spesialis</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($tenagaMedis as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->id_roles}}</td>
                        <td>{{$item->nama_medis}}</td>
                        <td>{{$item->spesialisasi_medis}}</td>
                        <td>
                            @if($item->image)
                            <img src="{{ asset('medisimg/'. $item->image)}}" alt="{{$item->image}}"  width="50" >
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
