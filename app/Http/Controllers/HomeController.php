<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       if(Auth::user()->role=='Admin'){
            return view('dashboard-admin');
        }
        else if(Auth::user()->role=='Instructor'){
            return view('dashboard-instructor');
        }
        else if(Auth::user()->role=='Almac'){
            return view('dashboard-almac');
        }
        else{
            return "El rol no existe";
        }
    }
}
