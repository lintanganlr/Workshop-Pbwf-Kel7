@extends('layout.main')
@section('content')


<!-- Appointment Start -->
<div class="container">
    <div class="row">
        <div class="col-lg-6 py-5">
            <div class="team-item d-flex">
                <div class="position-relative rounded-top" style="z-index: 1; width: 50%;">
                    <img class="img-fluid rounded-top " src="img/team-4.jpg" alt="">
                </div>
                <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5 mt-7s w-50">
                    <h4 class="mb-2">Dr. dr. Wuryaningsih, Sp.PD-KEMD</h4>
                    <p class="text-primary mb-0">Dokter Spesialis Penyakit Dalam (Endokrin-Metabolik-Diabetes).</p>
                    <a href="pembayaran" class="btn btn-primary mt-3 rounded-pill">Chat</a>
                </div>
            </div>
            <div class="team-item d-flex">
                <div class="position-relative rounded-top" style="z-index: 1; width: 50%;">
                    <img class="img-fluid rounded-top " src="img/team-2.jpg" alt="">
                </div>
                <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5 mt-7s w-50">
                    <h4 class="mb-2">Prof. Dr. dr. Ketut Suastika, Sp.PD-KEMD, FINASIM</h4>
                    <p class="text-primary mb-0">Dokter Spesialis Penyakit Dalam (Endokrin-Metabolik-Diabetes).</p>
                    <a href="link_ke_halaman_janji" class="btn btn-primary mt-3 rounded-pill">Chat</a>
                </div>
            </div>
            <div class="team-item d-flex">
                <div class="position-relative rounded-top" style="z-index: 1; width: 50%;">
                    <img class="img-fluid rounded-top " src="img/team-6.jpg" alt="">
                </div>
                <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-7 mt-7s w-50">
                    <h4 class="mb-2">dr. Indra Wijaya, Sp.PD-KEMD, M.Kes, FINASIM</h4>
                    <p class="text-primary mb-0">Dokter Spesialis Penyakit Dalam (Endokrin-Metabolik-Diabetes).</p>
                    <a href="link_ke_halaman_janji" class="btn btn-primary mt-3 rounded-pill">Chat</a>
                </div>
            </div>
        </div>
        <div class="col-lg-6 py-5">
            <div class="team-item d-flex">
                <div class="position-relative rounded-top" style="z-index: 1; width: 50%; ">
                    <img class="img-fluid rounded-top " src="img/team-7.png" alt="">
                </div>
                <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5 mt-7s w-50">
                    <h4 class="mb-2">Prof. dr. Hans Tandra, MD., Ph.D., Sp.PD-KEMD., FACE</h4>
                    <p class="text-primary mb-0">Dokter Spesialis Penyakit Dalam (Endokrin-Metabolik-Diabetes).</p>
                    <a href="link_ke_halaman_janji" class="btn btn-primary mt-3 rounded-pill">Chat</a>
                </div>
            </div>
            <div class="team-item d-flex">
                <div class="position-relative rounded-top" style="z-index: 1; width: 50%;">
                    <img class="img-fluid rounded-top " src="img/team-8.png" alt="">
                </div>
                <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5 mt-7s w-50">
                    <h4 class="mb-2">dr. Hermina Novida, Sp.PD-KEMD</h4>
                    <p class="text-primary mb-0">Dokter Spesialis Penyakit Dalam (Endokrin-Metabolik-Diabetes).</p>
                    <a href="pembayaran" class="btn btn-primary mt-3 rounded-pill">Chat</a>
                </div>
            </div>
            <div class="team-item d-flex">
                <div class="position-relative rounded-top" style="z-index: 1; width: 50%;margin-top:10px">
                    <img class="img-fluid rounded-top " src="img/team-9.png" alt="">
                </div>
                <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-7 mt-7s w-50">
                    <h4 class="mb-2">dr. H.R Kongko Herry Nursetiyanto, Sp.PD-KEMD, FINASIM</h4>
                    <p class="text-primary mb-0">Dokter Spesialis Penyakit Dalam (Endokrin-Metabolik-Diabetes).</p>
                    <a href="link_ke_halaman_janji" class="btn btn-primary mt-3 rounded-pill">Chat</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Appointment End -->
@endsection

{{-- <div class="row gx-5">
    <div class="col-lg-6 py-5">
        <div class="col-lg-4 wow slideInUp" data-wow-delay="0.3s">
            <div class="team-item">
                <div class="position-relative rounded-top" style="z-index: 1;">
                    <img class="img-fluid rounded-top w-100" src="img/team-4.jpg" alt="">
                    <div class="position-absolute top-100 start-50 translate-middle bg-light rounded p-2 d-flex">
                        <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-twitter fw-normal"></i></a>
                        <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-facebook-f fw-normal"></i></a>
                        <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-linkedin-in fw-normal"></i></a>
                        <a class="btn btn-primary btn-square m-1" href="#"><i class="fab fa-instagram fw-normal"></i></a>
                    </div>
                </div>
                <div class="team-text position-relative bg-light text-center rounded-bottom p-4 pt-5 mt-7s">
                    <h4 class="mb-2">Dr. dr. Wuryaningsih, Sp.PD-KEMD</h4>
                    <p class="text-primary mb-0">Dokter spesialis diabetes dan gangguan hormonal.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-6">
        <div class="appointment-form h-100 d-flex flex-column justify-content-center text-center p-5 wow zoomIn" data-wow-delay="0.6s">
            <h1 class="text-white mb-4">Yuk! Isi Dulu</h1>
            <form>
                <div class="row g-3">
                    <div class="col-12 col-sm-6">
                        <select class="form-select bg-light border-0" style="height: 55px;">
                            <option selected>Pilih Layanan</option>
                            <option value="1">Konsultasi</option>
                            <option value="2">Perawatan Luka (Berat)</option>
                        </select>
                    </div>
                    <div class="col-12 col-sm-6">
                        <div class="date" id="date1" data-target-input="nearest">
                            <input type="text"
                                class="form-control bg-light border-0 datetimepicker-input"
                                placeholder="Appointment Date" data-target="#date1" data-toggle="datetimepicker" style="height: 55px;">
                        </div>
                    </div>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6">
                            <select class="form-select bg-light border-0" style="height: 55px;">
                                <option selected>Appoinment Time</option>
                                <option value="1">08.00</option>
                                <option value="2">10.00</option>
                            </select>
                        </div>
                    <div class="col-12">
                        <button class="btn btn-dark w-100 py-3" type="submit">Buat Janji!</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div> --}}
