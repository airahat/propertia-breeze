<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RentPaymentStatus extends Model
{
    protected $table = 'rent_payment_statuses';
    protected $fillable = ['name'];
}
