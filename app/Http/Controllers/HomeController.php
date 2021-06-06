<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultantAssigned;
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

        $count = 1;
        $consultant_assigned = ConsultantAssigned::where('consultant_id', $user->user_id)->get();
        $user_cv_review = ConsultantAssigned::where('user_id', $user->user_id)->get();

        return view('home', compact('user', 'consultant_assigned', 'count', 'user_cv_review'));
    }

}
