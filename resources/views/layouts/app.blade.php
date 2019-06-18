<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>HobbyChat</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/auth.css') }}">
  </head>

  <body>
    <header>
      <div class="header">
        <div class="header-site">
          <h1><a href="#">HobbyChat</a></h1>
        </div>

        <div class="header-nav">
          <nav class="menu">
            <ul>
              <li><a href="#">ログイン</a></li>
              <li><a href="#">新規登録</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

      @yield('content')
  </body>
</html>
