<?php

use App\Http\Controllers\PocketContentController;
use App\Http\Controllers\PocketController;
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

Route::get('v1/pockets', [PocketController::class, 'index']);
Route::post('v1/pockets', [PocketController::class, 'store']);

Route::post('v1/pockets/{id}/contents', [PocketContentController::class, 'store']);
Route::get('v1/pockets/{id}/contents', [PocketContentController::class, 'index']);
Route::delete('v1/contents/{id}', [PocketContentController::class, 'destroy']);



