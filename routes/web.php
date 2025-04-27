<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProgramController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth')->group(function (){
    Route::view('/','portal.index')->name('portal');
    Route::get('/client', [ClientController::class , 'index']);
    Route::get('/client/{id}', [ClientController::class , 'show']);
    Route::get('/program', [ProgramController::class , 'index']);
    
});

Route::middleware('guest')->group(function (){
    Route::view('/login','auth.login')->name('login');
    Route::view('/register','auth.register')->name('register');
});

