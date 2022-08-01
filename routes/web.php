<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ColaboradorController;
use App\Http\Controllers\HistoricoSalarioController;

Route::get('/',[ColaboradorController::class,'index']);

Route::resource('colaboradores', 'App\Http\Controllers\ColaboradorController');

Route::get('create',[ColaboradorController::class,'create']);
Route::get('colaborador/{id}',[ColaboradorController::class,'showCpfId']);
Route::post('salario',[HistoricoSalarioController::class,'atualizaSalario']);
