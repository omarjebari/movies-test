<?php

use App\Http\Controllers\MovieController;
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
Route::prefix('movies')->group(function () {
    Route::get('/', [MovieController::class, 'index'])->name('movies.index');
    Route::post('/', [MovieController::class, 'store'])->name('movies.store');
    Route::delete('{movie}', [MovieController::class, 'destroy'])->name('movies.destroy');
});
