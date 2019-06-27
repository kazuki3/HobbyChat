@extends('layouts.app')

@section('content')
<div class="boxA">
  <div class="box2">
    <div class="Chatbox">
      <ul>
        @foreach ($contributions as $contribution)
          <li class="chat">
            <div class="ChatName">
            {{ $contribution->user->name }}
            </div>
            <div class="ChatTime">
            {{ $contribution->created_at }}
            </div>
            <div class="ChatText">
              {{ $contribution->contribution }}
            </div>
          </li>
        @endforeach
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
      <form action="{{ route('contribution.create', ['id' => $id]) }}" method="post" enctype="multipart/form-data">
        {!! csrf_field() !!}
        <textarea type="text" placeholder="コメントを書く" name="contribution"></textarea>
        <button type="submit" class="SubmitBtn">投稿する</button>
      </form>
    </div>
  </div>
</div>
@endsection