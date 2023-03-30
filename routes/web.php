<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
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


Route::get('/', [HomeController::class,'index']);
Route::get('/restaurant-form', [HomeController::class, 'restaurantForm']);
Route::get('/delivery-form', [HomeController::class, 'deliveryForm']);
Route::post('/processRequest', [HomeController::class, 'processRequest']);
Route::get('/redirects', [HomeController::class,'redirects']);

Route::get('/users', [AdminController::class,'user']);
Route::get('/restaurants', [AdminController::class,'restaurant']);
Route::get('/delivery', [AdminController::class,'delivery']);
Route::get('/requests', [AdminController::class,'requests']);
Route::get('/deleteuser/{id}', [AdminController::class,'deleteuser']);
Route::get('/deleterest/{id}', [AdminController::class,'deleterest']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
