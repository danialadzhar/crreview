<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class AdminController extends Controller
{

    public function index()
    {

        $count_unpaid_customer = User::where('status', 'unpaid')->where('role', 'customer')->count();
        $count_pending_consultant = User::where('status', 'approved')->where('role', 'consultant')->count();

        return view('admin.home', compact('count_pending_consultant', 'count_unpaid_customer'));
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
