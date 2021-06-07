<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ConsultantInfo;
use App\Models\User;
use Auth;

class ConsultantController extends Controller
{
    /**
     * Consultant page
     * 
     * 
     */
    public function index()
    {
        $user = Auth::User();
        
        // if($user->status == 'unapproved' && $user->role == 'consultant')
        // {

        //     return view('pages.consultant.index', compact('user'));

        // }else{
            
        //     return redirect('home');

        // }

        return view('pages.consultant.index', compact('user'));
    }

    public function store(Request $request)
    {   

        $user = Auth::User();
        $document = 'consultant_review_' . uniqid().'.' . $request->document->extension();
		$request->document->move(public_path('consultant'), $document);

        ConsultantInfo::create([

            'address' => $request->address,
            'phoneno' => $request->phoneno ,
            'user_id' => $user->user_id,
            'file_name' => $document

        ]);

        $user_update = User::where('user_id', $user->user_id)->first();
        $user_update->status = 'pending';
        $user_update->role = 'consultant';

        $user_update->save();

        return redirect('home');
    }
}
