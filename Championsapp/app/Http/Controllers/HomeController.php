<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//method 1
use App\Club;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
public function dashboard(){
    return view('dash');
}

// public function allclubs(){
//     return view('all_clubs');
// }

public function allclubs(Club $club){
    $r = $club->getclubs();

    // echo "<pre>";
    // print_r($r);
    // echo "</pre>";

    //you can use any name to pass the variable
     return view('all_clubs', ['clubs'=>$r]);
    //   
}

public function allclub(Club $club){
    $r = $club->getclubs();

    // echo "<pre>";
    // print_r($r);
    // echo "</pre>";

    //you can use any name to pass the variable
     return view('all_club', ['clubs'=>$r]);
    //   
}

public function create(Request $request, Club $club){
    if($request->isMethod('get')){
       return view('newclub'); 
    }else{
        echo 'Form submitted';

        //what to do: define validation rules, retrive form data, call the model function to insert into db, save feedback in flass session and redirect.

        $club_name = $request->input('clubname');
        $club_stadium = $request->input('stadium');
        //retieve all the form elements like this
        $club->insert_club($club_name, $club_stadium);
        session()->flash('status', 'Done');
        return redirect('/listclubs');
    }
    
}

}

