<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
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

Route::get('/allDishes', [ApiController::class, "all_Dishes"]);

Route::get('/allDishestype/{type}', [ApiController::class, "all_Dishes_type"]);

Route::get('/gettingUserData', [ApiController::class, "getting_user_data"]);

Route::post('/addingAnOrder', [ApiController::class, "adding_an_order"]);

Route::post('/tableReservation', [ApiController::class, "table_reservation"]);

Route::post('/addingAnUser', [ApiController::class, "adding_an_user"]);

Route::post('/entranceUser', [ApiController::class, "entrance_user"]);

Route::post('/exitUser', [ApiController::class, "exit_user"]);