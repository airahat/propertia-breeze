<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Unit;

class UnitsTableSeeder extends Seeder
{
    public function run()
    {
        $units = [
            'kg',       // kilograms (cement, sand, steel rods)
            'bag',      // cement, plaster
            'pcs',      // bricks, tiles, windows
            'cft',      // cubic feet (wood, concrete)
            'cum',      // cubic meters (concrete, soil)
            'liter',    // paint, water
            'm',        // meter (pipes, rods)
            'm2',       // square meter (tiles, flooring)
            'm3',       // cubic meter (concrete, soil)
            'roll',     // wallpaper, fabric
            'set',      // window sets, door sets
            'tube',     // adhesives, sealants
        ];

        foreach ($units as $name) {
            Unit::firstOrCreate(['name' => $name]);
        }
    }
}
