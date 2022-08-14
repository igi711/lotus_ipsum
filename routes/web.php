<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;





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
    return view('welcome');
});

Route::get('/', function () {
    return view('pages/index');
});

Route::get('/index', function () {
    return view('pages/index');
});

Route::get('/shop', function () {
    return view('pages/shop');
});

Route::get('/contact', function () {
    return view('pages/contact');
});

Route::get('/user', function () {
    return view('pages/user');
});

Route::get('/shop/prod_1', function () {
    return view('pages/product/prod_1');
});

Route::get('/shop/prod_2', function () {
    return view('pages/product/prod_2');
});

Route::get('/shop/prod_3', function () {
    return view('pages/product/prod_3');
});

Route::get('/shop/prod_4', function () {
    return view('pages/product/prod_4');
});

Route::get('/shop/prod_5', function () {
    return view('pages/product/prod_5');
});

Route::get('/shop/prod_6', function () {
    return view('pages/product/prod_6');
});

Route::get('/shop/prod_7', function () {
    return view('pages/product/prod_7');
});

Route::get('/shop/prod_8', function () {
    return view('pages/product/prod_8');
});

Route::get('/shop/prod_9', function () {
    return view('pages/product/prod_9');
});

Route::get('/shop/prod_10', function () {
    return view('pages/product/prod_10');
});

Route::get('/shop/prod_11', function () {
    return view('pages/product/prod_11');
});

Route::get('/shop/prod_12', function () {
    return view('pages/product/prod_12');
});




