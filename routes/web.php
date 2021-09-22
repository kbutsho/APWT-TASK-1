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

Route::get('/about', function () {
    return view('pages.about');
});
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/teams', function () {
    return view('pages.teams');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/service', function () {
    return view('pages.service');
});
Route::get('/service/products', action: 'ProductController@show');


