<?php


use App\Http\Controllers\CardProductController;
use App\Http\Controllers\RegisterUserController;
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



//resource routs user (create, update , delete )
Route::get('/', function () {
    return view('home');
});

Route::get('/test', function () {
   return view('cardProduct');
});

//routs for product cards
Route::resource('products', CardProductController::class);

// routs for users
Route::resource('users', RegisterUserController::class);


