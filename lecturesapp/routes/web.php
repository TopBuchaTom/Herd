<?php

use App\Http\Controllers\LectureController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/lectures', LectureController::class);

