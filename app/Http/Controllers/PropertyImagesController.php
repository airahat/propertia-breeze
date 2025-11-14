<?php

namespace App\Http\Controllers;

use App\Models\PropertyImages;
use Illuminate\Http\Request;
use function PHPUnit\Framework\returnArgument;

class PropertyImagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

        return view('admin.pages.images.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        foreach ($request->file('image') as $image)
            { 
            //  dd($image);
            // $path = $image->store('property_images', 'public');
            $image_path = $image->store('property_images', 'public');
            PropertyImages::create([
                'image'=> $image_path,
                'property_id'=> 1, 
            ]);
         }

         return redirect('/images/create')->with('success', 'Images uploaded successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(PropertyImages $propertyImages)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PropertyImages $propertyImages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PropertyImages $propertyImages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PropertyImages $propertyImages)
    {
        //
    }
}
