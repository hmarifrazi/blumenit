<?php

use App\Models\Role;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthenticationController as auth;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\SubCategoryController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManufacturerController;

use App\Http\Middleware\SuperAdminMiddleware;
use App\Http\Middleware\isAdmin;

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

/********for fronend********/
// Route::get('/', [FrontEnd::class, 'index'])->name('front.home');
// Route::get('/games', [FrontEnd::class, 'games'])->name('front.games');
// Route::get('/categoryss', [FrontEnd::class, 'category'])->name('front.category');
// Route::get('/aboutus', [FrontEnd::class, 'aboutus'])->name('front.aboutus');

// Route::get('/corporate-business', [FrontEnd::class, 'corporatebusiness'])->name('front.corporate');
// Route::post('/corporate-business_inq', [FrontEnd::class, 'corporatebusiness_inq'])->name('front.corporate_inq');

// Route::get('/contactus', [FrontEnd::class, 'contactus'])->name('front.contactus');
// Route::get('/c/{id}', [FrontEnd::class, 'categoryview'])->name('front.categoryview');
// Route::get('/sc/{id}', [FrontEnd::class, 'subcategoryview'])->name('front.subcategoryview');
// Route::get('/shopview', [FrontEnd::class, 'shopview'])->name('front.shopview');
// Route::get('/product/{id}', [FrontEnd::class, 'product'])->name('front.product');
// Route::get('/wishlist', [FrontEnd::class, 'wishlist'])->name('front.wishlist');
// Route::get('/search', [FrontEnd::class, 'search'])->name('front.search');
//     /* cart */
// Route::get('/cart', [CartController::class, 'cartView'])->name('front.cart');
// Route::get('/addtocart', [CartController::class, 'addToCart'])->name('front.addcart');
// Route::get('/updatecart', [CartController::class, 'updateCart'])->name('front.updateCart');
// Route::get('/removecart', [CartController::class, 'removeCart'])->name('front.removeCart');
//     /* cart */
//     /* checkout */
// Route::get('/checkout', [CheckoutController::class, 'index'])->name('front.checkout');
// Route::get('/guestcheckout', [CheckoutController::class, 'guest_checkout'])->name('front.guestcheckout');
// Route::get('/detailscheckout', [CheckoutController::class, 'details_checkout'])->name('front.detailscheckout');
// Route::post('/checkoutaddress', [CheckoutController::class, 'checkout_address'])->name('front.checkoutaddress');
// Route::get('/finalcheckout', [CheckoutController::class, 'final_checkout'])->name('front.finalcheckout');

// Route::get('/shippingcheck', [CheckoutController::class, 'shippingcheck'])->name('front.shippingcheck');

// Route::post('/ordersubmit', [CheckoutController::class, 'order_submit'])->name('front.ordersubmit');
// Route::get('/finishorder/{id}', [CheckoutController::class, 'finish_order'])->name('front.finishorder');
//     /* checkout */

Route::get('/register', [auth::class,'signUpForm'])->name('register');
Route::post('/register', [auth::class ,'signUpStore'])->name('register.store');
Route::get('/', [auth::class,'signInForm'])->name('signIn');
Route::get('/login', [auth::class,'signInForm'])->name('login');
Route::post('/login', [auth::class,'signInCheck'])->name('login.check');
Route::get('/logout', [auth::class,'singOut'])->name('logOut');


Route::group(['middleware'=>SuperAdminMiddleware::class],function(){
    Route::prefix('superadmin')->group(function(){
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('superadmin.dashboard');

    });
});


Route::group(['middleware'=>isAdmin::class],function(){
    Route::prefix('admin')->group(function(){
        Route::get('dashboard', function () {
            return view('dashboard');
        })->name('admin.dashboard');

    });
});



Route::resource('category',CategoryController::class);
Route::resource('subcategory',SubCategoryController::class);
Route::resource('products',ProductController::class);
Route::resource('manufacturer',ManufacturerController::class);
Route::resource('customer',CustomerController::class);

