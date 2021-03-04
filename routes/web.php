<?php

use App\Http\Controllers\PayOrderController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('pay', PayOrderController::class);
