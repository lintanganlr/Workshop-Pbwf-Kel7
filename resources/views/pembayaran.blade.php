@extends('layout.main')
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
  
@endsection
