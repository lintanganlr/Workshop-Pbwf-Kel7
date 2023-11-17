@extends('admin.partials.main')
@section('content')


        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <form action="{{ route('article.update', $artikels->id)}}" method="Post" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="page-wrapper">
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                        <div class="card">
                            <div class="card-body">
                                @if ($errors->any)
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ( $errors->all() as $items )
                                                <li>{{$items}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                @endif

                                <h4 class="card-title">Create Artikel</h4>
                                <div class="form-group">
                                    <label for="roles">Pilih Role</label>
                                    <select name="id_roles" class="form-control" id="roles" type="number">
                                        <option value="{{ $artikels->roles->id}}" selected="">{{ $artikels->roles->nama_role}}</option>
                                        @if($artikels->roles->id == 1)
                                        <option value="2">Dokter</option>
                                    @elseif($artikels->roles->id == 2)
                                        <option value="1">Admin</option>
                                    @else
                                        <option value="1">Admin</option>
                                        <option value="2">Dokter</option>
                                    @endif
                                    </select>
                                </div>

                                {{-- <div class="form-group">
                                    <label for="id_role">Pilih Role</label>
                                    <select name="nama_role" id="id_role" class="custom-select rounded-0">
                                        <option selected disabled>Pilih Role</option>
                                        @foreach ($roles as $role)
                                            <option value="{{ $role->nama_role }}">{{ $role->nama_role }}</option>
                                        @endforeach
                                    </select>
                                </div> --}}

                                <div class="form-group">
                                    <label for="tgl_artikel">Tanggal Upload</label>
                                    <input type="date" id="tgl_artikel" name="tgl_artikel" class="form-control demo" value="{{ old('tgl_artikel', $artikels->tgl_artikel) }}">
                                </div>

                <div class="form-group">
                    <label for="judul_artikel">Judul</label>
                    <input type="text" id="judul_artikel" name="judul_artikel" class="form-control demo" value="{{ old('judul_artikel', $artikels->judul_artikel) }}">
                </div>
{{-- <div class="form-group">
    <label for="image">Upload Foto</label>
    <input type="file" name="image" id="image" class="form-control" value="{{ old('image', $artikels->image) }}">
</div> --}}

<div class="row mb-3">
    <label for="image" class="col-sm-2 col-form-label">Upload Foto Artikel</label>
    <div class="col-sm-10">
        <input type="file"
            class="form-control-file @error('image') is-invalid @enderror"
            id="image" name="image">
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        @if($artikels->image)
            <img src="{{ asset('artikelimg/' . $artikels->image) }}" alt="Foto artikel" width="50">
        @else
            <p>Tidak ada file yang dipilih</p>
        @endif
    </div>
</div>
                                {{-- <div class="form-group">
                                    <label for="position-top-right">Top right</label>
                                    <input type="text" id="position-top-right" class="form-control demo" data-position="top right" value="#0088cc">
                                </div>
                            </div> --}}
                <!-- editor -->
                <div class="form-group">
                    <label for="deskripsi">Deskripsi</label>
                    <textarea  id="deskripsi" name="deskripsi" class="form-control demo">{{ old('deskripsi', $artikels->deskripsi) }}</textarea>
                </div>
                {{-- <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <label for="deskripsi">Deskripsi</label>
                                <input type="text" name="deskripsi" class="form-control">
                                <!-- Create the editor container -->
                                <div id="editor" style="height: 500px;">
                                        <br>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <!-- ============================================================== -->
                            <div class="border-top">
                                <div class="card-body">
                                    <button type="submit" class="btn btn-success">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>

                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
        </form>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/assets/libs/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <script src="/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="/dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="/assets/libs/inputmask/dist/min/jquery.inputmask.bundle.min.js"></script>
    <script src="/dist/js/pages/mask/mask.init.js"></script>
    <script src="/assets/libs/select2/dist/js/select2.full.min.js"></script>
    <script src="/assets/libs/select2/dist/js/select2.min.js"></script>
    <script src="/assets/libs/jquery-asColor/dist/jquery-asColor.min.js"></script>
    <script src="/assets/libs/jquery-asGradient/dist/jquery-asGradient.js"></script>
    <script src="/assets/libs/jquery-asColorPicker/dist/jquery-asColorPicker.min.js"></script>
    <script src="/assets/libs/jquery-minicolors/jquery.minicolors.min.js"></script>
    <script src="/assets/libs/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="/assets/libs/quill/dist/quill.min.js"></script>
    <script>
        //***********************************//
        // For select 2
        //***********************************//
        /*datwpicker*/
        jQuery('.mydatepicker').datepicker();
        jQuery('#datepicker-autoclose').datepicker({
            autoclose: true,
            todayHighlight: true
        });
        var quill = new Quill('#editor', {
            theme: 'snow'
        });

    </script>
@endsection

