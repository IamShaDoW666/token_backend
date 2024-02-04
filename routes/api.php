<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API;
use Illuminate\Http\Request;

Route::post('login', [API\UserController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('call-next', [API\CallController::class, 'callNext'])->name('call_next_mobile');
    Route::post('logout', [API\UserController::class, 'logout']);
    Route::get('dashboard', [API\DashboardController::class, 'dashboard'])->name('dashboard')->middleware('permission:view dashboard');
    Route::post('set-service-and-counter', [API\CallController::class, 'setServiceApiCounter']);
    Route::post('get-tokens', [API\CallController::class, 'getTokensForCall']);
});
