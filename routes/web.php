<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [App\Http\Controllers\HomeController::class, 'HomeIndex']);

Route::get('/visitor', [App\Http\Controllers\VisitorController::class, 'VisitorIndex']);
Route::get('/services', [App\Http\Controllers\ServicesController::class, 'ServiceIndex']);
Route::get('/getServiceData', [App\Http\Controllers\ServicesController::class, 'getServiceData']);
Route::post('/ServiceDelete', [App\Http\Controllers\ServicesController::class, 'ServiceDelete']);
