<?php

<<<<<<< HEAD
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('', function(){
	return view('auth.login');
})->name('login');


Route::get('users', [UserController::class, 'index'])->name('users.home');

Route::get('users/create', [UserController::class, 'create'])->name('users.create');

Route::get('users/edit/{id?}', [UserController::class, 'edit'])->name('users.edit');

Route::get('roles', [RoleController::class, 'index'])->name('roles.home');

Route::get('roles/create', [RoleController::class, 'create'])->name('roles.create');

Route::get('roles/edit/{id?}', [RoleController::class, 'edit'])->name('roles.edit');
=======
use App\Http\Controllers\Core\DashboardController;
use App\Http\Controllers\Core\MainController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Home routes
Route::get('/', function () {
    return view('welcome');
});

// Dashboard Routes
Route::controller(DashboardController::class)->group(function () {
    Route::get('/dashboard', 'index')
        ->name('dashboard');
    Route::get('/doc', 'doc')
        ->name('documentation');
    Route::get('/settings', 'settings')
        ->name('settings');
});

// Load another route file
require __DIR__.'/data/users.php';
require __DIR__.'/data/activity.php';
>>>>>>> 02b12afbcfc48a7aa01129d319afbe25f6726349
