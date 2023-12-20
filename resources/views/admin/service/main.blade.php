@extends('admin.partials.main')
@section('content')

<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body d-flex justify-content-between align-items-center">
                <h5 class="card-title m-b-0">Upload service</h5>
                <a href="{{ route('service.create') }}" class="btn btn-outline-info">
                    <i class="fas fa-plus"></i> Tambah service
                </a>
            </div>

            <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">ID_Service</th>
                      <th scope="col">ID Role</th>
                      <th scope="col">Nama</th>
                      <th scope="col">Gambar</th>
                      <th scope="col">Aksi</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach ($services as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{$item->id_roles}}</td>
                        <td>{{$item->nama_service}}</td>
                        <td>
                            @if($item->image)
                            <img src="{{ asset('serviceimg/'. $item->image)}}" alt="{{$item->image}}"  width="199.99px" height="120.36px" >
                            @else
                            Tidak ada foto
                            @endif
                        </td>
                        <td>
                            <button onclick="window.location='{{ route('service.edit', $item->id) }}'" type="button" class="btn btn-sm btn-info" title="Edit data">
                                <i class="fas fa-edit"></i> Edit
                            </button>
                            <form method="POST" action="{{ route('service.destroy', $item->id) }}" style="display: inline-block">
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
