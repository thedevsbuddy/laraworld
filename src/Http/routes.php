<?php

use Devsbuddy\Laraworld\Http\Controllers\WorldController;
use Illuminate\Support\Facades\Route;

Route::get('laraworld/countries', [WorldController::class, 'getCountries']);
Route::get('laraworld/states', [WorldController::class, 'getStates']);
Route::get('laraworld/cities', [WorldController::class, 'getCities']);