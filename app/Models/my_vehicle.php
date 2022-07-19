<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class my_vehicle extends Model
{
    protected $table = 'my_vehicle';
    use HasFactory;
    protected $fillable = [
        'user_Id',
        'vehicle_name',
        'vehicle_number',
        'RC_number',
    
    ];
}
