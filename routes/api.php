<?php

use App\Http\Controllers\Api\FieldController;
use App\Http\Controllers\Api\SubscriberController;
use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('subscribers', [SubscriberController::class, 'index']);
Route::post('subscribers', [SubscriberController::class, 'store']);
Route::get('fields', [FieldController::class, 'index']);
