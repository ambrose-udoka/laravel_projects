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
    return view('welcome');
});


// Route::get('/', function () {
//     return view('index');
// });

//if Controller is used, the call back function won.t be used, thus:

Route::get('/', 'Blog@load_index');
   


Route::get('/dashboard/{id}', function ($details){
    return view('post');
});

Route::get('/pages/{p}', function ($post) {
    return view('moat');
});