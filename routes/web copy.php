<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\HomesController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('home');
});

Route::get('/homes/list', [HomesController::class,'index']);
Route::get('/homes/add', [HomesController::class,'create']);
Route::post('/homes/save', [HomesController::class,'store']);
Route::get('/homes/edit/{id}', [HomesController::class,'edit']);
Route::post('/homes/update/{id}', [HomesController::class,'update']);
Route::get('/homes/show/{id}', [HomesController::class,'show']);
Route::post('/homes/delete/{id}', [HomesController::class,'destroy']);
Route::get('/homes/userslist/{id}', [HomesController::class,'usersList']);

Route::get('/products/list', [ProductsController::class,'index']);
