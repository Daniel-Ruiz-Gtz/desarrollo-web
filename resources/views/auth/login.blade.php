@extends('layouts.auth-tabler')

@section('content')
  <form class="card" method="POST" action="{{ route('login') }}">
      @csrf
    <div class="card-body p-6">
      <div class="card-title">Login to your account</div>
      <div class="form-group">
        <label class="form-label" for="email">{{ __('Email') }}</label>
        <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter email" value="{{ old('email') }}" required autofocus>
      </div>
      <div class="form-group">
        <label class="form-label" for="password">
          {{ __('Password') }}
          <a href="{{ route('password.request') }}" class="float-right small">{{ __('Forgot your password?') }}</a>
        </label>
        <input type="password" class="form-control" id="password" placeholder="Password" name="password" required>
      </div>
      <div class="form-group">
        <label class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" id="remember_me" />
          <span class="custom-control-label">{{ __('Remember me') }}</span>
        </label>
      </div>
      <div class="form-footer">
        <button type="submit" class="btn btn-primary btn-block">{{ __('Login') }}</button>
      </div>
    </div>
  </form>
  <div class="text-center text-muted">
    Don't have account yet? <a href="{{ route('register') }}">Sign up</a>
  </div>
@endsection
