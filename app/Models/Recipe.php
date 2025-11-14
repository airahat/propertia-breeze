<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable = [
        'name',
        'description',
        'base_area',
        'total_cost',
    ];

    public function materials()
    {
        return $this->belongsToMany(Material::class, 'material_recipe')
            ->using(MaterialRecipe::class)          // Custom pivot model
            ->withPivot(['quantity', 'cost'])       // Extra pivot fields
            ->withTimestamps();                     // created_at & updated_at
    }

public function calculateTotalCost()
{
    return $this->materials->sum(function ($material) {
        return $material->pivot->cost;
    });
}



}
