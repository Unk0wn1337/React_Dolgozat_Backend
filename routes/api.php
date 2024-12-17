<?php

use App\Http\Controllers\KategoriaController;
use App\Http\Controllers\ReceptController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/kategoriak',[KategoriaController::class, 'index']);
Route::post('/kategoria-add',[KategoriaController::class, 'store']);
Route::get('/kategoria-show',[KategoriaController::class, 'show']);

Route::get('/receptek',[ReceptController::class, 'index']);
Route::post('/recept-add',[ReceptController::class, 'store']);
Route::get('/recept-show',[ReceptController::class, 'show']);
