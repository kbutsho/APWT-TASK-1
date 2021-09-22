<?php

use Illuminate\Support\Facades\Route;

Route::view(uri:'/home', view:'pages.home')->name('home');
Route::view(uri:'/about', view:'pages.about')->name('about');
Route::view(uri:'/teams', view:'pages.teams')->name('teams');
Route::view(uri:'/contact', view:'pages.contact')->name('contact');
Route::view(uri:'/service', view:'pages.service')->name('service');

// Route::get('/about', function () {
//     return view('pages.about');
// });
// Route::get('/home', function () {
//     return view('pages.home');
// });
// Route::get('/teams', function () {
//     return view('pages.teams');
// });
// Route::get('/contact', function () {
//     return view('pages.contact');
// });
// Route::get('/service', function () {
//     return view('pages.service');
// });
Route::get('/service/products', action: 'ProductController@show')->name('service/products');


