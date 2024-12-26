<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProvinceController;

Route::get('/', function () {
  return view('welcome');
});

Route::get('/province', [ProvinceController::class, 'index']);
