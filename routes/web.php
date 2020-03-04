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

Route::view('/', 'home')->name('home'); //adds a name to 'home' page in the route:list (check php artisan route:list)

//Route::get('/', function () {
//  return view('contact');
//});

//easier

Route::view('/contact', 'contact')->name('contact'); //adds a name to 'contact' page in the route:list (check php artisan route:list)

Route::get('blog-post/{id}/{welcome?}', function ($id, $welcome = 1) { //laravel.test/blog-post/1(since $welcome = 1)
    $pages = [
        1 => [
            'title' => ' from page 1', //index 1 has the text "from page 1"

        ],
        2 => [
            'title' => ' from page 2', //index 2 has the text "from page 2"

        ],
    ];

    $welcomes = [1 => '<b>Hello</b>', 2 => 'Welcome to'];


    return view( //return view means: render this in the page of route::get
        'blog-post',     //show in the page blog-post
        [
            'data' => $pages[$id],  //the variable data of $pages [1 or 2]
            'welcome' => $welcomes[$welcome], //show the intro text in $welcome [sub index 1 for .hello or sub-index 2 for .welcome to]

        ]
    );
})->name('blog-post'); //adds a name to 'blog-post' page in the route:list (check php artisan route:list)
