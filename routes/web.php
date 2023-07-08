<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
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
*/

Route::get('/', function () {
    return redirect()->route('home');
});



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', function () {
    return view('home');
})->name('home')->middleware('auth');

//Tampilkan pengguna
Route::get('pengguna', [UserController::class, 'index'])->name('users.index');

//Tampilkan form tambah pengguna
Route::get('tambah', [UserController::class, 'create'])->name('users.create');

//Simpan data pengguna
Route::post('simpan', [UserController::class, 'store'])->name('users.store');

//Tampilkan form edit pengguna
Route::post('edit/{user}', [UserController::class, 'edit'])->name('users.edit');

//Update data pengguna
Route::put('update/{user}', [UserController::class, 'update'])->name('users.update');

//Hapus data pengguna
Route::delete('delete/{user}', [UserController::class, 'destroy'])->name('users.destroy');
