<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\Auth\LoginController;

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

Route::get('/',  [WebController::class, 'index'])->name('index');


Route::controller(CartController::class)->group(function () {
    Route::get('users/carts', 'index')->name('carts.index');
    Route::post('users/carts', 'store')->name('carts.store');
    Route::delete('users/carts','destroy')->name('carts.destroy');
    Route::get('users/mypage/register_card', 'register_card')->name('mypage.register_card');
    Route::post('users/mypage/token', 'token')->name('mypage.token');
});
// 後略


Route::controller(UserController::class)->group(function () {
    Route::get('users/mypage', 'mypage')->name('mypage');
    Route::get('users/mypage/edit', 'edit')->name('mypage.edit');
    Route::put('users/mypage', 'update')->name('mypage.update');
    Route::get('users/mypage/password/edit', 'edit_password')->name('mypage.edit_password');
    Route::put('users/mypage/password', 'update_password')->name('mypage.update_password'); 
    Route::get('users/mypage/favorite','favorite')->name('mypage.favorite'); 
    Route::get('users/mypage/register_card', 'register_card')->name('mypage.register_card');
    Route::post('users/mypage/token', 'token')->name('mypage.token');
    Route::delete('users/mypage/delete', 'destroy')->name('mypage.destroy');
    Route::get('users/mypage/cart_history', 'cart_history_index')->name('mypage.cart_history');
    Route::get('users/mypage/cart_history/{num}', 'cart_history_show')->name('mypage.cart_history_show');

});



Route::post('reviews', [ReviewController::class, 'store'])->name('reviews.store');

Route::get('products/{product}/favorite', [ProductController::class, 'favorite'])->name('products.favorite');
Route::get('products/{product}/favorite',[ProductController::class, 'favorite'])->name('products.favorite');
Route::resource('products', ProductController::class)->middleware(['auth', 'verified']);
Route::post('products/search',[ProductController::class,'search'])->name('products.search');
Auth::routes(['verify' => true]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();
Route::get('/login/guest', [App\Http\Controllers\Auth\LoginController::class,'guestlogin'])->name('login.guest');


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



?>