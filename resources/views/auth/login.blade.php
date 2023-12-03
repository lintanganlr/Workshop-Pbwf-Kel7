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
                                <form method="POST" action="{{ route('login') }}">

                                    @csrf

                                    <div class="row mb-3">

                                        <label for="username" class="col-md-4 col-form-label text-md-end">Username</label>
                                        <div class="col-md-6">
                                            <input id="username" type="username" class="form-control @error('username') is-invalid @enderror" name="username" required>

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

                                    <div class="row mb-3">
                                        <div class="col-md-6 offset-md-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row mb-0">
                                        <div class="col-md-8 offset-md-4">
                                            <button type="submit">Login</button>
                                        {{-- @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif --}}
                                        {{-- </div>
                                    </div> --}}
                                    {{-- <div class="d-flex align-items-center justify-content-center" style="margin-top: 10px;">
                                        <p class="fs-5 mb-0 ">New to GlucoSync?</p>
                                        <a class="text-primary fw-bold ms-2"  href="register">Create an account</a>
                                    </div> --}}
                                {{-- </form>
                                <div class="kembali-input">
                                    <a href="{{ route('home')}}"><button>Back To Home</button></a>
                                    </div>
                                </main>
                                <div id="modal" class="pop-up-modal">
                                    <h2>Login gagal!</h2>
                                    <p>Silakan coba lagi</p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>  --}}
  <!--TODO 1 : Ubah div menjadi form-->
    @if(session('success'))
        <div>{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div>{{ session('error') }}</div>
    @endif
    <form class="login-input" method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <div class="kembali-input">
    <a href="{{ route('home')}}"><button>KEMBALI</button></a>
    </div>
</main>
<div id="modal" class="pop-up-modal">
    <h2>Login gagal!</h2>
    <p>Silakan coba lagi</p>
</div>

<script src="assets/js/index.js"></script>
<script src="assets/js/login.js"></script>
@endsection
