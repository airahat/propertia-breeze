<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\PropertyTypes;
use App\Models\PropertyPurpose;
use App\Models\Measurement;
use Illuminate\Http\Request;

class PropertiesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
public function index()
{
    $properties = Properties::select(
            'p.id', 'p.title', 'p.description', 'p.property_type_id', 
            'p.property_purpose_id', 'p.address', 'p.city', 'p.area', 
            'p.size', 'p.measurement_id', 'p.price', 
            'pt.name as type', 'pp.name as purpose', 'm.name as measuremnet'
        )
        ->from('properties as p')
        ->join('property_types as pt', 'p.property_type_id', '=', 'pt.id')
        ->join('property_purpose as pp', 'p.property_purpose_id', '=', 'pp.id')
        ->join('measurement as m', 'p.measurement_id', '=', 'm.id')
        ->orderBy('p.id', 'desc')
        ->paginate(5); 

    return view('admin.pages.properties.index', compact('properties'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        $propertyTypes = PropertyTypes::all();
        $propertyPurposes = PropertyPurpose::all();
        $measurements = Measurement::all();
        // dd($propertyType);
        return view("admin.pages.properties.create", compact("propertyTypes", "propertyPurposes", "measurements"));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        // $request->validate([
        //    'photo'=>['mimes:jpg,png,jpeg', 'image', 'max:2048', ]
        // ]);
        // if($request->hasFile('photo')){
        //     $photo = $request->file('photo')->store('properties', 'public');
        // }else{
        //     $photo = null;
        // }   

        Properties::create([

            'title' => $request->title,
            'description' => $request->description,
            'property_type_id' => $request->property_type_id,
            'property_purpose_id' => $request->property_purpose_id,
            'measurement_id' => $request->measurement_id,
            'address' => $request->address,
            'city' => $request->city,
            'area' => $request->area,
            'size' => $request->size,
            'price' => $request->price,
        ]);

        return redirect()
        ->route('properties.index')
        ->with('success', 'Property Added Successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $property= Properties::select('p.id', 'p.title', 'p.description', 'p.property_type_id', 'p.property_purpose_id', 'p.address', 'p.city', 'p.area', 'p.size','p.measurement_id', 'p.price', 'pt.name as type', 'pp.name as purpose', 'm.name as measurement', 'i.image')
        ->from('properties as p')
        ->join('property_types as pt', 'p.property_type_id', '=', 'pt.id')
        ->join('property_purpose as pp', 'p.property_purpose_id', '=', 'pp.id')
        ->join('measurement as m', 'p.measurement_id', '=', 'm.id')
        ->leftJoin('property_images as i', 'p.id', '=', 'i.property_id')
        ->where('p.id', $id)
        ->orderBy('p.id', 'desc')
        ->first();
        // dd($property);
        return view('admin.pages.properties.show', compact('property'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $property = Properties::find($id);
        $propertyTypes = PropertyTypes::all();
        $propertyPurposes = PropertyPurpose::all();
        $measurements = Measurement::all();
        return view('admin.pages.properties.edit', compact('property', 'propertyTypes', 'propertyPurposes', 'measurements'));

    }

    public function fetchDetails($id)
{
    $property = Properties::select('p.id', 'p.title', 'p.description', 'p.property_type_id', 'p.property_purpose_id', 'p.address', 'p.city', 'p.area', 'p.size','p.measurement_id', 'p.price', 'pt.name as type', 'pp.name as purpose', 'm.id', 'm.name as measurement')
        ->from('properties as p')
        ->join('property_types as pt', 'p.property_type_id', '=', 'pt.id')
        ->join('property_purpose as pp', 'p.property_purpose_id', '=', 'pp.id')
        ->join('measurement as m', 'p.measurement_id', '=', 'm.id')
        ->where('p.id', $id)
        ->orderBy('p.id', 'desc')
        ->first();
    return response()->json($property);
}

    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, Properties $properties)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $properties = Properties::find($id);
        $properties-> delete();
        return redirect()->route('properties.index')->with('success', 'Property Deleted Successfully');
    }








}
