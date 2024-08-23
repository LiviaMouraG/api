<?php

use App\Http\Controllers\CompetitorController;
use App\Http\Controllers\LocaleController;
use App\Http\Controllers\SportController;
use App\Http\Controllers\TreinerController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
/*
Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::get('/minhas-informacoes', function(){
    return response()->json([
        'nome'=> 'LIVIA MOURA GONCALVES',
        'NIF'=> '2662'
    ]);
});

Route::apiResource('/sports', SportController::class);
Route::apiResource('/locale', LocaleController::class);
Route::apiResource('/competitor', CompetitorController::class);
Route::apiResource('/treiner', TreinerController::class);