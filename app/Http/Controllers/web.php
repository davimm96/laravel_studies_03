<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    echo 'Blade Layouts';
});

Route::view('/show', [MainController::class, 'showPage']);
