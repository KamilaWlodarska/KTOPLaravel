<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HomesController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ProductsCategoryController;

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
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');*/

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

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
Route::get('/products/add', [ProductsController::class,'create']);
Route::post('/products/save', [ProductsController::class,'store']);
Route::get('/products/edit/{id}', [ProductsController::class,'edit']);
Route::post('/products/update/{id}', [ProductsController::class,'update']);
Route::get('/products/show/{id}', [ProductsController::class,'show']);
Route::post('/products/delete/{id}', [ProductsController::class,'destroy']);

Route::get('/products_category/list', [ProductsCategoryController::class,'index']);
Route::get('/products_category/add', [ProductsCategoryController::class,'create']);
Route::post('/products_category/save', [ProductsCategoryController::class,'store']);
Route::get('/products_category/edit/{id}', [ProductsCategoryController::class,'edit']);
Route::post('/products_category/update/{id}', [ProductsCategoryController::class,'update']);
Route::get('/products_category/show/{id}', [ProductsCategoryController::class,'show']);
Route::post('/products_category/delete/{id}', [ProductsCategoryController::class,'destroy']);

Route::get('/login', [HomeController::class,'zmienStanUwierzytelnienia']);
Route::get('/logout', [HomeController::class,'zmienStanUwierzytelnienia']);
Route::get('/loggedin', [HomeController::class,'zwrocStroneZalogowania']);
Route::get('/registered', [HomeController::class,'zwrocStroneZarejestrowania']);

require __DIR__.'/auth.php';
