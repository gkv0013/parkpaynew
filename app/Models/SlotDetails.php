<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SlotDetails extends Model
{
 
    use HasFactory;
    protected $fillable = [
        'brandname',
        'address',
        'slot_numbers',
        'brand_thumbnail',
        'selling_price',
    ];

}
