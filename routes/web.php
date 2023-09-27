<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;

Route::get('/form', [FormController::class, 'showForm']);
Route::post('/submit', [FormController::class, 'submitForm']);
