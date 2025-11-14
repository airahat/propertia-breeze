<?php

namespace App\Http\Controllers;

use App\Models\Properties;
use App\Models\Rentals;
use App\Models\RentalStatus;
use App\Models\Tenant;
use Illuminate\Http\Request;

class RentalsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $rentals = Rentals::select('p.id', 'p.title','t.id', 't.name as tenant_name', 'r.monthly_rent', 'r.start_date', 'r.due_date', 'rs.name as status')
            ->from('rentals as r')
            ->join('properties as p', 'r.property_id', '=', 'p.id')
            ->join('tenants as t', 'r.tenant_id', '=', 't.id')
            ->join('rental_status as rs', 'r.status_id', '=', 'rs.id')
            ->orderBy('r.id', 'desc')
        ->get(); 
       return view('admin.pages.rentals.index', compact('rentals'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $tenants = Tenant::all();
        $properties = Properties::all();
        $status = RentalStatus::all();  
        return view('admin.pages.rentals.create', compact('tenants', 'properties', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Rentals::create([
            'tenant_id'=>$request->tenant_id,
            'property_id'=>$request->property_id,
            'monthly_rent'=>$request->monthly_rent,
            'start_date'=>$request->start_date,
            'due_date'=>$request->due_date,
            'security_deposit'=>$request->security_deposit,
            'status_id'=>$request->status_id,   
        ]);
        return redirect()->route('rentals.index')->with('success', 'Rental created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rentals $rentals)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rentals $rentals)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rentals $rentals)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rentals $rentals)
    {
        //
    }
}
