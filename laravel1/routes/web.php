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

// Route::view('/', 'welcome');
// Route::view('contact', 'contact');
// Route::view('series/create', 'series/create');

Route::get('/', function(){
    // $nama = "Yoga Pratama";
    $postbody = "Lorem ipsum dolor sit, amet consectetur adipisicing elit. 
    Libero possimus molestias tempore eligendi eveniet. 
    Dignissimos et soluta, omnis corrupti porro iste impedit provident fuga voluptatum quas, 
    temporibus voluptatibus possimus asperiores.";

    // return view('welcome', ['nama' => $nama]);
    return view('welcome', ['body' => $postbody]);
});
