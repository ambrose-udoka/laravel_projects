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

Route::get('/about', function () {
    return "Hello world!";
});

Route::get('/error', function () {
    return view('error.404');
});

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/dashboard', function () {
    return view('home');
})->name('dash');

// Route::match(['post', 'get'],'/user', function () {
//     return "Hi Beautiful";
// });

//passing parameter/variables using curley braces

Route::get('user/{id}/{username}', function ($id, $username){
    // return "Hi Jessica";

    if($id>5){
    	return "Hi, $username, you are an Admin";
    }elseif($id<=5){
    	return "Hi, $username, you are a public user";
    }else{
    	return "Undefined user";
    }
});


Route::get('login/{usertype}', function ($usertype){
    // return "Hi Jessica";
});