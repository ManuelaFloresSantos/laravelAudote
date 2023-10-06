<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\cadastro;
use App\Http\Controllers\login;
use App\Http\Controllers\animais;
use App\Http\Controllers\usuarios;

Route::get('animais', [animais::class, 'animais'])->name('animais');
Route::post('anunciados', [animais::class, 'anunciados'])->name('anunciados');
Route::get('anunciar', [animais::class, 'anunciar'])->name('anunciar');
Route::get('/apaga/{id}', [animais::class, 'apaga'])->name('apagaAnimal');

Route::get('/edita/{id}', [animais::class, 'edita'])->name('editaAnimal');
Route::post('/atualiza/{id}', [animais::class, 'atualiza'])->name('atualizaAnimal');

Route::get('/', function () {
    return view('home');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
