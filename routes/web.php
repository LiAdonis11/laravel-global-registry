<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/countries/create', [CountryController::class,'create'])->name('countries.create');
Route::post('/countries/store', [CountryController::class,'store'])->name('countries.store');
Route::get('/countries', [CountryController::class, 'index'])->name('countries.index');