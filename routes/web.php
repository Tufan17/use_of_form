<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Yonet;
use App\Http\Controllers\Formislemleri;

Route::get('/', function () {
    return view('welcome');
});



Route::get('/web',[Yonet::class,'site']);



Route::get('/form',[Formislemleri::class,'gorunum']);

Route::middleware('araKontrol')->post('/form-sonuc',[Formislemleri::class,'sonuc'])->name('sonuc');