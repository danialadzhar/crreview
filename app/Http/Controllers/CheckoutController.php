<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckoutController extends Controller
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
     * Plans
     * 
     * 
     */
    public function plans()
    {
        return view('pages.payment.plans');
    }

    /**
     * Make a payment
     * 
     * 
     */
    public function payment()
    {
        return view('pages.payment.payment');
    }

    
}
