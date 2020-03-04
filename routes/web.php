<?php

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

// About Page
Route::get('about', function () {
    return view('about');
});

// Contact Page
Route::get('contact', function () {
    return view('contact');
    // return "Contact Us Page";
});

// Parameter Example
// Route::get('profile/{id?}', function ($id=1) {
//     return $id;
// });
