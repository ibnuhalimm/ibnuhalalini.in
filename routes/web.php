<?php

use App\Http\Controllers\GuestController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index'])->name('homepage');

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();

    Route::post('guests', [GuestController::class, 'store'])->name('voyager.guests.store');
    Route::put('guests/{id}', [GuestController::class, 'update'])->name('voyager.guests.update');
});
