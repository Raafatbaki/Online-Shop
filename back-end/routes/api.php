<?php

use App\Http\Controllers\Api\ProfileController;
use App\Http\Controllers\Api\UsersContoller;
use App\Http\Controllers\Auth\AuthController;
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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('admin/login', [AuthController::class, 'loginAdmin']);
Route::post('user/register', [AuthController::class, 'register']);
Route::post('user/login', [AuthController::class, 'loginUser']);

// Protected Routes for Admin
Route::middleware('auth:admin')->group(function () {
    Route::post('/logoutAdmin', [AuthController::class, 'logoutAdmin']);
    Route::get('/users', [UsersContoller::class, 'GetUsers']);
    Route::post('/authAdmin', [UsersContoller::class, 'AuthAdmin']);
    Route::delete('/user/delete/{id}', [UsersContoller::class, 'destroy']);
    Route::get('/userProfile/{id}', [ProfileController::class, 'getProfileById']);
    Route::put('/profile/edit/{id}',[ProfileController::class,"updateProfileById"]);

});

// Protected Routes for User
Route::middleware('auth:user')->group(function () {

    Route::post('/logoutUser', [AuthController::class, 'logoutUser']);

});

