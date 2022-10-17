<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\testController;
use App\Http\Controllers\API\userController;
use App\Http\Controllers\API\weddingController;
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

Route::get('testAPI',[testController::class, 'index']);
//wedding organizer data
Route::get('WeddingApi',[weddingController::class, 'index']);
Route::post('WeddingApi/store',[weddingController::class, 'store']);
//all user data
Route::get('userData',[userController::class, 'index']);
Route::post('userData/store',[userController::class, 'store']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
