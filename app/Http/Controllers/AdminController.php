<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminController extends Controller
{

    public function index()
    {
        $count = 1;
        $users_pending_consultant = Users::where('status', 'pending')->where('role', 'consultant')->get();

        return view('admin.home', compact('users_pending_consultant','count'));
    }
    
    /**
     * Login process
     * 
     * 
     */
    public function login()
    {
        return view('admin.login');
    }

    /**
     * Sign functionality
     * 
     * 
     */
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
