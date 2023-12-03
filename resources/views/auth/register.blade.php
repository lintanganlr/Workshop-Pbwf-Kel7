@extends('layouts.app')

@section('content')
{{-- <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"data-sidebar-position="fixed" data-header-position="fixed">
    <div class="position-relative overflow-hidden radial-gradient min-vh-100 d-flex align-items-center justify-content-center">
        <div class="d-flex align-items-center justify-content-center w-100">
            <div class="row justify-content-center w-100">
                <div class="col-md-8 col-lg-6 col-xxl-3">
                    <div class="card mb-0">
                        <div class="card-body">
                            <p class="text-center" style="font-family: 'Poppins', sans-serif; font-weight: 600; font-size: 25px; justify-content: center;color:#7D1219">GlucoSync.</p>
                            <p class="text-center"style="margin-top:-10px">Diabetes Friendly</p>
                            <div class="card-body">
                                <form method="POST" action="{{ route('register') }}">


                                    @csrf

                                    <div class="row mb-3">
                                        <label for="name" class="col-md-4 col-form-label text-md-end">Nama</label>

                                        <div class="col-md-6">
                                            <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" required>

                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>

                                        <div class="col-md-6">
                                            <input id="username" type="text" class="form-control @error('username') is-invalid @enderror" name="username" required>

                                            @error('username')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="password" class="col-md-4 col-form-label text-md-end">Password</label>

                                        <div class="col-md-6">
                                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required>

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    {{-- <div class="row mb-3">
                                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">Co</label>

                                        <div class="col-md-6">
                                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                                        </div>
                                    </div> --}}

                                    {{-- <div class="row mb-3">
                                        <label for="notelp" class="col-md-4 col-form-label text-md-end">No. Telp</label>

                                        <div class="col-md-6">
                                            <input id="notelp" type="tel" class="form-control @error('notelp') is-invalid @enderror" name="notelp" required>

                                            @error('notelp')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="email" class="col-md-4 col-form-label text-md-end">Email</label>

                                        <div class="col-md-6">
                                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required>

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="row mb-3">
                                        <label for="alamat" class="col-md-4 col-form-label text-md-end">Alamat</label>

                                        <div class="col-md-6">
                                            <input id="alamat" type="text" class="form-control @error('alamat') is-invalid @enderror" name="alamat" required> --}}

                                            {{-- @error('alamat')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row mb-0">
                                        <div class="col-md-6 offset-md-4">
                                            <button type="submit">Register</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  --}}

@if(session('success'))
<div>{{ session('success') }}</div>
@endif
@if(session('error'))
<div>{{ session('error') }}</div>
@endif
<form class="login-input" method="POST" action="{{ route('register') }}">
@csrf
<label for="name">Nama</label>
<input type="text" id="name" name="name" required>
<label for="username">Username</label>
<input type="text" id="username" name="username" required>
<label for="password">Password</label>
<input type="text" id="password" name="password" required>
<label for="notelp">No. Telp</label>
<input type="text" id="notelp" name="notelp" required>
<label for="email">Email</label>
<input type="email" id="email" name="email" required>
<label for="alamat">Alamat</label>
<input type="text" id="alamat" name="alamat" required>
<button type="submit">Register</button>
</form>
</main>
{{-- <div id="modal" class="pop-up-modal">
<h2>Register Berhasil!</h2> --}}
{{-- <a href="{{ route('/home2')}}"><button>KEMBALI</button></a> --}}
{{-- </div> --}}

<script src="assets/js/index.js"></script>
<script src="assets/js/login.js"></script>
@endsection


