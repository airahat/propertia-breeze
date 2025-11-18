<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Rentals;
use App\Models\RentPaymentStatus;

class RentCollection extends Model
{
    protected $fillable = ['rental_id', 'month', 'amount', 'payment_date', 'status_id'];

    public function rental()
    {
        return $this->belongsTo(Rentals::class);
    }

    public function status()
    {
        return $this->belongsTo(RentPaymentStatus::class, 'status_id');
    }
}
