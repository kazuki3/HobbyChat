<?php

Route::get('/', function () {
    return view('top');
});

Auth::routes();
