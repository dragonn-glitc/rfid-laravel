<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RFIDController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/rfid', [RFIDController::class, 'index']);
Route::post('/rfid/check', [RFIDController::class, 'check']);

