<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rentals extends Model
{
    /** @use HasFactory<\Database\Factories\RentalsFactory> */
    use HasFactory;
    protected $fillable = [
        'property_id',
        'tenant_id',
        'start_date',
        'due_date',
        'monthly_rent',
        'security_deposit',
        'status_id',
    ];
}
