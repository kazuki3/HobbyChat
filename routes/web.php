<?php

Route::get('/', function () {
    return view('top');
});

Route::get('/room', function () {
    return view('room');
})->name('room');
Route::post('/room', 'RoomController@create')->name('room.create');;

Auth::routes();
