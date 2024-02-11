<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\V1\ProxyController;
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

// Route::middleware('check_api_key')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware('check_api_key')->group(function () {
    // Place your protected routes here
    Route::get('/v1/proxies', [ProxyController::class, 'index']);
    Route::get('/v1/proxies/{id}', [ProxyController::class, 'show']);
    Route::post('/v1/proxies', [ProxyController::class, 'store']);
    Route::put('/v1/proxies/{id}', [ProxyController::class, 'update']);
    Route::delete('/v1/proxies/{id}', [ProxyController::class, 'destroy']);
});
