@extends('layouts.app')

@section('content')

<section>
    <div class="form-container">
      <h2 class="icon">新規登録</h2>
      <form action="{{ route('register') }}" method="POST" class="clearfix">
        {!! csrf_field() !!}
        <dl>
          <dt class="form-label">お名前<span class="error-message">{{$errors->first('Name')}}</span></dt>
          <dd class="form-box"><input type="text"  class="name" name="name"></dd>
          <dt class="form-label">メールアドレス<span class="error-message">{{$errors->first('Email')}}</span></dt>
          <dd class="form-box"><input type="email" class="email" name="email"></dd>
          <dt class="form-label">性別</dt>
          <dd class="form-box">
            <input type="radio" name="gender" value="male">男
            <input type="radio" name="gender" value="female">女
            <input type="radio" name="gender" value="other">その他
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
          </dd>
          <dt class="form-label">パスワード</dt>
          <dd class="form-box">
            <input type="password" class="password" name="password">
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
