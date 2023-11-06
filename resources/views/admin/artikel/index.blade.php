@extends('admin.layout.template')
@section('content')
<main class="main-content position-relative max-height-vh-100 h-100 mt-1 border-radius-lg">
    <div class="container">
        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                  <div class="card mb-4">
                    <div class="card-header d-flex justify-content-between pb-0">
                      <h6>Data artikel</h6>
                      <div>
                        <a href="{{ route('artikel.create') }}" class="btn bg-gradient-dark mb-3 me-2">
                            <i class="fas fa-plus"></i> Tambah artikel
                        </a>
                        <a class="btn btn-primary">
                            <i class="bi bi-arrow-bar-left"></i> Sampah
                        </a>
                    </div>
                    </div>
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show col-md-12" id="success-alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>

                @endif
                @if(session('errors'))
                <div class="alert alert-danger alert-dismissible fade show col-md-12" id="success-alert">
                    {{ session('errors') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
                    <div class="card-body p-0 pt-0 pb-4">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                  <tr>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID Artikel</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">ID User</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal Upload</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Judul Artikel</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Deskripsi</th>
                                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                                <th class="text-secondary opacity-7"></th>
                              </tr>
                              <tbody>
                                @foreach ($artikels as $artikel )
                                     <tr>
                                         <th scope="row">{{ $artikel->id_artikel}}</th>
                                         <td>{{ $artikel->id_user }}</td>
                                         <td>{{ $artikel->tgl_artikel }}</td>
                                         <td>{{ $artikel->judul_artikel }}</td>
                                         <td>{{ $artikel->deskripsi }}</td>
                                         <td>
                                             @if($artikel->status == 1)

                                             <h6>Aktif</h6>
                                             @endif
                                         </td>
                                         {{-- <td>
                                             @if($artikel->status == 1)
                                             <a href="{{ route('',$artikel->id_artikel) }}"> <button class="btn btn-link text-dark px-4 mb-2">
                                                <i class="fas fa-pencil-alt text-dark me-2"></i>Edit</button>

                                                         <form action="{{ route('', $artikel->id_artikel) }}"
                                                             method="POST" style="display: inline-block;">
                                                             @csrf
                                                             @method('DELETE')
                                                             <button type="submit" onclick="return confirm('Apakah anda yakin ingin menghapus data ?')"
                                                                         class="btn btn-link text-danger text-gradient px-4 mb-2"><i class="far fa-trash-alt me-2"></i>Delete</button>
                                                         </form>
                                                         @else
                                                         <form action ($artikel->id_artikel)"
                                                             method="POST" style="display: inline-block;">
                                                             @csrf
                                                             @method('PUT')
                                                             <button type="submit" onclick="return confirm('Apakah anda ingin memulihkan data ?')"
                                                             class="btn btn-success"><i class="bi bi-arrow-clockwise"></i></button>

                                                         @endif
                                         </td> --}}

                                     </tr>
                                 @endforeach

                             </tbody>
                          </table>
                        </div>
                    </div>
                  </div>
                </div>
              </div>
    </div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->

<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->

<script src="../assets/vendor/libs/jquery/jquery.js"></script>
<script src="../assets/vendor/libs/popper/popper.js"></script>
<script src="../assets/vendor/js/bootstrap.js"></script>
<script src="../assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="../assets/vendor/js/menu.js"></script>

<!-- endbuild -->

<!-- Vendors JS -->
<script src="../assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="../assets/js/main.js"></script>

<!-- Page JS -->
<script src="../assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
</body>
</html>
@endsection






