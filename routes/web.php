<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PegawaiController;
use App\Models\Pegawai;

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
    return view('welcome');
});

// Route::get('/home', function () {})->middleware('auth');
Auth::routes();


Route::group(['middleware' => ['auth']], function() {

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/home',[App\Http\Controllers\PegawaiController::class, 'index'])->name('home');
    Route::get('/pegawais/create',[App\Http\Controllers\PegawaiController::class, 'create'])->name('create');
    Route::get('/pegawais/{pegawai}',[App\Http\Controllers\PegawaiController::class, 'show'])->name('show');
    Route::post('/pegawais',[App\Http\Controllers\PegawaiController::class, 'store'])->name('store');
    Route::delete('/pegawais/{pegawai}',[App\Http\Controllers\PegawaiController::class, 'destroy'])->name('destroy');
    Route::get('/pegawais/{pegawai}/edit',[App\Http\Controllers\PegawaiController::class, 'edit'])->name('edit');
    Route::put('/pegawais/{pegawai}',[App\Http\Controllers\PegawaiController::class, 'update'])->name('update');
    Route::get('pdf',[App\Http\Controllers\PegawaiController::class, 'print'])->name('print');
    Route::get('/search',[App\Http\Controllers\PegawaiController::class, 'search'])->name('search');
    
});