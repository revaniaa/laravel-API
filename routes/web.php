<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\KomenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Faker\Guesser\Name;
use Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Auth::routes();

Route::middleware(['auth', 'admin'])->group(function () {

    Route::get('/edit',[App\Http\Controllers\UserController::class, 'edit'])->name('edit');
    Route::get('/user',[App\Http\Controllers\UserController::class, 'index'])->name('user');
    // Route::get('/tambah',[App\Http\Controllers\TambahUserController::class, 'index'])->name('tambah');
    Route::put('/user/edit/{id}', [App\Http\Controllers\EditUserController::class, 'update'])->name('user.edit');
    Route::delete('/user/destroy/{id}', [App\Http\Controllers\EditUserController::class, 'destroy'])->name('user.destroy');
    Route::get('/edit/{id}',[App\Http\Controllers\EditUserController::class, 'edit'])->name('edit');
});

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/foto', [App\Http\Controllers\FotoController::class, 'index'])->name('foto');
    Route::get('/profile', [App\Http\Controllers\ProfileController::class, 'index'])->name('profile');
    Route::get('/tambahfoto', [App\Http\Controllers\FotoController::class, 'create'])->name('tambahfoto');
    Route::post('/store', [App\Http\Controllers\FotoController::class, 'store'])->name('store');
    Route::delete('/foto/{id}', [App\Http\Controllers\FotoController::class, 'destroy'])->name('foto.destroy');

Route::middleware(['auth', 'pengguna'])->group(function () {

    Route::post('komens/{foto}',[KomenController::class,'buatKomentar'])->name('tambahKomen');
    // Route::get('/comment/{foto:id_photo}', [App\Http\Controllers\HomeController::class, 'comment'])->name('comment');
    // Route::post('/comment', [CommentController::class, 'buatKomentar'])->name('tambahkomen');
    // Route::post('/comment/{post}',[App\Http\Controllers\CommentController::class, 'buatKomentar'])->name('tambahkomen');
});
