<?php

use Illuminate\Http\Request;
use App\Http\Controllers\API\testController;
use App\Http\Controllers\API\userController;
use App\Http\Controllers\API\venueController;
use App\Http\Controllers\API\packageController;
use App\Http\Controllers\API\categoryController;
use App\Http\Controllers\API\cateringController;
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
//all venue
Route::get('venue',[venueController::class,'index']);
Route::post('venue/store',[venueController::class,'store']);
//all packages
Route::get('package',[packageController::class,'index']);
Route::post('package/store',[packageController::class,'store']);
//all categories
Route::get('category',[categoryController::class,'index']);
Route::post('category/store',[categoryController::class,'store']);
//all catering
Route::get('catering',[cateringController::class,'index']);
Route::post('catering/store',[cateringController::class,'store']);


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
