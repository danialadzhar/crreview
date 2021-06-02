<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('login');
});

Auth::routes();

Route::get('home', 'HomeController@index')->name('home');


/*
|--------------------------------------------------------------------------
| Checkout Controller
|--------------------------------------------------------------------------
|
| Here will be display checkout page
| Payment process will be here
|
*/

Route::get('checkout/premium', 'CheckoutController@payment');
Route::get('plans', 'CheckoutController@plans');
Route::post('chekcout/premium/make-payment', 'CheckoutController@checkout');