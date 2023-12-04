@extends('layouts.app')

@section('content')
<div class="login-input">
    <h2 class="text-regis"> GlucoSync.</h2>

    <!-- Formulir -->
    @if(session('success'))
      <div>{{ session('success') }}</div>
    @endif
    @if(session('error'))
      <div>{{ session('error') }}</div>
    @endif
    <form method="POST" action="{{ route('register') }}">
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
      <!-- Sisipkan elemen lainnya sesuai kebutuhan -->
      <button type="submit">Register</button>
    </form>
  </div>

<script src="assets/js/index.js"></script>
<script src="assets/js/login.js"></script>
@endsection


