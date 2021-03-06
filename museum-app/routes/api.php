<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MuseumController;
use App\Http\Controllers\StateController;
use App\Http\Controllers\VisitorController;
use App\Http\Controllers\AuthentificationController;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

//Route::get('/museums',[MuseumController::class,'index']);
Route::resource('museums', MuseumController::class);
Route::resource('states', StateController::class);
Route::resource('visitors', VisitorController::class);

Route::post('/register', [AuthentificationController::class,'register']);
Route::post('/login', [AuthentificationController::class,'login']);


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/logout', [AuthentificationController::class,'logout']);
});
