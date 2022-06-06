<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\palindromeController;
use App\Http\Controllers\secondsController;
use App\Http\Controllers\textController;
use App\Http\Controllers\beerController;
use App\Http\Controllers\groupController;
use App\Http\Controllers\nomineeController;
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

Route::get('/palindromes', [palindromeController::class, 'checkPalindromes']);
Route::get('/time', [secondsController::class, 'countTime']);
Route::get('/text-response', [textController::class, 'textResponse']);
Route::get('/beer', [beerController::class, 'beerRecipe']);
Route::get('/groups', [groupController::class, 'groupOfTwo']);
Route::get('/nominee', [nomineeController::class, 'nominee']);

