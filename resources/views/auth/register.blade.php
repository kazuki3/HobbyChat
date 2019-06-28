@extends('layouts.app')

@section('content')

<section>
    <div class="form-container">
      <h2 class="icon">新規登録</h2>
      <form action="{{ route('register') }}" method="POST" class="clearfix">
        {!! csrf_field() !!}
        <dl>
          <dt class="form-label">お名前</dt>
          <dd class="form-box">
            <input type="text"  class="name" name="name" value="{{old('name')}}">
            <span class="error-message">{{ $errors->first('name') }}</span>
          </dd>
          <dt class="form-label">メールアドレス</dt>
          <dd class="form-box">
            <input type="email" class="email" name="email" value="{{old('email')}}">
            <span class="error-message">{{$errors->first('email')}}</span>
          </dd>
          <dt class="form-label">性別</dt>
          <dd class="form-box">
            <input type="radio" name="gender" value="male">男
            <input type="radio" name="gender" value="female">女
            <input type="radio" name="gender" value="other">その他
            <span class="error-message">{{ $errors->first('gender') }}</span>
          </dd>
          <dt class="form-label">年齢</dt>
          <dd class="form-box">
            <select name="age" class="select">
              <option value="">選択してください</option>
              <option value="20">20代</option>
              <option value="30">30代</option>
              <option value="40">40代</option></option>
              <option value="50">50代</option>
              <option value="60">60代</option>
              <option value="70">70代以上</option>
            </select>
            <span class="error-message">{{ $errors->first('age') }}</span>
          </dd>
          <dt class="form-label">パスワード</dt>
          <dd class="form-box">
            <input type="password" class="password" name="password">
            <span class="error-message">{{ $errors->first('password') }}</span>
          </dd>
          <dt class="form-label">パスワード再入力</dt>
          <dd class="form-box">
            <input type="password" class="password" name="password_confirmation">
          </dd>
        </dl>
        <button type="submit" class="submit-btn">登録</button>
      </form>
    </div>
</section>

@endsection
