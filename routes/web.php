<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('/', [HomeController::class, 'index'] );
Route::resource('home', HomeController::class );

Route::get('auth/logout', [AuthController::class, 'logout']);

Route::middleware('guest')->group(function(){
    Route::get('auth/login', [AuthController::class, 'viewLogin'] );
    Route::get('auth/register', [AuthController::class, 'viewRegister'] );
    Route::post('auth/login', [AuthController::class, 'login'] );
    Route::post('auth/register', [AuthController::class, 'register'] );
});


Route::prefix('customer')->middleware(['role:customer'], 'auth')->group(function () {
    Route::get('', [CustomerController::class, 'index'] );
    Route::get('warranty', [CustomerController::class, 'viewWarranty'] );
    Route::get('gallery', [CustomerController::class, 'viewGallery'] );
    Route::post('order', [CustomerController::class, 'order'] );
});