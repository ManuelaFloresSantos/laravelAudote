<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cadastro;
use App\Http\Controllers\login;
use App\Http\Controllers\animais;
use App\Http\Controllers\usuarios;

Route::get('animais', [animais::class, 'animais'])->name('animais');
Route::post('anunciados', [animais::class, 'anunciados'])->name('anunciados');
Route::get('anunciar', [animais::class, 'anunciar'])->name('anunciar');

Route::get('', function () {
    return view('home');
});

//Route::get('login', [animais::class, 'login'])->name('login');


/*Route::prefix('anunciar')->group(function () {
    Route::get('anunciar', [animais::class, 'anunciar'])-> name('anunciar');
    Route::post('anunciados', [animais::class, 'anunciados'])->name('anunciados');
});
*/


// Route::get('anunciar', function () {
//     return view('anunciar');
// });

Route::get('template', function () {
    return view('template');
});

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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
