<?php

Route::get('/', 'RoomController@index')->name('top-index');

Route::get('/room/{id}', 'RoomController@show')->name('room.show');

Route::get('/room', function () {
    return view('room');
})->name('room');
Route::post('/room', 'RoomController@create')->name('room.create');;

Auth::routes();
