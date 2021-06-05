<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantAssigned extends Model
{
    use HasFactory;

    protected $table = 'consultant_assigned';

    protected $fillable = [


        'consultant_id',
        'user_id',
        'status'

    ];
}
