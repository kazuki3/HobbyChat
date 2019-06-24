@extends('layouts.app')

@section('content')

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
          <div><span class="MakeIcon"><i class="fas fa-pencil-alt"></i></span>作成</div><a href="#" class="btn-make" title="新しく掲示板を作る">新しく掲示板を作る</a>
        </li>
        <li>
          <form action="" method="post">
            <div><span class="SearchIcon"><i class="fas fa-search"></i></span>検索</div>
            <input type="text" class="SearchInput" name="keyword" id="" value placeholder="キーワードで検索" />
            <input type="hidden" name="" value="" />
          </form>
        </li>
      </ul>
    </div>
  </div>
</div>

  <!-- この中にHTMLを描いてください -->
  <!-- <a class="header__list--button-logout" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="header__list--button">ログアウト</a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
      @csrf
    </form> -->

@endsection
