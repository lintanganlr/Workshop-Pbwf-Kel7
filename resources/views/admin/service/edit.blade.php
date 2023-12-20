@extends('admin.partials.main')
@section('content')


        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <form action="{{ route('service.update', $service->id)}}" method="Post" enctype="multipart/form-data">
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

                                <h4 class="card-title">Edit Pelayanan</h4>
                                <div class="form-group">
                                    <label for="roles">Pilih Role</label>
                                    <select name="id_roles" class="form-control" id="roles" type="number">
                                        <option value="{{ $service->roles->id}}" selected="">{{ $service->roles->nama_role}}</option>
                                        @if($service->roles->id == 3)
                                        <option value="2">Dokter</option>
                                    @elseif($service->roles->id == 2)
                                        <option value="3">Perawat</option>
                                    @else
                                        <option value="3">Perawat</option>
                                        <option value="2">Dokter</option>
                                    @endif
                                    </select>
                                </div>

                <div class="form-group">
                    <label for="nama_service">Nama Pelayanan</label>
                    <input type="text" id="nama_service" name="nama_service" class="form-control demo" value="{{ old('nama_service', $service->nama_service) }}">
                </div>

<div class="row mb-3">
    <label for="image" class="col-sm-2 col-form-label">Upload Foto Layanan</label>
    <div class="col-sm-10">
        <input type="file"
            class="form-control-file @error('image') is-invalid @enderror"
            id="image" name="image">
        @error('image')
        <div class="invalid-feedback">
            {{ $message }}
        </div>
        @enderror
        @if($service->image)
            <img src="{{ asset('serviceimg/' . $service->image) }}" alt="Foto service" width="199.99px" height="120.36px">
        @else
            <p>Tidak ada file yang dipilih</p>
        @endif
    </div>
</div>

<div class="border-top">
    <div class="card-body">
        <button type="submit" class="btn btn-info">Submit</button>
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

