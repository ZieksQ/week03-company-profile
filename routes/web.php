<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CompanyController::class, 'home']);
Route::get('/about', [CompanyController::class, 'about']);
Route::get('/services', [CompanyController::class, 'services']);
Route::get('/contact', [CompanyController::class, 'contact']);
