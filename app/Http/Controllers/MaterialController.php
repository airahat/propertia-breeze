<?php

namespace App\Http\Controllers;

use App\Models\Material;
use App\Models\Unit;
use Illuminate\Http\Request;

class MaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $materials = Material::select('m.id', 'm.name','m.unit_id','m.cost_per_unit as cost', 'u.id', 'u.name as unit')
        ->from('materials as m')
        ->join('units as u', 'u.id', '=', 'm.unit_id')
        ->get();
        return view('admin.pages.materials.index', compact('materials'));
    }

    /**
     * Show the form for creating a new resource.
     */

    public function create()
    {

        $units = Unit::all();
        return view('admin.pages.materials.create', compact('units'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Material::create([
            'name'=> $request->name,
            'unit_id'=>$request->unit_id,
            'cost_per_unit'=>$request->cost_per_unit,
        ]);
                return redirect()
            ->route('materials.index')
            ->with('success', 'Material Added Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Material $material)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Material $material)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Material $material)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Material $material)
    {
        //
    }
}
