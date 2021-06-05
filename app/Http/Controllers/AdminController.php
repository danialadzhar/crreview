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
        $users_pending_consultant = User::where('status', 'pending')->where('role', 'consultant')->->limit(7)get();
        $count_pending_consultant = User::where('status', 'pending')->where('role', 'consultant')->count();

        return view('admin.home', compact('users_pending_consultant','count', 'count_pending_consultant'));
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
