<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;

Route::get('/', function () {
    return view('welcome');
});



Route::controller(NewsController::class)->group(function () {
    Route::get('/news', 'index');
});
