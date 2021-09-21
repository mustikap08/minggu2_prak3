<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MustikaController;


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

Route::get('/welcome', [MustikaController::class,'index']);

Route::prefix('prodi')->group(function () {
    Route::get('/manajemen-informatika', [MustikaController::class,'m']);
    Route::get('/teknik-informatika', [MustikaController::class,'t']);
});

Route::get('/news/{angka}', [MustikaController::class,'berita']);

Route::prefix('sarana')->group(function () {
    Route::get('/perkantoran', [MustikaController::class,'kantor']);
    Route::get('/laboratorium', [MustikaController::class,'lab']);
    Route::get('/kelas', [MustikaController::class,'kelas']);
    Route::get('/lainnya', [MustikaController::class,'lain']);
    });

Route::get('/aboutus', [MustikaController::class,'about']);

Route::get('/comment/{nama}/{pesan}', [MustikaController::class,'komen']);
