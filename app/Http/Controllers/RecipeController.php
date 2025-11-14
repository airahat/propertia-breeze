<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use App\Models\Material;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    // Show all recipes
    public function index()
    {
        $recipes = Recipe::with('materials.unit')->get();
        return view('admin.pages.recipes.index', compact('recipes'));
    }

    // Show a single recipe
    public function show($id)
    {
        $recipe = Recipe::with('materials.unit')->findOrFail($id);
        return view('admin.pages.recipes.show', compact('recipe'));
    }

    // Show the form to create a new recipe
    public function create()
    {
        $materials = Material::with('unit')->get();
        return view('admin.pages.recipes.create', compact('materials'));
    }

    // Store a new recipe with materials
public function store(Request $request)
{
    // Validate basic recipe info
    $request->validate([
        'name' => 'required|string|max:255',
        'description' => 'nullable|string',
        'base_area' => 'required|numeric|min:1',
        'materials' => 'required|array|min:1',
        'materials.*.id' => 'required|exists:materials,id',
        'materials.*.quantity' => 'required|numeric|min:0.01',
    ]);

    // Create the Recipe
    $recipe = Recipe::create([
        'name' => $request->name,
        'description' => $request->description,
        'base_area' => $request->base_area,
    ]);

    // Prepare data for pivot table
    $materialsData = [];
    foreach ($request->materials as $materialInput) {
        $material = Material::find($materialInput['id']);
        if ($material) {
            $quantity = $materialInput['quantity'];
            $cost = $quantity * $material->cost_per_unit;
            $materialsData[$material->id] = [
                'quantity' => $quantity,
                'cost' => $cost,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
    }

    // Attach materials
    $recipe->materials()->attach($materialsData);

    // Update total_cost in recipes table
    $recipe->total_cost = $recipe->calculateTotalCost();
    $recipe->save();

    return redirect()->route('recipes.index')
        ->with('success', 'Recipe created successfully!');
}
}
