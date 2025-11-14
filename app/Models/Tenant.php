<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tenant extends Model
{
    protected $table = 'tenants';

    // Allow mass assignment for all relevant columns
    protected $fillable = [
        'name',
        'nid',
        'email',
        'phone',
        'address',
        'image',
    ];
}
