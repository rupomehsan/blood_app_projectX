<?php

use App\Http\Controllers\Api\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostController;
use App\Http\Controllers\Api\location\DivisionController;
use App\Http\Controllers\Api\location\DistrictController;
use App\Http\Controllers\Api\location\StationController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserProfileController;


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

Route::apiResource('/post',PostController::class);
Route::apiResource('/division',DivisionController::class);
Route::apiResource('/district',DistrictController::class);
Route::apiResource('/station',StationController::class);
Route::apiResource('/role',RoleController::class);
Route::apiResource('/userprofile',UserProfileController::class);
Route::post('/login',[AuthController::class,'login']);






