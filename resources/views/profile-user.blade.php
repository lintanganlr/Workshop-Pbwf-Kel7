@extends('layout.main2')
@section('content')
<div>
  <div class="container-cust">
    <div class="profiles__header">
      <div class="profiles__select">
          <div class="profiles--title">Profil Pasien:</div>
      </div>
 <form method="GET" action="{{ route('logout') }}">
    @csrf
    <button type="submit">Logout</button>
</form>
    </div>
    <div class="row">
      <div class="custom-profile-card">
        <div class="tambah-profile">
          <button id="tambahButton">
              <div class="card-title d-flex align-items-start justify-content-center">
                  <i class='bx bx-plus-circle' style='font-size: 40px;'></i>
              </div>
              <span>Tambah identitas pasien</span>
          </button>
        </div>
      </div>
      <div class="custom-profile-card">
          <div class="cust-header">
            halo
          </div>
          <div class="cust-info">
            hao
          </div>
      </div>
      <!-- Tambah card sesuai kebutuhan -->
    </div>
  </div>
  <div class="popup-form" id="popupForm">
    <form id="formPasien">
        <label for="nama">Nama Pasien:</label>
        <input type="text" id="nama" name="nama" required>

        <label for="noTelepon">No Telepon Pasien:</label>
        <input type="tel" id="noTelepon" name="noTelepon" required>

        <label for="email">Email Pasien:</label>
        <input type="email" id="email" name="email" required>

        <label for="alamat">Alamat Pasien:</label>
        <input type="text" id="alamat" name="alamat" required>

        <label for="jenisKelamin">Jenis Kelamin Pasien:</label>
        <select id="jenisKelamin" name="jenisKelamin" required>
            <option value="laki-laki">Laki-laki</option>
            <option value="perempuan">Perempuan</option>
        </select>

        <input type="submit" value="Simpan">
    </form>
  </div>

  <style>
    /* Contoh gaya CSS untuk struktur header profil */
    .div{
      position:relative;
      padding: 1500px;
      background-color: #f9f9f9;
    }
    .container-cust {
    /* background-color: #f9f9f9; */
    /* padding: 70px; Sesuaikan padding sesuai kebutuhan */
    }
    .profiles__header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 15px;
        /* background-color: #f9f9f9; */

        /* Gaya lain yang Anda inginkan */
    }

    .profiles--title {
        font-weight: bold;
        /* Gaya lain yang Anda inginkan */
    }

    .profiles__logout {
        background-color: #7D1219; /* Warna latar belakang */
        color: #ffffff; /* Warna teks */
        font-size: 12px; /* Ukuran teks */
        padding: 8px 16px; /* Padding tombol */
        border: none; /* Hapus border jika tidak diperlukan */
        border-radius: 4px; /* Untuk sudut yang lebih lembut */
        cursor: pointer; /* Ubah cursor saat mengarah ke tombol */
        /* Gaya lain yang Anda inginkan */
    }

    .profiles__logout:hover {
        background-color: #5f0f15; /* Warna latar belakang saat dihover */
        /* Gaya lain yang Anda inginkan saat dihover */
    }
    /* Gaya untuk card profil */
    .row {
    display: flex;
    flex-wrap: wrap;
    }
    .tambah-profile {
      width: 327px;
      height: 336px;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f9f9f9;
      color: #7D1219;
      border-radius: 8px;
      padding: 10px;
    }

    /* Styling untuk popup form */
    .popup-form {
        display: none;
        position: fixed;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        background-color: #fff;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 8px;
        z-index: 9999;
    }
    .card-tittle{
      color:#7D1219;
    }
    /* Styling untuk button */
    .tambah-profile button {
        background: none;
        border: none;
        cursor: pointer;
        outline: none;
    }

    /* Styling untuk ikon */
    .tambah-profile i {
        font-size: 40px;
        align-items: center;
    }

    /* Styling untuk span */
    .tambah-profile span {
        color: #7D1219; /* Warna teks */
    }


    /* Gaya untuk setiap card profil */
    .custom-profile-card {
        width: 327px;
        height: 336px;
        margin: 20px 10px 10px 30px; /* Atur margin atas 20px, kanan 20px, bawah 10px, kiri 30px */
        /* Style lainnya sesuai kebutuhan */
        position: relative;
    }

    /* Mengatur bentuk header */
    .custom-profile-card .cust-header {
        width: 100%;/* Lebar sesuai dengan parent (.custom-profile-card) */
        border-top-left-radius: 5px;
        border-top-right-radius: 5px;
        background-color: #7D1219;
        /* Properti lainnya sesuai kebutuhan */
        position: absolute;
        height: 30%; /* Sesuaikan tinggi */
    }

    /* Mengatur bentuk informasi */
    .custom-profile-card .cust-info {
        width: 100%; /* Lebar sesuai dengan parent (.custom-profile-card) */
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        background-color: #ce4545;
        /* Properti lainnya sesuai kebutuhan */
        height: 70%; /* Sesuaikan tinggi */
        position: absolute;
        bottom: 0;
    }
  </style>
  <script>
  // Memunculkan popup form saat tombol diklik
  document.getElementById("tambahButton").addEventListener("click", function() {
      document.getElementById("popupForm").style.display = "block";
  });

  // Menyembunyikan popup form saat formulir disubmit
  document.getElementById("formPasien").addEventListener("submit", function(event) {
      event.preventDefault(); // Menghentikan aksi bawaan submit form
      document.getElementById("popupForm").style.display = "none";
      // Lakukan hal lain dengan data formulir seperti mengirim ke server atau menampilkan kembali informasi yang diisi
  });
  </script>
</div>

@endsection
