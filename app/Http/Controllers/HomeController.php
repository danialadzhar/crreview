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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {   
        $user = Auth::User();

        return view('home', compact('user'));
    }

    /**
     * Consultant page
     * 
     * 
     */
    public function cosultant_page()
    {
        $user = Auth::User();

        return view('pages.consultant.index', compact('user'));
    }

}
