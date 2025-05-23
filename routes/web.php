<?php

use App\Http\Controllers\Frontend;
use Illuminate\Support\Facades\Route;

Route::get('/', Frontend\Home\IndexController::class)->name('home.index');
