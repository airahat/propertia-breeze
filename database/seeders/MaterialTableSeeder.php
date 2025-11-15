<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Material;
use App\Models\Unit;

class MaterialTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
 public function run()
    {
        // List of construction materials with their units
        $materials = [
            ['name' => 'Cement', 'unit' => 'bag', 'cost_per_unit' => 450],
            ['name' => 'Sand', 'unit' => 'cft', 'cost_per_unit' => 35],
            ['name' => 'Bricks', 'unit' => 'pcs', 'cost_per_unit' => 12],
            ['name' => 'Concrete', 'unit' => 'm3', 'cost_per_unit' => 7500],
            ['name' => 'Steel Rod', 'unit' => 'kg', 'cost_per_unit' => 110],
            ['name' => 'Aggregate', 'unit' => 'cft', 'cost_per_unit' => 40],
            ['name' => 'Water', 'unit' => 'liter', 'cost_per_unit' => 1],
            ['name' => 'Tile', 'unit' => 'm2', 'cost_per_unit' => 500],
            ['name' => 'Paint', 'unit' => 'liter', 'cost_per_unit' => 180],
            ['name' => 'PVC Pipe', 'unit' => 'm', 'cost_per_unit' => 90],
            ['name' => 'Wood Plank', 'unit' => 'cft', 'cost_per_unit' => 650],
            ['name' => 'Plaster', 'unit' => 'bag', 'cost_per_unit' => 360],
            ['name' => 'Glass Sheet', 'unit' => 'm2', 'cost_per_unit' => 850],
            ['name' => 'Door Set', 'unit' => 'set', 'cost_per_unit' => 7500],
            ['name' => 'Window Set', 'unit' => 'set', 'cost_per_unit' => 5500],
            ['name' => 'Sealant', 'unit' => 'tube', 'cost_per_unit' => 220],
            ['name' => 'Wallpaper', 'unit' => 'roll', 'cost_per_unit' => 400],
        ];

        foreach ($materials as $item) {

            // Get unit_id by finding its name
            $unit = Unit::where('name', $item['unit'])->first();

            if ($unit) {
                Material::firstOrCreate(
                    [
                        'name' => $item['name'],
                        'unit_id' => $unit->id,
                    ],
                    [
                        'cost_per_unit' => $item['cost_per_unit'],
                    ]
                );
            }
        }
    }
}
