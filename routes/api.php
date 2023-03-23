<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


use App\Models\user;
use App\Http\Controllers\api\ApiController;



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



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/register', [App\Http\Controllers\api\ApiController::class, 'register']);
Route::post('/login', [App\Http\Controllers\api\ApiController::class, 'login']);
Route::post('/forgotPassword', [App\Http\Controllers\api\ApiController::class, 'forgotPassword']);
Route::post('/verified', [App\Http\Controllers\api\ApiController::class, 'verify_otp']);
Route::post('/resset', [App\Http\Controllers\api\ApiController::class, 'resetPassword']);
Route::post('/change_password', [App\Http\Controllers\api\ApiController::class, 'changePassword']);



// Route::get('/posts', [PostsApiController::class, 'index']);
// Route::post('/posts', [PostsApiController::class, 'store']);
// Route::put('/posts/{post}', [PostsApiController::class, 'update']);
// Route::delete('/posts/{post}', [PostsApiController::class, 'destroy']);
