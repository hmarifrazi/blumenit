<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManufacturerController;


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


Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class ,'signUpStore'])->name('register.store');

Route::get('/', [auth::class,'signInForm'])->name('signIn');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');


Route::get('/dashboard', function () {
    return view('dashboard');
})->name('superadmin.dashboard');

Route::get('/', function () {
    return view('dashboard');
})->name('dashboard');

Route::resource('category',CategoryController::class);
Route::resource('subcategory',SubCategoryController::class);
Route::resource('products',ProductController::class);
Route::resource('manufacturer',ManufacturerController::class);
Route::resource('admincustomer',CustomerController::class);

