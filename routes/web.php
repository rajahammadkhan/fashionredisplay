<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('homes');
})->name('home');


Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/rework', function () {
    return view('rework');
})->name('rework');

Route::get('/brands', function () {
    return view('brands');
})->name('brands');

Route::get('/gift-card', function () {
    return view('gift-card');
})->name('gift-card');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/about-us', function () {
    return view('about-us');
})->name('about-us');

Route::get('/customer-service', function () {
    return view('customer-service');
})->name('customer-service');

Route::get('/faqs', function () {
    return view('faqs');
})->name('faqs');

Route::get('/contact-us', function () {
    return view('contact-us');
})->name('contact-us');

Route::get('/track-order', function () {
    return view('track-order');
})->name('track-order');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/product-detail', function () {
    return view('product-detail');
})->name('product-detail');

Route::get('/size-guide', function () {
    return view('size-guide');
})->name('size-guide');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/blog-detail', function () {
    return view('blog-detail');
})->name('blog-detail');

//Auth

Route::get('/customer/account/login', function () {
    return view('auth/login');
})->name('login');

Route::get('/customer/account/create', function () {
    return view('auth/signup');
})->name('create');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
