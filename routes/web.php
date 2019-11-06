<?php

Route::get('/', 'RoomController@index')->name('top-index');

Route::group(['middleware' => 'auth'], function () {
    Route::get('/room/{id}', 'RoomController@show')->name('room.show');

    // メッセージ投稿
    Route::post('/room/{id}', 'ContributionController@create')->name('contribution.create');

    Route::get('/room', function () {
        return view('room');
    })->name('room');
    Route::post('/room', 'RoomController@create')->name('room.create');

    Route::get('/thread', function () {
        return view('thread');
    });

    Route::get('/notice', 'NoticeController@getNotice');
    Route::post('/notice', 'NoticeController@getNotice');
});

// ユーザー認証
Auth::routes();
