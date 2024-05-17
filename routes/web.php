<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreateFormController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/FormCreation', [CreateFormController::class, 'index']);
Route::post('/FormCreation', [CreateFormController::class, 'store']);

