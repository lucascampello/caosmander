<?php

use App\Http\Controllers\CMPlanarController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('welcome');
Route::view('/tutorial/1', 'tutorial')->name('tutorial');
Route::view('/tutorial/2', 'tutorial2')->name('tutorial2');
Route::get('/game',[CMPlanarController::class, 'index'])->name('game');
Route::get('/game/ativar', [CMPlanarController::class, 'ativar'])->name('ativar_plano');
Route::get('/game/estressar', [CMPlanarController::class, 'estressar'])->name('estressar_plano');
Route::get('/game/mudar', [CMPlanarController::class, 'mudar'])->name('mudar_plano');
Route::get('/game/colapsar', [CMPlanarController::class, 'colapsar'])->name('colapsar_plano');

Route::fallback(function () {
    return view('welcome');
});
