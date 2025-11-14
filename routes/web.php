<?php

use App\Livewire\Pages\Home\HomeIndex;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', HomeIndex::class)->name('home.index');
