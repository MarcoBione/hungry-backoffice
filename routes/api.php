<?php

use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\CatererController;
use App\Http\Controllers\Api\DishController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/categories/{id}', [CategoryController::class, 'show']);
Route::get("/caterers", [CatererController::class, 'index']);
Route::get("/caterers/{slug}", [CatererController::class, 'show']);
Route::get('/dishes', [DishController::class, 'index']);
Route::get('/dishes/{slug}', [DishController::class, 'show']);
