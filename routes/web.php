<?php

Route::get('/', function () {
    return view('top');
});

Route::get('/thread', function () {
    return view('thread');
});


Auth::routes();
