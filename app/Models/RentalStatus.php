<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentalStatus extends Model
{
    protected $table = 'rental_status';

    // Allow mass assignment for all relevant columns
    protected $fillable = [
        'id',
        'name',

    ];
}