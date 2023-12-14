<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\AuthController;
use App\Http\Controllers\API\EventController;

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

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

    Route::post('signin', [AuthController::class,'login']);
    Route::post('signup', [AuthController::class,'signup']);
    Route::post('logout', [AuthController::class,'logout']);
    Route::post('refresh', [AuthController::class,'refresh']);
    Route::post('me', [AuthController::class,'me']);

});

Route::group([
    'middleware' => 'api',
    'prefix' => 'event'
], function ($router) {

    Route::get('/', [EventController::class,'index']);
    Route::get('/me', [EventController::class,'me']);
    Route::post('/', [EventController::class,'store']);
    Route::delete('/{event_id}', [EventController::class,'destroy'])->where('id', '[0-9]+');
    Route::post('/participate', [EventController::class,'participate']);

});
