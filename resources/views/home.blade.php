@extends('layout.main')
@section('content')
<!-- Full Screen Search Start -->
<div class="modal fade" id="searchModal" tabindex="-1">
 <div class="modal-dialog modal-fullscreen">
     <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
         <div class="modal-header border-0">
             <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body d-flex align-items-center justify-content-center">
             <div class="input-group" style="max-width: 600px;">
                 <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                 <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
             </div>
         </div>
     </div>
 </div>
</div>
<!-- Full Screen Search End -->


<!-- Carousel Start -->
<div class="container-fluid p-0">
 <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
     <div class="carousel-inner">
         <div class="carousel-item active">
             <img class="w-100" src="img/carousel-1.jpg" alt="Image">
             <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                 <div class="p-3" style="max-width: 900px;">
                     <h5 class="text-white text-uppercase mb-3 animated slideInDown">Diabetes Friendly</h5>
                     <h1 class="display-1 text-white mb-md-4 animated zoomIn">Your Healthy is Our Priority</h1>
                 </div>
             </div>
         </div>
         <div class="carousel-item">
             <img class="w-100" src="img/carousel-2.jpg" alt="Image">
             <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                 <div class="p-3" style="max-width: 900px;">
                     <h5 class="text-white text-uppercase mb-3 animated slideInDown">Keep Your Healthy</h5>
                     <h1 class="display-1 text-white mb-md-4 animated zoomIn">Take The Best Quality Diabetes Treatment</h1>
                 </div>
             </div>
         </div>
     </div>
     <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel"
         data-bs-slide="prev">
         <span class="carousel-control-prev-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Previous</span>
     </button>
     <button class="carousel-control-next" type="button" data-bs-target="#header-carousel"
         data-bs-slide="next">
         <span class="carousel-control-next-icon" aria-hidden="true"></span>
         <span class="visually-hidden">Next</span>
     </button>
 </div>
</div>
<!-- Carousel End -->


<!-- Banner Start -->
<div class="container-fluid banner mb-5">
 <div class="container">
     <div class="row gx-0">
         <div class="col-lg-4 wow zoomIn" data-wow-delay="0.1s">
             <div class="bg-primary d-flex flex-column p-5" style="height: 300px;">
                 <h3 class="text-white mb-3">Opening Hours</h3>
                 <div class="d-flex justify-content-between text-white mb-3">
                     <h6 class="text-white mb-0">Mon - Fri</h6>
                     <p class="mb-0"> 8:00am - 9:00pm</p>
                 </div>
                 <div class="d-flex justify-content-between text-white mb-3">
                     <h6 class="text-white mb-0">Saturday</h6>
                     <p class="mb-0"> 8:00am - 7:00pm</p>
                 </div>
                 <div class="d-flex justify-content-between text-white mb-3">
                     <h6 class="text-white mb-0">Sunday</h6>
                     <p class="mb-0"> 8:00am - 5:00pm</p>
                 </div>
                 <a class="btn btn-light" href="service">Appointment</a>
             </div>
         </div>
     </div>
 </div>
</div>
<!-- Banner Start -->

<!-- About Start -->
<div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
 <div class="container">
     <div class="row g-5">
         <div class="col-lg-7">
             <div class="section-title mb-4">
                 <h5 class="position-relative d-inline-block text-primary text-uppercase">About Us</h5>
                 <h1 class="display-5 mb-0">Don't let diabetes control your life!</h1>
             </div>
             <h4 class="text-body fst-italic mb-4">Find the solutions and support you need on our diabetes healthcare service website</h4>
             <p class="mb-4">Tidak perlu biarkan diabetes mengendalikan hidupmu. Kunjungi website layanan kesehatan diabetes kami untuk solusi dan dukungan yang kamu butuhkan. Temukan panduan, tips, dan komunitas yang siap membantu menjalani hidup yang lebih sehat dengan diabetes. Bersama, kita bisa menghadapi diabetes dan meraih kualitas hidup yang lebih baik</p>

             <div class="vision-mission">
                <div class="decoration">
                  <h1 class="vision-title">VISI</h1>
                </div>
                <p class="vision-content">Menjadi sumber informasi terpercaya dan penyedia layanan terkemuka dalam perawatan dan manajemen diabetes untuk membantu individu mencapai gaya hidup yang lebih sehat dan bahagia.</p>

                <div class="decoration">
                  <h1 class="mission-title">MISI</h1>
                </div>

                <div class="mission-content">
                  <div class="mission-item wow zoomIn" data-wow-delay="0.3s">
                    <h5><i class="fa fa-check-circle text-primary me-3"></i>Memberikan informasi terpercaya, dukungan, dan alat praktis untuk membantu individu dengan diabetes mengelola kondisi mereka dengan lebih baik</h5>
                    <h5><i class="fa fa-check-circle text-primary me-3"></i> Bekerja sama dengan organisasi kesehatan, profesional medis, dan ahli diabetes untuk memberikan informasi dan layanan yang berkualitas.</h5>
                  </div>
                  <div class="mission-item wow zoomIn" data-wow-delay="0.6s">
                    <h5><i class="fa fa-check-circle text-primary me-3"></i>Mempromosikan kesadaran dan pemahaman tentang diabetes</h5>
                    <h5><i class="fa fa-check-circle text-primary me-3"></i>Memfasilitasi kolaborasi dengan profesional kesehatan guna meningkatkan kualitas hidup mereka.</h5>
                  </div>
                </div>
              </div>



         </div>
         <div class="col-lg-5" style="min-height: 500px;">
             <div class="position-relative h-100">
                 <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="img/about1.jpg" style="object-fit: cover;">
             </div>
         </div>
     </div>
 </div>
</div>
<!-- About End -->


 <!-- Service Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
     <div class="container">
            <div class="row g-5 mb-5">
                <div class="col-lg-10">
                    <div class="section-title mb-5">
                      <h5 class="position-relative d-inline-block text-primary text-uppercase">Our Services</h5>
                        <h1 class="display-5 mb-0">We Offer High-Quality Health Services for Diabetes</h1>
                        <div class="border-top">
                            <div class="card-body">
                                <a href="{{ route('service') }}" class="btn btn-primary btn-lg btn-block rounded-pill animate__animated" id="animatedBtn">Click Here!</a>
                            </div>
                        </div>

                    </div>


                    {{-- <div class="row g-5">
                        @foreach($services as $service)
                            <div class="col-md-4 service-item wow zoomIn" data-wow-delay="0.9s">
                                <div class="rounded-top overflow-hidden">
                                    <img class="img-fluid" src="{{ asset('serviceimg/' . $service->image) }}" alt="Deskripsi Gambar">
                                </div>
                                <div class="position-relative bg-light rounded-bottom text-center p-4">
                                    @guest
                                        <h5 class="m-0">{{ $service->nama_service }}</h5>
                                    @else
                                        <a href="{{ route('service.dokter') }}">
                                            <h5 class="m-0">{{ $service->nama_service }}</h5>
                                        </a>
                                    @endguest
                                </div>
                            </div>
                        @endforeach
                    </div>                                      --}}
     </div>
 </div>
 <!-- Service End -->

<!-- Medis Start -->
<div class="container-fluid bg-primary bg-appointment my-5 wow fadeInUp" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeInUp;">
    <div class="container">
        <div class="row gx-5 align-items-center">
            <div class="col-lg-6 py-5">
                <div class="py-5">
                    <h1 class="display-5 text-white mb-4">Meet Our Certified & Experienced Medical Personnel!</h1>
                    <p class="text-white mb-0">
                        Temukanlah ragam individu berbakat, penuh dedikasi, siap memberikan perawatan kesehatan yang tak tertandingi dan dukungan yang menginspirasi,
                        memenuhi segala kebutuhan kesehatan Anda dengan keunggulan yang tak terbantahkan.
                    </p>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="background-image-div" style="background-image: url('../img/med.jpg'); background-size: cover; height: 400px; position: relative; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                                <a href="{{ route('nurse') }}" class="btn btn-primary btn-lg rounded-pill animate__animated" id="animatedBtn" style="position: absolute; bottom: 20px;">Nurse</a>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                                <a href="{{ route('doctor') }}" class="btn btn-primary btn-lg rounded-pill animate__animated" id="animatedBtn" style="position: absolute; bottom: 20px;">Doctor</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
<!-- Medis End -->


 <!-- Galery Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
     <div class="container">
         <div class="row g-5">
             <div class="col-lg-5">
                 <div class="section-title mb-4">
                     <h5 class="position-relative d-inline-block text-primary text-uppercase">'Welcome to Our Gallery!' </h5>
                     <h1 class="display-5 mb-0">Tempat di mana kesehatan menjadi yang utama.</h1>
                 </div>
                 <p class="mb-4">Join us as we navigate through each health care moment that inspires, motivates, and aids in managing diabetes for a more meaningful and joyful life</p>

             </div>
             <div class="col-lg-7">
                 <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                     <div class="price-item pb-4">
                         <div class="position-relative">
                             <img class="img-fluid rounded-top" src="img/galery-3.png" alt="">
                             <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                             </div>
                         </div>
                         <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                             <h4>Laboratorium Penelitian</h4>
                         </div>
                     </div>
                     <div class="price-item pb-4">
                         <div class="position-relative">
                             <img class="img-fluid rounded-top" src="img/galery-4.png" alt="">
                             <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                             </div>
                         </div>
                         <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                             <h4>Dokter melakukan analisis</h4>
                         </div>
                     </div>
                     <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/galery-8.png" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Pemeriksaan pasien oleh Dokter</h4>
                        </div>
                    </div>
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/galery-2.png" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Ruang rawat inap pasien</h4>
                        </div>
                    </div>
                    <div class="price-item pb-4">
                        <div class="position-relative">
                            <img class="img-fluid rounded-top" src="img/galery-5.png" alt="">
                            <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                            </div>
                        </div>
                        <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                            <h4>Potret Perawat GlucoSync</h4>
                        </div>
                    </div>
                     <div class="price-item pb-4">
                         <div class="position-relative">
                             <img class="img-fluid rounded-top" src="img/galery-6.png" alt="">
                             <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                             </div>
                         </div>
                         <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                             <h4>Pasien Konsultasi dengan Dokter</h4>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </div>
 <!-- Galery End -->


 <!-- Artikel Start -->
 <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-7">
                <div class="section-title mb-4">
                    <h5 class="position-relative d-inline-block text-primary text-uppercase">Artikel</h5>
                    <h1 class="display-5 mb-0">Tingkatkan Pemahaman Anda tentang Diabetes dengan Membaca Artikel Kami</h1>
                    <p class="mb-4">Pilih salah satu artikel dengan klik "Baca Selengkapnya" Coba sekarang juga! Dapatkan fakta menarik lainnya</p>
                </div>
            </div>

            <div class="col-lg-5">
                <div class="background-image-div" style="background-image: url('../img/artikel.jpg'); background-size: cover; height: 400px; position: relative; box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.3);">
                    <div class="card-body d-flex flex-column justify-content-center align-items-center h-100">
                        <a href="{{ route('artikel.index') }}" class="btn btn-primary btn-lg rounded-pill animate__animated" id="animatedBtn" style="position: absolute; bottom: 20px;">Click Here!</a>
                    </div>
                </div>
            </div>


        </div>
    </div>
</div>


<!-- Artikel End -->



     <!-- Testimonial Start -->
     <div class="container-fluid bg-testimonial py-5 mb-5 wow fadeInUp" data-wow-delay="0.1s">
         <div class="container py-5">
             <div class="row justify-content-center">
                 <div class="col-lg-7">
                     <div class="owl-carousel testimonial-carousel rounded p-5 wow zoomIn" data-wow-delay="0.6s">
                         <div class="testimonial-item text-center text-white">
                             <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-1.jpg" alt="">
                             <p class="fs-5">Saya telah menggunakan layanan kesehatan diabetes ini selama beberapa bulan sekarang dan saya sangat terkesan.</p>
                             <hr class="mx-auto w-25">
                             <h4 class="text-white mb-0">Mirna Salihin</h4>
                         </div>
                         <div class="testimonial-item text-center text-white">
                             <img class="img-fluid mx-auto rounded mb-4" src="img/testimonial-2.jpg" alt="">
                             <p class="fs-5">Website ini adalah sumber informasi yang sangat baik tentang diabetes. Saya baru saja didiagnosis dengan diabetes tipe 2, dan website ini telah membantu saya memahami kondisi saya dengan lebih baik.</p>
                             <hr class="mx-auto w-25">
                             <h4 class="text-white mb-0">Jessica Mirna</h4>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <!-- Testimonial End -->


 <!-- Offer Start -->
 {{-- <div class="container-fluid bg-offer my-5 py-5 wow fadeInUp" data-wow-delay="0.1s">
     <div class="container py-5">
         <div class="row justify-content-center">
             <div class="col-lg-7 wow zoomIn" data-wow-delay="0.6s">
                 </div>
             </div>
         </div>
     </div>
 </div> --}}
 <!-- Offer End -->

    <!-- Full Screen Search Start -->
    {{-- <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-primary p-3" placeholder="Type search keyword">
                        <button class="btn btn-primary px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Full Screen Search End -->

    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-xl-4 col-lg-6 wow slideInUp" data-wow-delay="0.1s">
                    <div class="bg-light rounded h-100 p-5">
                        <div class="section-title">
                            <h5 class="position-relative d-inline-block text-primary text-uppercase">Contact Us</h5>
                            <h1 class="display-6 mb-4">Feel Free To Contact Us</h1>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-geo-alt fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Our Office</h5>
                                <span>Jl. Dharmahusada Permai, Mulyorejo, Kec. Mulyorejo, Surabaya, Jawa Timur 60115</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center mb-2">
                            <i class="bi bi-envelope-open fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Email Us</h5>
                                <span>glucosync@gmail.com</span>
                            </div>
                        </div>
                        <div class="d-flex align-items-center">
                            <i class="bi bi-phone-vibrate fs-1 text-primary me-3"></i>
                            <div class="text-start">
                                <h5 class="mb-0">Call Us</h5>
                                <span>0815-2595-4792</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.7445834558857!2d112.7848442!3d-7.269879599999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fbdf60c8469f%3A0x3036be09c9fe39b6!2sRumah%20Sakit%20Universitas%20Airlangga%20(RS%20UNAIR)!5e0!3m2!1sid!2sid!4v1701068970779!5m2!1sid!2sid"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>

@endsection
