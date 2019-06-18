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

      <div class="boxA">
        <div class="box2">
          <ul>
            <li class="Common_List">
              <a href="#">
                <div class="ListTitle">
                  タイトル
                </div>
                <div class="ListText">
                  本文
                </div>
              </a>
            </li>
            <li class="Common_List">
              <a href="#">
                <div class="ListTitle">
                  タイトル
                </div>
                <div class="ListText">
                  本文
                </div>
              </a>
            </li>
            <li class="Common_List">
              <a href="#">
                <div class="ListTitle">
                  タイトル
                </div>
                <div class="ListText">
                  本文
                </div>
              </a>
            </li>
          </ul>
        </div>

        <div class="box3">
          <div class="ContentsTitle">
            掲示板を作成・検索
          </div>
          <div class="CommonMenu_List">
            <ul>
              <li>
                <div class="name"><span class="MakeIcon"><i class="fas fa-pencil-alt"></i></span>作成</div><a href="{{ route('room') }}" class="btn-make" title="新しく掲示板を作る">新しく掲示板を作る</a>
              </li>
              <li>
                <form action="" method="post">
                  <input type="hidden" name="" value="">
                  <div class="name"><span class="SearchIcon"><i class="fas fa-search"></i></span>検索</div>
                  <input type="text" class="SearchInput" name="keyword" id="" value placeholder="キーワードで検索" />
                </form>
              </li>
            </ul>
          </div>
        </div>
      </div>


      @yield('content')
  </body>
</html>
