<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\PortfolioController;
use App\Http\Middleware\SetLocale;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocaleController;

Route::middleware([SetLocale::class])->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('locale/{locale}', [LocaleController::class, 'setLocale'])->name('locale.switch');

    Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.index');

    Route::get('/about', [AboutController::class, 'index'])->name('about.index');

    Route::get('/appointment', [AppointmentController::class, 'index'])->name('appointment.index');

});
