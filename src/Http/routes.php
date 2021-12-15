<?php

use Devsbuddy\Laraworld\Http\Controllers\WorldController;
use Illuminate\Support\Facades\Route;

Route::get('world/countries', [WorldController::class, 'getCountries']);
Route::get('world/states', [WorldController::class, 'getStates']);
Route::get('world/cities', [WorldController::class, 'getCities']);