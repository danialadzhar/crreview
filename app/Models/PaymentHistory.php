<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaymentHistory extends Model
{
    use HasFactory;

    protected $table = 'payment_history';
    
    protected $fillable = [
        'order_id',
        'user_id',
        'stripe_id',
        'price'
    ];
}
