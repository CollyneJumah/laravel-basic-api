<?php

use App\Http\Controllers\BookController;
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

//
Route::get('/books', [BookController::class, 'index']);
Route::post('/books/store', [BookController::class, 'store']);

//api version one
Route::group(['prefix' => 'v1'], function()
{
    Route::group([], base_path('routes/apiVersion/api-v1.php'));
});

//API version 2
