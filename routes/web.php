<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
    for me | original = git clone https://github.com/Erik08king/iskolai_munka_php.git

*/

Route::get('/', function () {
    return view('lista');
})->name('fooldal');

Route::get('/felvetel', function () {
    return view('felvetel');
})->name('felvetel');