<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/contato', function () {
    return view('contato');
});