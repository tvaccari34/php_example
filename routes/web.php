<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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
    // $posts = DB::table('posts')->get();
    // return view('welcome')->with('posts', $posts);
    return view('home');
});

Route::get('/contact', function(){
    return view('contact');
});

Route::get('/about', function() {
    return view('about');
});
