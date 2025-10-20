<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PropinsiController;
use App\Http\Controllers\KotaController;

Route::get('/', function () {
    return redirect('/propinsi'); // arahkan langsung ke halaman propinsi
});

Route::resource('propinsi', PropinsiController::class);
Route::resource('kota', KotaController::class);
Route::resource('propinsi', App\Http\Controllers\PropinsiController::class);


Route::get('/', function () {
    return view('welcome');
});


Route::get('/ul', function () {
    return 'Halo Laravel!';
});


Route::get('/dashboard', function () {
 return view('dashboard'); //
});

Route::get('/user/{Ul}', function ($nama) {
 return "Halo, $nama!";
});


Route::get('/produk', function ($id = null) {
 return $id ? "Produk ID: $id" : "Tidak ada ID produk";
});


Route::get('/kategori/{nama}', function ($nama) {
 return "Kategori: $nama";
})->where('nama', '[A-Za-z]+[1-9]');


Route::get('/profil', function () {
return 'Ini halaman profil';
})->name('profil');
Route::get('/link-profil', function () {
return route('profil');
});

Route::resource('kota', KotaController::class);

use App\Http\Controllers\HomeController;
Route::get('/home', [HomeController::class, 'index']);