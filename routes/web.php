<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('produtodetalhe', function () {
    return view('produtodetalhe');
})->name('produtodetalhe');
