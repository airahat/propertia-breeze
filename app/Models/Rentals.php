<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Tenant;
use App\Models\Properties;
use App\Models\RentPaymentStatus;

class Rentals extends Model
{
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

    /**
     * Relationship: Rental belongs to a Tenant
     */
    public function tenant()
    {
        return $this->belongsTo(Tenant::class, 'tenant_id');
    }

    /**
     * Relationship: Rental belongs to a Property
     */
    public function property()
    {
        return $this->belongsTo(Properties::class, 'property_id');
    }

    /**
     * Relationship: Rental has a payment status
     */
    public function status()
    {
        return $this->belongsTo(RentPaymentStatus::class, 'status_id');
    }
}
