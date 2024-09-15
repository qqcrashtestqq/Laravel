<?php

use App\Http\Controllers\AuthControllerUser;
use App\Http\Controllers\CardProductController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('auth-user', AuthControllerUser::class);

Route::post('login', [AuthControllerUser::class, 'login']);

Route::middleware('auth:api')->group(function () {

    Route::prefix('cardProducts')->group(function () {
        Route::get('/', [CardProductController::class, 'index']);
    });

});
