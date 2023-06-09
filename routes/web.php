<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
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

Route::get('/login', function () {
    return view('login');
})->name("login");

Route::post("/login", [UserController::class, "login"])->name("loginPost");
Route::get("/home", [ProductController::class, "index"])->name("home");
Route::get("/productDetails/{id?}", [ProductController::class, "details"])->name("details");
Route::post("/addToCard", [ProductController::class, "addToCart"])->name("addToCart"); 