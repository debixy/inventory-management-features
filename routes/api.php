<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\InventoryApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "api" middleware group. Enjoy building your API!
|
*/

// Inventory API Routes
Route::get('/inventory', [InventoryApiController::class, 'index']);
Route::get('/inventory/{id}', [InventoryApiController::class, 'show']);
Route::post('/inventory', [InventoryApiController::class, 'store']);
Route::put('/inventory/{id}', [InventoryApiController::class, 'update']);
Route::delete('/inventory/{id}', [InventoryApiController::class, 'destroy']);
