<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TodoController;
use App\Http\Controllers\Api\UserController;
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

Route::post('/login', [AuthController::class, 'login'])->name('login');
Route::get('/notify', [AuthController::class, 'sendNotification']);

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::middleware(['auth:sanctum',])->group(function () {
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::prefix('user')->group(function () {
        Route::controller(UserController::class)->group(function () {
            Route::get('/all', 'index');
            Route::get('/me', 'getMe');
            Route::delete('/{id}', 'destroy')->middleware(['ability:0']); // 0 : Admin
        });
    });

    Route::prefix('todo')->group(function () {
        Route::controller(TodoController::class)->group(function () {
            Route::post('/', 'store');
            Route::get('/all', 'adminGetAll')->middleware(['ability:0']); // 0 : Admin
            Route::get('/', 'index');
        });
    });
});
