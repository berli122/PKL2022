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


// Route::get('/', function () {
    
// });

// Route::get('profile', function () {
    
// });

// Route::get('about/{nama?}', function ($nama = null) {
//     return view('about', compact('nama'));
// });

Route::get('halaman-3/{nama?}/jenis-klamin/{klamin?}', function ($nama = null, $klamin = 'di Rahasiakan') {
    return view('halaman profile ' .$nama. ' Dengan Jenis Klamin '. $klamin);
});

Route::get('pesan/{makan?}/{minum?}/{porsi?}', function ($makan = "Pesanan??" ,$minum = "Minum?", $porsi = "Porsi?") {
    return view('pages.pesan', compact('makan' , 'minum' , 'porsi'));
});

Route::get('hallo', 'LatihanController@profile');

Route::get('facebook/{nama}-{perkalian}-{jk}', 'LatihanController@facebook');

Route::get('siswa', 'LatihanController@siswa');

Route::get('badan/{berat}/{tinggi}/{umur}', 'LatihanController@badan');

Route::get('kampus', 'Dosen@kampus');

Route::get('dosen', 'Kampus@kampus');

Route::get('jurusan', 'Jurusan@sekolah');

Route::get('shop', 'Shop@shop');
