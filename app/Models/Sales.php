<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sales extends Model
{
        /** @use HasFactory<\Database\Factories\PropertiesFactory> */
    use HasFactory;
protected $fillable = [
    'property_id',
    'buyer_name',
    'buyer_phone',
    'sale_price',
    'paid_price',
    'remaining_price',
    'payment_status_id',
    'size',
    'measurement_id',
    'address',
    'city',
    'area',
    'notes',

];
}
