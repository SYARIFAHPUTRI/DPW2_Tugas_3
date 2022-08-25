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
    return view('index');
});

Route::get('/cart', function () {
    return view('cart');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/my-account', function () {
    return view('my-account');
});

Route::get('/product-detail', function () {
    return view('product-detail');
});

Route::get('/product-list', function () {
    return view('product-list');
});

Route::get('/wishlist', function () {
    return view('wishlist');
});

Route::get('/dashboard', function () {
    return view('admin.section.dashboard');
});

Route::get('/produk', function () {
    return view('admin.section.produk');
});

Route::get('/kategori', function () {
    return view('admin.section.kategori');
});

Route::get('/diskon', function () {
    return view('admin.section.diskon');
});

Route::get('/login-admin', function () {
    return view('admin.section.login-admin');
});

Route::get('/supplier', function () {
    return view('admin.section.supplier');
});


Route::get('/pelanggan', function () {
    return view('admin.section.pelanggan');
});