<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/form', [FormController::class, 'showForm'])->name('Form');
Route::post('/success', [FormController::class, 'submitForm']);

Route::get('/yes', [DataController::class, 'index'])->name('Data');