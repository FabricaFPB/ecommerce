<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('index');

Route::get('/produtodetalhe', function () {
    return view('produtodetalhe');
})->name('produtodetalhe');

Route::get('/carrinho', function () {
    return view('carrinho');
})->name('carrinho');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/cadastro', function () {
    return view('cadastro');
})->name('cadastro');

Route::get('/categoria', function () {
    return view('categoria');
})->name('categoria');

Route::get('/perfil', function () {
    return view('profile');
})->name('perfil');

Route::get('/profile', function () {
    return view('profile');
})->name('perfil');

