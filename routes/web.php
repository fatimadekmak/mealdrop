<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RestController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\CartController;

use App\Models\Restaurant;
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

// home page route
Route::get('/', [HomeController::class,'index']);
// restaurants page route
Route::get('/viewrestaurants', [HomeController::class,'viewrestaurants']);
// cuisines page route
Route::get('/browsecuisines', [HomeController::class,'browsecuisines']);
// contact page route
Route::view('/contact','contact');



// cart page route
Route::get('viewCart/{id}', [CartController::class,'viewcart']);
// deleting a record in cart
Route::get('/cartdelete/{id}', [CartController::class,'cartdelete']);
// updating a record in cart
Route::post('/cartupdate/{id}', [CartController::class,'cartupdate']);
// checking out route
Route::view('/shipping', 'deliveryoptions');
// Route::post('/shipping',[CartController::class,'processorder']);
//processing order
Route::post('/order',[CartController::class,'processorder']);


// viewing menu of a specific restaurant
Route::get('/viewmenu/{id}', [ItemController::class,'viewmenu']);
// viewing restaurants and food items of a specific cuisine
Route::get('/cuisine/{id}', [ItemController::class,'viewcuisine']);
// adding a food item to cart
Route::post('/addcart/{id}', [ItemController::class,'addToCart']);



// registration form of a restaurant route
Route::get('/restaurant-form', [HomeController::class, 'restaurantForm']);
// registration form of a del company route
Route::get('/delivery-form', [HomeController::class, 'deliveryForm']);
// submitting restaurant form route
Route::post('/processRequest', [HomeController::class, 'processRequest']);
// submitting delivery form route
Route::post('/processDelivRequest', [HomeController::class, 'processDelivRequest']);
// after signing up route
Route::get('/redirects', [HomeController::class,'redirects']);


// in admin dashboard
// users link in nav route
Route::get('/users', [AdminController::class,'user']);
// restaurants link in nav route
Route::get('/restaurants', [AdminController::class,'restaurant']);
// delivery link in nav route
Route::get('/delivery', [AdminController::class,'delivery']);
// requests link in nav route
Route::get('/requests', [AdminController::class,'requests']);
// deleting a user
Route::get('/deleteuser/{id}', [AdminController::class,'deleteuser']);
// mark restaurant as active before creating its account
Route::get('/activaterest/{id}', [AdminController::class,'activaterest']);
// mark delivery company as active before creating its account
Route::get('/activatedel/{id}', [AdminController::class,'activatedel']);
// deleting a restaurant
Route::get('/deleterest/{id}', [AdminController::class,'deleterest']);
// deleting a del company
Route::get('/deletedel/{id}', [AdminController::class,'deletedel']);




// in rest dashboard
//Route::get('/orders', [AdminController::class,'restorders']);

Route::get('/menu', [RestController::class,'menu']);

Route::post('/addfood', [RestController::class,'addfood']);

Route::get('/deleteitem/{id}', [RestController::class,'deleteitem']);


//order
//Route::post('/create-order', [App\Http\Controllers\RestController::class, 'createOrder'])->name('restaurant.createOrder');

//orders
Route::get('/orders', [RestController::class,'orders']);



//search







Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
