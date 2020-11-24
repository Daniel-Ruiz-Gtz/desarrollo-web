@extends('layouts.auth-tabler')

@section('content')
  <form class="card" method="POST" action="{{ route('register') }}">
      @csrf
    <div class="card-body p-6">
      <div class="card-title">Create new account</div>
      <div class="form-group">
        <label class="form-label" for="name">{{ __('Name') }}</label>
        <input type="text" id="name" class="form-control" name="name" placeholder="Enter name" value="{{ old('name') }}" required autofocus>
      </div>
      <div class="form-group">
        <label class="form-label" for="email">{{ __('Email') }}</label>
        <input type="email" id="email" class="form-control" name="email" placeholder="Enter email" value="{{ old('email') }}" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="password">{{ __('Password') }}</label>
        <input type="password" id="password" class="form-control" name="password" placeholder="Password" required>
      </div>
      <div class="form-group">
        <label class="form-label" for="password_confirmation">{{ __('Confirm Password') }}</label>
        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" placeholder="Confirm Password" required>
      </div>
      <div class="form-group">
        <label class="custom-control custom-checkbox">
          <input type="checkbox" class="custom-control-input" />
          <span class="custom-control-label">Agree the <a href="terms.html">terms and policy</a></span>
        </label>
      </div>
      <div class="form-footer">
        <button type="submit" class="btn btn-primary btn-block">{{ __('Register') }}</button>
      </div>
    </div>
  </form>
  <div class="text-center text-muted">
    <a href="{{ route('login') }}">{{ __('Already registered?') }}</a>
  </div>
@endsection
