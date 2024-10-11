<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controlador;
Route::get('/',[Controlador::class,'index'])->name('index');
Route::get('/terr',[Controlador::class,'animalest'])->name('terrestres');
Route::get('/acua',[Controlador::class,'animalesa'])->name('acuaticos');