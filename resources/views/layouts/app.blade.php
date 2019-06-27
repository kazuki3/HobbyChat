<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>HobbyChat</title>
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
  </head>

  <body>
    <header>
      <div class="header">
        <div class="header-site">
          <h1><a href="{{ route('top-index') }}">HobbyChat</a></h1>
        </div>

        <div class="header-nav">
          <nav class="menu">
            <ul>
              @if (Auth::check())
                <li>
                  <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">ログアウト</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">@csrf</form>
                </li>
              @else
                <li><a href="{{ route('login') }}">ログイン</a></li>
                <li><a href="{{ route('register') }}">新規登録</a></li>
              @endif
            </ul>
          </nav>
        </div>
      </div>
    </header>

    @yield('content')
  </body>
</html>
