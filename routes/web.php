<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/foo', function() {
    dump(url(''));
    dump(request());
});
