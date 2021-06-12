<?php

use App\Http\Controllers\Frontend\PocketListController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('pockets', [PocketListController::class, 'index'])->name('pockets');
Route::get('pocket/{id}/contents', [PocketListController::class, 'contents'])->name('pocket.contents');


