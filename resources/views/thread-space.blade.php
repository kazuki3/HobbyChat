@extends('layouts.app')

@section('content')
<div class="boxA">
  <div class="box2">
    <div class="Chatbox">
      <ul>
        <li class="chat">
          <div class="ChatName">
            名前
          </div>
          <div class="ChatTime">
            時間
          </div>
          <div class="ChatText">
            本文
          </div>
        </li>
      </ul>
    </div>
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

<div class="boxB">
  <div class="box4">
    <div class="CommentForm">
      <form method="post" action="">
        <textarea type="text" placeholder="コメントを書く"></textarea>
        <button type="submit" class="SubmitBtn">投稿する</button>
      </form>
    </div>
  </div>
</div>
@endsection