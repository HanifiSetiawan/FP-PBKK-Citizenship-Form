<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/Data', [DataController::class, 'index'])->name('Data');

    Route::get('/form', [FormController::class, 'showForm'])->name('Form');
    Route::post('/success', [FormController::class, 'submitForm']);
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
