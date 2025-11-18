<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentCollection extends Model
{
    protected $table = 'rent_collections';

    protected $fillable = [
        'rental_id',
        'month',
        'amount',
        'payment_date',
        'status_id',
    ];
}
