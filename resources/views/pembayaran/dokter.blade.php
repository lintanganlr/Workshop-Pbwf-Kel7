@extends('layout.main')
@section('content')
<div class="container">
    <!-- Bagian navigasi dan informasi lainnya -->
    <div class="container">
        <!-- Bagian navigasi dan informasi lainnya -->
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

    @foreach($doctors as $doctor)
    <div class="box doctor-box">
        <div class="doctor-info">
            <img src="{{ asset('medisimg/'. $doctor->image) }}" alt="{{ $doctor->image }}">
            <div class="doctor-details">
                <p>{{ $doctor->nama_medis }}</p>
                <p>{{ $doctor->spesialisasi_medis }}</p>
            </div>
        </div>
    </div>

    <!-- Bagian informasi pembayaran -->
    <table class="box price-box">
        <tr>
            <td>
                <div class="flex flex-col order-summary__payment-summary">
                    <div class="flex flex-row justify-between order-summary__fee-container">
                        <span class="order-summary__fee-label">Biaya sesi untuk <strong>1 jam</strong></span>
                        <!-- Biaya Sesi -->
                        <span class="order-summary__fee">Rp 40.000</span>
                    </div>
                    <!-- Biaya Layanan -->
                    <div class="flex flex-row justify-between order-summary__fee-container">
                        <span class="order-summary__fee-label">Biaya Layanan</span>
                        <span class="order-summary__fee">Rp 1.000</span>
                    </div>
                    <!-- Total Pembayaran -->
                    <div class="flex flex-row justify-between order-summary__to-pay-container">
                        <span class="order-summary__to-pay-label">Pembayaranmu</span>
                        <span class="order-summary__to-pay">Rp 41.000</span>
                    </div>
                </div>
            </td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

    <!-- Tombol konfirmasi -->
    <div class="confirm-box">
        <button type="submit" class="btn-confirm">Konfirmasi</button>
    </div>
    @endforeach

</div>
@endsection


{{-- 
@extends('layout.main')
@section('content')
    <div class="container">
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

        <!-- Doctor's Information -->
        <div class="box doctor-box">
            @foreach($doctors as $doctor)
                <div class="doctor-info">
                    <img src="{{ asset('medisimg/'. $doctor->image)}}" alt="{{$doctor->image}}">
                    <div class="doctor-details">
                        <p>{{ $doctor->nama_medis }}</p>
                        <p>{{ $doctor->spesialisasi_medis }}</p>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- Payment Information -->
        <table class="box price-box">
          <tr>
              <td>
                  <div class="flex flex-col order-summary__payment-summary">
                      <div class="flex flex-row justify-between order-summary__fee-container">
                          <span class="order-summary__fee-label">Biaya sesi untuk <strong>1 jam</strong></span>
                          <!-- Biaya Sesi -->
                          <span class="order-summary__fee">Rp 40.000</span>
                      </div>
                      <!-- Biaya Layanan -->
                      <div class="flex flex-row justify-between order-summary__fee-container">
                          <span class="order-summary__fee-label">Biaya Layanan</span>
                          <span class="order-summary__fee">Rp 1.000</span>
                      </div>
                      <!-- Total Pembayaran -->
                      <div class="flex flex-row justify-between order-summary__to-pay-container">
                          <span class="order-summary__to-pay-label">Pembayaranmu</span>
                          <span class="order-summary__to-pay">Rp 41.000</span>
                      </div>
                  </div>
              </td>
              <td></td>
              <td></td>
              <td></td>
              <td></td>
          </tr>
      </table>

        <!-- Confirmation Button -->
        <div class="confirm-box">
            <!-- Form to submit doctor's details to pembayaran.dokter route -->
            <form action="{{ route('pembayaran.dokter') }}" method="GET">
                @foreach($doctors as $doctor)
                    <input type="hidden" name="doctor_image" value="{{ $doctor->image }}">
                    <input type="hidden" name="doctor_name" value="{{ $doctor->nama_medis }}">
                    <input type="hidden" name="doctor_specialization" value="{{ $doctor->spesialisasi_medis }}">
                @endforeach
                <button type="submit" class="btn-confirm">Konfirmasi</button>
            </form>
        </div>
    </div>
@endsection --}}






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
<style>
  .container {
      display: flex;
      flex-direction: column;
      align-items: center;
  }
  .box {
      width: 100%;
      padding: 20px;
      box-sizing: border-box;
      border: 1px solid #ddd;
      margin-bottom: 20px;
  }
  .order-summary__payment-summary {
      width: 100%;
  }
  .order-summary__fee-container {
      width: 100%;
      margin-bottom: 10px;
  }
  .order-summary__fee-label {
      width: 50%;
      text-align: left;
  }
  .order-summary__fee {
      width: 50%;
      text-align: right;
  }
  .order-summary__to-pay-container {
      width: 100%;
      margin-top: 20px;
  }
  .order-summary__to-pay-label {
      width: 50%;
      text-align: left;
  }
  .order-summary__to-pay {
      width: 50%;
      text-align: right;
      font-weight: bold;
  }
  .confirm-box {
      display: flex;
      justify-content: center;
  }
  .btn-confirm {
      background-color: #007bff;
      color: white;
      padding: 10px 20px;
      text-decoration: none;
      border-radius: 5px;
  }
</style>

<script>
  window.location = "{{ route('pembayaran.dokter', $doctor->id) }}";
</script>




