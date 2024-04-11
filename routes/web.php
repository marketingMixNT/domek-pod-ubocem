<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;

Route::get('/',[PageController::class,'home'])->name('home');
Route::get('/domek',[PageController::class,'cottage'])->name('cottage');
Route::get('/kontakt',[PageController::class,'contact'])->name('contact');
Route::post('/kontakt',[FormController::class,'contact_form'])->name('contact_form');
