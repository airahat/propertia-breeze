<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\Pivot;

class MaterialRecipe extends Pivot
{
    protected $table = 'material_recipe';

    protected $fillable = [
        'recipe_id',
        'material_id',
        'quantity',
        'cost',
    ];

    // Automatically calculate cost if not provided
    protected static function booted()
    {
        static::saving(function ($pivot) {
            // Only auto-calc cost if not manually entered
            if (is_null($pivot->cost)) {
                $material = Material::find($pivot->material_id);
                if ($material) {
                    $pivot->cost = $pivot->quantity * $material->cost_per_unit;
                }
            }
        });
    }
}
