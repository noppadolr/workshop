<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Admin\Dashboard;



Route::prefix('admin')
    ->name('admin.')
    ->middleware(['auth'])
    ->group(function (){
        Route::get('/dashboard',Dashboard::class)->name('dashboard');
    });

