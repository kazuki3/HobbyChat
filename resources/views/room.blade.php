@extends('layouts.app')

@section('content')
<div class="form-container">
  <h2>スレッドを作成する</h2>
  <form action="{{ route('room.create') }}" method="POST" enctype="multipart/form-data" class="clearfix">
    {!! csrf_field() !!}
    <dl>
      <dt class="form-label">スレッド名</dt>
      <dd class="form-box">
        <input type="text" class="name" name="room_name" value="{{ old('room_name') }}">
        <span class="error-message">{{ $errors->first('room_name') }}</span>
      </dd>
      <dt class="form-label">カテゴリー</dt>
      <dd class="form-box">
        <select name="category" class="select">
          <option value="">選択してください</option>
          <option value="スポーツ">スポーツ</option>
          <option value="ゲーム">ゲーム</option>
          <option value="グルメ">グルメ</option>
          <option value="ファッション">ファッション</option>
          <option value="その他">その他</option>
        </select>
        <span class="error-message">{{ $errors->first('category') }}</span>
      </dd>
      <dt class="form-label">サムネイル</dt>
      <dd class="form-box">
      <input type="file" name="thumbnail">
      <span class="error-message">{{ $errors->first('thumbnail') }}</span>
      </dd>
      <dd>
        <button type="submit" class="submit-btn">作成</button>
      </dd>
    </dl>
  </form>
</div>
@endsection