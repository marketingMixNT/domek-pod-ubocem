<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;



Route::group(['prefix' => LaravelLocalization::setLocale(), 'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']], function () {
    Route::get('/', [PageController::class, 'home'])->name('home');
    Route::get(LaravelLocalization::transRoute('routes.chalet'), [PageController::class, 'chalet'])->name('chalet');
    Route::get(LaravelLocalization::transRoute('routes.attractions'), [PageController::class, 'attractions'])->name('attractions');
    Route::get(LaravelLocalization::transRoute('routes.contact'), [PageController::class, 'contact'])->name('contact');
    Route::get(LaravelLocalization::transRoute('routes.privacy_policy'), [PageController::class, 'privacy_policy'])->name('privacy_policy');


    Route::post(LaravelLocalization::transRoute('routes.contact'), [FormController::class, 'contact_form'])->name('contact_form');
});
