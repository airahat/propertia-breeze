<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Material extends Model
{
    protected $fillable = [
        'name',
        'unit_id',
        'cost_per_unit',
    ];

    // Relationship to Unit
    public function unit()
    {
        return $this->belongsTo(\App\Models\Unit::class);
    }

    // Relationship to Recipes (pivot)
    public function recipes()
    {
        return $this->belongsToMany(\App\Models\Recipe::class, 'material_recipe')
            ->using(\App\Models\MaterialRecipe::class)
            ->withPivot(['quantity', 'cost'])
            ->withTimestamps();
    }
}
