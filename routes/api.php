<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\PostController as PostV1;
use App\Http\Controllers\Api\V2\PostController as PostV2;
use Illuminate\Support\Facades\Http;

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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// V1
Route::apiResource('v1/posts', PostV1::class)->only(['show', 'index', 'destroy'])->middleware('auth:sanctum');

// V2
Route::apiResource('v2/posts', PostV2::class)->only(['show', 'index'])->middleware('auth:sanctum');

Route::post('login', [App\Http\Controllers\Api\loginController::class, 'login']);