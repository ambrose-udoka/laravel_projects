<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Blog extends Controller
{
    function load_index(Request $req) {
    	// echo $req->method();
    return view('index');
}

function details(Request $req, $postid){
	// return view('post');
	$pagetitle = "Dtails of my Blog";
	$content = "Sometimes ago in Nigeria...";

	return view('post', ['title'=>$pagetitle, 'text'=>$content]);
}


function message(Request $req){
	// return view('post');

	return view('contact');
}

function submit(Request $req){
	// return view('post');
	//to retriev form elements:
$name = $req->input('name');
//create validation rule
$messages = ['name.required'=> 'Your fullname please',
			'name.min'=> 'Your name should not be less than five xters',
			'pwd.required'=> 'Please enter your password'
			];


$valid = $req->validate(['name'=>'required|min:5',
						 'email'=>'required|email',
						 'pwd'=>'required|min:4',
						 'cpwd'=>'required|same:pwd'
						],$messages);
$message = "Thank you $name for registering, we shall get back to you soon." ;
// you save it in a file here 
file_put_contents('welcome_message.txt', $message);
//to create a flash session

$req->session->flash('feedback', 'Thanks for registering'); //temporary
//redirect to the form page
session(['msg'=>'You are welcome']);
// return 'Successful';
return redirect(url('/'));

	
}



}
