<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PaymentHistory;
Use Stripe;
use Auth;

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
        $user = Auth::User();

        if($user->status == 'unpaid')
        {

            return view('pages.payment.plans');  

        }else{

            return redirect('home');

        }
    }

    /**
     * Make a payment
     * 
     * 
     */
    public function payment()
    {
        $user = Auth::User();
        
        if($user->status == 'unpaid')
        {

            return view('pages.payment.payment');  

        }else{

            return redirect('home');

        }
    }

    /**
     * Checkout function
     * 
     * 
     */
    public function checkout(Request $request)
    {
        
        $user = Auth::User();

        // Make Payment
        $stripe = Stripe\Stripe::setApiKey('sk_test_51Is0JMDaFLLXIVTMt8ujhMs7kdLGN46eKimLpWkwoyhyhACR87OeV3BvixnUP4Ly1U2VlbX1lPMnsLVNGV06InAY00NTs1ohgL');
        
        try {

                // Generate token
                $token = Stripe\Token::create(array(

                    "card" => array(

                        "number"    => $request->cardnumber,
                        "exp_month" => $request->month,
                        "exp_year"  => $request->year,
                        "cvc"       => $request->cvc,
                        "name"      => $request->cardholder

                    )

                ));

                // If not generate view error
                if (!isset($token['id'])) {

                    return redirect()->back()->with('error','Token is not generate correct');

                }else{

                    // Create a Customer:
                    $customer = \Stripe\Customer::create([

                        'name' => $user->name,
                        'source' => $token['id'],
                        'email' => $user->email,

                    ]);

                    // Make a Payment
                    Stripe\Charge::create([

                        "amount" => 30 * 100,
                        "currency" => "myr",
                        "description" => "Premium Plan",
                        'customer' => $customer->id,

                    ]);

                    // Payment History
                    PaymentHistory::create([
                        'order_id' => uniqid(),
                        'user_id' => $user->user_id,
                        'stripe_id' => $customer->id,
                        'price' => 30
                    ]);

                    $user = User::where('user_id', $user->user_id)->first();
                    $user->status = 'paid';
                    $user->save();

                    return redirect('home')->with('success', 'You Have Make a Payment!');

                }

            } catch (\Exception $ex) {

                return redirect()->back()->with('error', $ex->getMessage());
            }
    }

    
}
