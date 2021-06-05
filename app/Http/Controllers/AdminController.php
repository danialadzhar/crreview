<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AdminController extends Controller
{

    public function index()
    {
        return view('admin.home');
    }
    
    public function login()
    {
        return view('admin.login');
    }

    public function login_process(Request $request)
    {
        $credentials = $request->only('email', 'password');
        
        if(Auth::guard('admin')->attempt($credentials)) 
        {

            return redirect('admin');

        }

        return redirect()->back()->with('error', 'Wrong email or password!');
    }
}
