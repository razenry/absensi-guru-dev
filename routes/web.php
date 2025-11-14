<?php

use App\Livewire\Pages\Auth\Login;
use App\Livewire\Pages\Home\HomeIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {

    Route::get('/dashboard', HomeIndex::class)->name('dashboard.index');

    Route::prefix('auth')->group(function () {
        Route::get('/login', Login::class)->name('auth.login');
        Route::get('/register', Login::class)->name('auth.register');
    });



});
