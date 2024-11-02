<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome',function(){
	return view('welcome')->name('welcome');
});

Route::get('/viewSession',[SessionController::class,'index'])->name('viewSession');

Route::get('/storeSession',[SessionController::class,'storeSession'])->name('storeSession');

Route::get('/deleteSession',[SessionController::class,'deleteSession'])->name('deleteSession');



