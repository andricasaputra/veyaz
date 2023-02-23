<?php

<<<<<<< HEAD
use App\Http\Controllers\Api\Auth\LoginController;
use App\Http\Controllers\Api\RoleController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::post('auth/login', [LoginController::class, 'login'])->name('api.login');

Route::middleware('auth:sanctum')->group(function () {

    Route::get('user', function(){
        return request()->user();
    })->name('user');

    Route::post('auth/logout', [LoginController::class, 'logout'])->name('logout');

    Route::apiResource('users', UserController::class)->except(['update', 'show', 'destroy']);

    Route::put('users/{user?}', [UserController::class, 'update'])->name('users.update');

    Route::delete('users/{user?}', [UserController::class, 'destroy'])->name('users.destroy');

    Route::apiResource('roles', RoleController::class)->except(['update', 'show', 'destroy']);

    Route::put('roles/{role?}', [RoleController::class, 'update'])->name('roles.update');

    Route::delete('roles/{role?}', [RoleController::class, 'destroy'])->name('roles.destroy');
    
=======
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
});
