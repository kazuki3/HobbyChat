@extends('layouts.app')

@section('content')

<div class="form-container">
  <form method="POST" action="{{ route('login') }}">
    @csrf
    <dl>
      <dt class="form-label">メールアドレス</dt>
      <dd class="form-box">
        <input id="email" type="email" class="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
        <span class="error-message">{{ $errors->first('email') }}</span>
      </dd>
      <dt class="form-label">パスワード</dt>
      <dd class="form-box">
        <input id="password" type="password" class="password" name="password" required autocomplete="current-password">
        <span class="error-message">{{ $errors->first('password') }}</span>
      </dd>
      <dt class="form-label"></dt>
      <dd class="form-box">
        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>ログイン情報を保持
      </dd>
      <button type="submit" class="submit-btn">ログイン</button>
    </dl>
  </form>
  <div class="register-link"><a href="{{ route('register') }}">まだアカウントをお持ちでない方はこちら</a></div>
</div>

@endsection
