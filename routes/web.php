<?php

use App\Http\Controllers\ProfileController;
use App\Livewire\Admindashboard;
use Illuminate\Support\Facades\Route;
use Livewire\Component;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', Admindashboard::class);

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('/module', function () {
        return view('module');
    })->name('module');
    Route::get('/assessment', function () {
        return view('assessment');
    })->name('assessment');
    Route::get('/test', function () {
        return view('test');
    })->name('test');
    Route::get('/admin21', function () {
        return view('admin');
    })->name('admin');
    
});
