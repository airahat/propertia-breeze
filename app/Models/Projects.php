<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    /** @use HasFactory<\Database\Factories\ProjectsFactory> */
    use HasFactory;

    protected $fillable = [
        'project_name',
        'location',
        'start_date',
        'end_date',
        'cost',
        'status',
        'description',
    ];
}
