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
    <form class="login-input" method="POST" action="{{ route('login') }}">
        @csrf
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="{{ route('register') }}">Create New Account</a></p>
  </div>

<script src="assets/js/index.js"></script>
<script src="assets/js/login.js"></script>
@endsection


