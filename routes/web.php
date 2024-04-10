<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/domek',[PageController::class,'cottage'])->name('cottage');
Route::get('/kontakt',[PageController::class,'contact'])->name('contact');
