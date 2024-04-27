<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\StagiaireController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stagiaires',[StagiaireController::class, 'index'])
        ->name('stagiaires.index');

Route::get('stagiaires/create',[StagiaireController::class,'create'])
        ->name('stagiaires.create');

Route::post('stagiaires',[StagiaireController::class,'store'])
        ->name('stagiaires.store');

Route::get('stagiaires/edit/{id}',[StagiaireController::class, 'edit'])
        ->name('stagiaires.edit');

Route::put('stagiaires/{id}',[StagiaireController::class,'update'])
        ->name('stagiaires.update');

Route::get('stagiaires/{id}', [StagiaireController::class,'show'])
        ->name('stagiaires.show');

Route::delete('stagiaires/{id}', [StagiaireController::class, 'destroy'])
        ->name('stagiaires.destroy');
