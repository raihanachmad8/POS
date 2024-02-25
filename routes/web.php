<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('pages.home.index');
});

Route::prefix('product')->group(function () {
    Route::get('/', [ProductController::class, 'index'] )->name('product');
    Route::get('/{id}', [ProductController::class, 'show'] )->name('product.show');
    Route::prefix('category')->group(function () {
        Route::get("/food-beverage", [ProductController::class, 'filterByCategoryFood']);
        Route::get("/beauty-health", [ProductController::class, 'filterByCategoryBeauty']);
        Route::get("/home-care", [ProductController::class, 'filterByCategoryHomeCare']);
        Route::get("/baby-kid", [ProductController::class, 'filterByCategoryBabyKid']);
        Route::get('/{id}', [ProductController::class, 'filterByCategory'] )->name('product.category');
    });
});

Route::get('/user/{id}/name/{name}', [ProfileController::class, 'index' ])->name('profile');
