@extends('layout.main')
@section('content')
    <div class="navbar">
        <div class="navbar-item navbar-left" style="line-height: 40px;">
            <p style="font-size: 20px; text-align: center; margin: 0;">Tulisan Konsultasi untuk:</p>
        </div>
        <div class="navbar-item navbar-right">
            @if(session('nama_pasien'))
                <p style="text-align: center; line-height: 40px;">
                    <span style="font-weight: 600; font-size: 18px;">Pasien:</span>
                    <span style="font-weight: 500; font-size: 18px; vertical-align: middle;"> {{ session('nama_pasien') }}</span>
                    <a href="{{ route('pilihan_pasien') }}" style="margin-left: 10px;">Ganti</a>
                </p>
            @endif
        </div>
    </div>
        <div class="container">
        <table class="box doctor-box">
            <tr>
                <td>
                    <img src="gambar_dokter.jpg" alt="Gambar Dokter">
                </td>
                <td>
                    <p>Nama Dokter</p>
                    <p>Spesialis</p>
                </td>
            </tr>
        </table>

        <table class="box price-box">
            <tr>
                <td>
                    <p>Biaya sesi untuk 1 jam</p>
                    <p>Rp 35.000</p>
                </td>
                <td></td>
                <td>
                    <p>Biaya Layanan</p>
                    <p>Rp 1.000</p>
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <p>Pembayaranmu</p>
                    <p>Rp 36.000</p>
                </td>
            </tr>
        </table>

        <div class="confirm-box">
            <a href="#" class="btn-confirm">Konfirmasi</a>
        </div>
    </div>
@endsection




<style>
/* CSS untuk navbar */
.navbar {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #f0f0f0;
    padding: 10px;
}

.navbar-item {
    border-right: 4px solid #333; /* Lebar garis samping 4px */
    padding: 5px 10px;
}

.navbar-left {
    text-align: left;
}

.navbar-right {
    text-align: right;
}
.container {
    display: flex;
    flex-direction: column;
    align-items: center;
    margin-top: 20px;
}

.box {
    width: 693px;
    height: 255px;
    background-color: #f0f0f0;
    padding: 20px;
    border-radius: 30px;
    overflow: hidden; /* Mengatasi gambar yang keluar dari kotak */
    margin-bottom: 5px; /* Jarak 5px antara setiap box */
}


.doctor-box {
    display: flex;
    align-items: center;
}

.doctor-info {
    display: flex;
    align-items: center;
}

.doctor-info img {
    width: 80px;
    border-radius: 50%;
    margin-right: 20px;
}

.doctor-details p {
    margin: 5px 0;
}

.btn-confirm {
    display: block;
    width: 100%;
    padding: 10px;
    text-align: center;
    background-color: #3366ff;
    color: white;
    text-decoration: none;
    border-radius: 5px;
}

.btn-confirm:hover {
    background-color: #254eda;
}



</style>





{{-- @extends('layout.main')
@section('content')
<div class="order-summary-container">
    <div class="order-summary-header">
      <div class="doctor-info">
        <div class="doctor-pic-container">
          <div class="order-summary-doctor-pic">
            <img class="order-summary-avatar" src="https://d1e8la4lqf1h28.cloudfront.net/images/373873_13-4-2023_14-53-12.jpeg" alt="Doctor Avatar">
          </div>
        </div>
        <div class="doctor-details">
          <span class="order-summary-doctor-name">Dr. Febri Kurniawarsih</span>
          <span class="order-summary-doctor-speciality">Dokter Umum</span>
        </div>
      </div>
    </div>
    <div class="order-summary-body">
      <div class="payment-details">
        <div class="payment-summary">
          <div class="fee-container">
            <span class="order-summary-fee-label"> Biaya sesi untuk <strong>30 menit</strong></span>
            <span class="order-summary-fee">Rp 70.000</span>
          </div>
          <div class="fee-container">
            <span class="order-summary-fee-label">Biaya Layanan</span>
            <span class="order-summary-fee">Rp 1.000</span>
          </div>
          <div class="to-pay-container">
            <span class="order-summary-to-pay-label">Pembayaranmu</span>
            <span class="order-summary-to-pay">Rp 71.000</span>
          </div>
        </div>
      </div>
      <div class="promo-code">
        <div class="promo-code-input-wrapper">
          <div class="promo-code-input-holder">
            <input type="text" id="promo-code-input" name="promoCode" placeholder="Masukkan kode promo">
          </div>
          <div class="apply-promo-btn-container">
            <button id="apply-promo-btn" class="apply-promo-btn" disabled> Terapkan </button>
          </div>
        </div>
        <div class="applied-coupons">
          <div class="applied-coupons-max-msg-container">
            <span class="applied-coupons-max-msg"> *Kamu bisa pakai hingga 3 kupon. </span>
          </div>
        </div>
      </div>
    </div>
    <div class="order-summary-footer">
      <button id="order-next-btn" class="order-next-btn"> Konfirmasi </button>
    </div>
  </div>
  
@endsection --}}
