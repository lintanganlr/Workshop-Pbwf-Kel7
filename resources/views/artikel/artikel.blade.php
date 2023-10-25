@extends('layout.main')
@section('content')


    <!-- Hero Start -->
    <div class="container-fluid bg-primary py-5 hero-header mb-5">
        <div class="row py-3">
            <div class="col-12 text-center">
                <h1 class="display-3 text-white animated zoomIn">Artikel</h1>
                <a href="" class="h4 text-white">Home</a>
                <i class="far fa-circle text-white px-2"></i>
                <a href="" class="h4 text-white">Artikel</a>
            </div>
        </div>
    </div>
    <!-- Hero End -->


    <!-- About Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-5">
                    <div class="section-title mb-4">
                        <h5 class="position-relative d-inline-block text-primary text-uppercase">Artikel</h5>
                        <h1 class="display-5 mb-0">Tingkatkan Pemahaman Anda tentang Diabetes dengan Membaca Artikel Kami</h1>
                    </div>
                    <p class="mb-4">Pilih salah satu artikel dengan klik "Baca Selengkapnya" Coba sekarang juga! Dapatkan fakta menarik lainnya</p>
                </br>
                </div>
                <div class="col-lg-7">
                    <div class="owl-carousel price-carousel wow zoomIn" data-wow-delay="0.9s">
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/pricing-1.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Pahami Diabetes: Pengertian, Tipe, dan Gejalanya</h4>
                                <a href="appointment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/pricing-2.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Mengenal Komplikasi Diabetes: Pencegahan dan Pengobatan</h4>
                                <a href="appoinment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                            </div>
                        </div>
                        <div class="price-item pb-4">
                            <div class="position-relative">
                                <img class="img-fluid rounded-top" src="img/pricing-3.jpg" alt="">
                                <div class="d-flex align-items-center justify-content-center bg-light rounded pt-2 px-3 position-absolute top-100 start-50 translate-middle" style="z-index: 2;">
                                </div>
                            </div>
                            <div class="position-relative text-center bg-light border-bottom border-primary py-5 p-4">
                                <h4>Pengelolaan Diabetes: Tips Menjaga Gula Darah Tetap Stabil</h4>
                                <a href="appoinment.html" class="btn btn-primary py-2 px-4 position-absolute top-100 start-50 translate-middle">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing End -->

{{-- <section id="article" class="article">
        <div class="container">
          <h2>Why Choose GlugoSync?</h2>
          <h4>Kami Peduli Tentang Anda</h4>
  <p>Ketika Anda memutuskan untuk memilih layanan kesehatan diabetes, Anda mencari lebih dari sekadar informasi medis. Anda mencari sumber yang peduli, mendengarkan, dan memahami perjuangan pribadi Anda. Di sini, kami memiliki tim yang penuh perhatian dan siap mendukung Anda. Kami tidak hanya melihat Anda sebagai pasien, tetapi sebagai individu dengan kebutuhan unik.</p>

  <h4>Informasi Terpercaya dan Terkini</h4>
  <p>Kami mengerti bahwa pengetahuan adalah kekuatan. Oleh karena itu, kami berkomitmen untuk menyediakan informasi medis terpercaya dan terkini kepada Anda. Dengan panduan pengelolaan diabetes yang mudah dimengerti, artikel medis yang dapat dipercaya, dan pembaruan terkini tentang pengobatan dan perawatan, kami memastikan bahwa Anda selalu memiliki akses ke informasi yang benar dan relevan.</p>

 <h4>Dukungan Komunitas yang Solid</h4>
 <p>Kami telah menciptakan komunitas di mana Anda dapat berinteraksi dengan individu lain yang juga menghadapi diabetes. Ini adalah tempat di mana Anda bisa berbagi pengalaman, mendapatkan dukungan emosional, dan menjalin persahabatan yang kuat. Ketika Anda memilih kami, Anda tidak akan pernah merasa sendirian dalam perjalanan Anda.</p>

 <h4>Alat Praktis untuk Pengelolaan Diabetes</h4>
 <p>Kami menyediakan alat praktis seperti kalkulator glikemik, aplikasi mobile, dan sumber daya manajemen makanan yang dapat membantu Anda memantau gula darah, merencanakan makanan, dan mengelola obat. Alat ini dirancang untuk membuat hidup Anda lebih mudah.</p>

 <h4>Edukasi yang Meningkatkan Pengetahuan Anda</h4>
 <p>Kami percaya bahwa pengetahuan adalah kunci dalam pengelolaan diabetes yang efektif. Oleh karena itu, kami menyediakan kursus dan pelatihan yang membantu Anda memahami diabetes, mengelola diet Anda, dan mengambil langkah-langkah yang tepat dalam menjaga kesehatan Anda.</p>

 <h4>Kolaborasi dengan Profesional Kesehatan</h4>
 <p>Kami memahami bahwa diabetes adalah kondisi yang memerlukan perhatian medis yang serius. Kami dapat membantu menghubungkan Anda dengan dokter dan profesional kesehatan yang berpengalaman dalam pengelolaan diabetes. Kolaborasi dengan profesional kesehatan adalah kunci keberhasilan dalam pengelolaan kondisi ini.</p>
 <p>Kami adalah mitra perawatan yang Anda bisa andalkan dalam perjalanan mengelola diabetes Anda. Ketika Anda memilih layanan kesehatan diabetes pada kami, Anda memilih tim yang peduli, informasi yang terpercaya, dukungan komunitas, alat praktis, edukasi, dan kolaborasi medis. Bersama-sama, kita akan menghadapi diabetes dengan tekad kuat dan pengetahuan yang lebih baik.</p>
 <p>Jadi, mengapa memilih layanan kesehatan diabetes pada kami? Karena kami peduli tentang Anda, dan kami ada di sini untuk membantu Anda menjalani hidup yang lebih sehat dan bahagia dengan diabetes.</p>
    </div>
</div>
  </section><!-- End Hero --> --}}
  @endsection

