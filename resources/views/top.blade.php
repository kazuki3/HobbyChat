@extends('layouts.app')

@section('content')

  <!-- この中にHTMLを描いてください -->
  <a class="header__list--button-logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="header__list--button">ログアウト</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form>
@endsection