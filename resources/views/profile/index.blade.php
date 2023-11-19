@extends('layout.main2')
@section('content')
<div>
    <div class="container-cust">
        <div class="profiles__header">
        <div class="profiles__select">
            <div class="profiles--title">Profil Pasien:</div>
        </div>
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="profiles__logout">LogOut</button>
        </form>
        </div>
        
        <div class="row" style="display: flex;">
            <!-- Menampilkan nama pasien yang disimpan di session -->
            @if(session()->has('data_pasien'))
                @foreach(session('data_pasien') as $pasien)
                    <div class="custom-profile-card" style="flex: 1;">
                        <div class="cust-header">
                            <div class="card-title text-center" style="color:#7D1219;">
                                <img src="img/profile.jpg" alt="Profile Image" style="width: 35px; height: 35px; border-radius: 50%; margin-top:20px;">
                                <div style="font-size: 24px; color: #ffffff; margin-top: 10px;">
                                    {{ $pasien['nama_pasien'] }}
                                </div>
                            </div>
                        </div>
                        <div class="cust-info">
                            <div>
                                <i class='bx bx-phone'></i> No telepon: {{ $pasien['no_telp_pasien'] }}
                            </div>
                            <div>
                                <i class='bx bxl-gmail'></i> Email: {{ $pasien['email_pasien'] }}
                            </div>
                            <div>
                                <i class='bx bx-home'></i> Alamat: {{ $pasien['alamat_pasien'] }}
                            </div>
                            <div>
                                <i class='bx bx-child'></i> Jenis Kelamin: {{ $pasien['jk_pasien'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="custom-profile-card" style="flex: 1;">
                    <div class="tambah-profile">
                        <button class="tambahButton">
                            <div class="card-title d-flex align-items-start justify-content-center" style="color:#7D1219">
                                <i class='bx bx-plus-circle' style='font-size: 40px;'></i>
                            </div>
                            <span>Tambah identitas pasien!</span>
                        </button>
                    </div>
                </div>

            @else
            <div class="custom-profile-card" style="flex: 1;">
                <div class="tambah-profile">
                    <button class="tambahButton">
                        <div class="card-title d-flex align-items-start justify-content-center" style="color:#7D1219">
                            <i class='bx bx-plus-circle' style='font-size: 40px;'></i>
                        </div>
                        <span>Tambah identitas pasien</span>
                    </button>
                </div>
            </div>
            @endif
        </div>
    </div>
    

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.tambahButton').on('click', function() {
                window.location.href = '/profile/create'; // Mengarahkan ke halaman pembuatan profil
            });
        });
    </script>

    
</div>
  
@endsection

<style>
    /* Contoh gaya CSS untuk struktur header profil */
    .div{
      position:relative;
      padding: 1500px;
      background-color: #f9f9f9;
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
    margin-left: 20px; /* Margin kiri */
    margin-right: 20px; /* Margin kanan */
    }


    .card-tittle{
      color:#7D1219;
    }
    .card-tittle span{
      color:#ffffff;
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


    .cust-header {
    width: 327px;
    height: 336px;
    border-top-left-radius: 5px;
    border-top-right-radius: 5px;
    background-color: #7D1219;
    /* Properti lainnya sesuai kebutuhan */
    height: 40%; /* Sesuaikan tinggi */

    /* Menambahkan margin di kanan dan kiri */
    margin-right: 20px;
    margin-left: 20px;
    }


    /* Mengatur bentuk informasi */
    .cust-info {
        width: 327px;
        height: 336px;
        border-bottom-left-radius: 5px;
        border-bottom-right-radius: 5px;
        background-color: #f9f9f9;
        /* Properti lainnya sesuai kebutuhan */
        margin-right: 20px;
        margin-left: 20px;
        height: 60%; /* Sesuaikan tinggi */
        /* position: absolute;
        bottom: 0; */
    }
    .cust-info div i {
    margin-top: 20px;
    padding-right: 10px; /* Atur jarak di sebelah kanan ikon (opsional) */
    padding-left: 10px; /* Atur jarak di sebelah kiri ikon */
    }

    

    /* CSS untuk style label */
    /* .form-label {
    font-weight: bold;
    } */

    /* CSS untuk style input */
    /* .form-control, .form-select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
    } */

    /* CSS untuk style button */
    .btn {
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    background-color: #7D1219;
    color: white;
    cursor: pointer;
    transition: background-color 0.3s ease;
    margin-top: 10px;
    }

    .btn:hover {
    background-color: #5f0f15;
    }

    /* CSS untuk style select */
    /* .form-select {
    width: 100%;
    padding: 8px;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
    appearance: none;
    -webkit-appearance: none;
    -moz-appearance: none;
    background-repeat: no-repeat;
    background-position-x: calc(100% - 10px);
    background-position-y: center;
    } */

    /* CSS untuk style select (hover) */
    /* .form-select:hover {
    border-color: #555;
    } */

    /* CSS untuk style select (focus) */
    /* .form-select:focus {
    border-color: #7D1219;
    box-shadow: 0 0 0 0.1rem rgba(0, 123, 255, 0.25);
    } */
    </style>