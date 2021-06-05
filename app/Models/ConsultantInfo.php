<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConsultantInfo extends Model
{
    use HasFactory;

    protected $table = 'consultant_info';

    protected $fillable = [

        'address',
        'phoneno',
        'user_id'
    ];
}
