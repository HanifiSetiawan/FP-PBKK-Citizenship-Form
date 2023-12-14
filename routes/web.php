<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\GoogleController;

Route::get('/', function () {
    return view('welcome');
});



Route::middleware(['auth'])->group(function () {
    Route::get('/Data', [DataController::class, 'index'])->name('Data');
    Route::get('/Data/all', [DataController::class, 'showAll'])->name('data.showAll');
    Route::resource('Datas', DataController::class)->only(['index', 'edit', 'update', 'destroy']);

    Route::get('/form', [FormController::class, 'showForm'])->name('Form');
    Route::post('/success', [FormController::class, 'submitForm']);

    Route::get('/CS', [MailController::class, 'index'])->name('CS');
    Route::post('/CS/Sent', [MailController::class, 'SendEmail'])->name('CSsent');
});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('google')->name('google.')->group( function(){
    Route::get('login', [GoogleController::class, 'loginWithGoogle'])->name('google.login');
    Route::any('callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');

});
