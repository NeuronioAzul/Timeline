<?php

use App\Http\Controllers\TagController;
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


Route::apiResource('tags', TagController::class)->only([
    'index',
    'show',
    'store',
    'update',
    'destroy'
]);

Route::apiResource('images', ImageController::class)->only([
    'index',
    'show',
    'store',
    'update',
    'destroy'
]);

Route::apiResource('events', ImageTagController::class)->only([
    'index',
    'show',
    'store',
    'update',
    'destroy'
]);
