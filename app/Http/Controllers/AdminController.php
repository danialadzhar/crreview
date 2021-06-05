<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ConsultantInfo;
use Auth;

class AdminController extends Controller
{

    public function index()
    {

        $count_unpaid_customer = User::where('status', 'unpaid')->where('role', 'customer')->count();
        $count_pending_consultant = User::where('status', 'pending')->where('role', 'consultant')->count();

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

    /**
     * Consultant page
     * 
     * 
     */
    public function consultant($status,$role)
    {   
        $count = 1;
        $users = User::where('status', $status)->where('role', $role)->get();
        $user_status = $status;
        $user_role = $role;

        return view('admin.pages.consultant.index', compact('users', 'user_status', 'user_role', 'count'));
    }

    /**
     * Consultant user edit
     * 
     * 
     */
    public function edit_consultant($id)
    {   
        $user = User::where('user_id', $id)->first();
        $consultant_info = ConsultantInfo::where('user_id', $id)->first();

        return view('admin.pages.consultant.edit', compact('user', 'consultant_info'));
    }

    /**
     * Edit consultant function
     * 
     * 
     */
    public function update_consultant(Request $request, $id)
    {
        $user = User::where('user_id', $id)->first();
        $consultant_info = ConsultantInfo::where('user_id', $id)->first();

        return redirect('admin')->with('success', );
    }
}
