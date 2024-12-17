<?php

use Illuminate\Support\Facades\Route;
use App\Livewire\Supplier\Index;




Route::prefix('supplier')
    ->name('supplier.')
    ->middleware(['auth'])
    ->group(function (){
        Route::get('/',Index::class);
    });

