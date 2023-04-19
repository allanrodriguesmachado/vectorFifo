<?php

use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::prefix('/')->name('admin.')->group(function () {
    Route::get('/', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('login', [AuthController::class, 'login'])->name('login.do');


    Route::group(['middleware' => ['auth']], function () {
        Route::get('home', [AuthController::class, 'home'])->name('home');
        Route::get('users/team',[UserController::class, 'team'])->name('users.team');
        Route::resource('users',UserController::class);
    });

    Route::get('logout', [AuthController::class, 'logout'])->name('logout');
});
