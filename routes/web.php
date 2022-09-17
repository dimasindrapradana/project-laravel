<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('beranda' ,[
        "title" => "Beranda"
    ]);
});
Route::get('/faq', function () {
    return view('faq',[
        "title" => "FAQ"
    ]);
});

Route::get('/ajukan', function () {
    return view('ajukan',[
        "title" => "Ajukan"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak',[
        "title" => "Kontak"
    ]);
});

Route::get('/unduhaplikasi', function () {
    return view('unduhaplikasi',[
        "title" => "Unduh Aplikasi"
    ]);
});

Route::get('/panduan', function () {
    return view('panduan',[
        "title" => "Panduan"
    ]);
});

Route::get('/kebijakanprivasi', function () {
    return view('kebijakanprivasi',[
        "title" => "Kebijkan Privasi"
    ]);
});
