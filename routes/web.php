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

//Route::get('/', function () {
//    return view('home');
// });

//easier

Route::view('/', 'home');

//Route::get('/', function () {
//  return view('contact');
//});

//easier

Route::view('/contact', 'contact');


Route::get('blog-post/{id}', function ($id) {
    return $id;
});
