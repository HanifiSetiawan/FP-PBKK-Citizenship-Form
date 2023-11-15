<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/form', [FormController::class, 'showForm'])->name('Form');
Route::post('/success', [FormController::class, 'submitForm']);

Route::get('/Data', [DataController::class, 'index'])->name('Data');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
