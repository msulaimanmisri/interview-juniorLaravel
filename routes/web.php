<?php

use App\Http\Controllers\CompanyController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Company
Route::get('/company', [CompanyController::class, 'index']);
Route::get('/company/create', [CompanyController::class, 'create']);
Route::get('/company/show', [CompanyController::class, 'show']);
Route::get('/company/update', [CompanyController::class, 'update']);