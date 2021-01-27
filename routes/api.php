<?php

use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/addUser',[UserController::class,"addUser"]);
Route::get('/users',[UserController::class,"getAllUsers"]);
Route::post('/update/{id}',[UserController::class,"updateUser"]);
Route::post('delete/{id}',[UserController::class,"deleteUser"]);
Route::get('search/{id}',[UserController::class,"searchUser"]);
Route::get('get/{id}',[UserController::class,"getUserById"]);