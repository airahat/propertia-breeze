<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RentCollection;
use App\Models\Rentals;
use App\Models\RentPaymentStatus;
use Barryvdh\DomPDF\Facade\Pdf;

class RentCollectionController extends Controller
{
    /**
     * Display a listing of rent collections.
     */
    public function index()
    {
        $collections = RentCollection::with(['rental.tenant', 'rental.property', 'status'])->get();
        return view('admin.pages.rent-collection.index', compact('collections'));
    }

    /**
     * Show the form for creating a new rent collection.
     */
    public function create()
    {
        $rentals = Rentals::select(
            'r.id', 'r.property_id', 'r.tenant_id', 'r.monthly_rent',
            'p.title as property_name', 't.name as tenant_name'
        )
        ->from('rentals as r')
        ->join('properties as p', 'r.property_id', '=', 'p.id')
        ->join('tenants as t', 'r.tenant_id', '=', 't.id')
        ->get();

        $statuses = RentPaymentStatus::all();

        return view('admin.pages.rent-collection.create', compact('rentals', 'statuses'));
    }

    /**
     * Store a newly created rent collection in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'rental_id' => 'required|exists:rentals,id',
            'month' => 'required|date',
            'amount' => 'required|numeric',
            'payment_date' => 'nullable|date',
            'status_id' => 'required|exists:rent_payment_statuses,id',
        ]);

        RentCollection::create($request->all());

        return redirect()->route('rent-collection.index')->with('success', 'Rent collection added successfully.');
    }

    /**
     * Display the rent receipt as a PDF.
     */
    public function receipt($id)
    {
        $collection = RentCollection::with(['rental.tenant', 'rental.property', 'status'])->findOrFail($id);

        $pdf = Pdf::loadView('rent-receipt', compact('collection'));
        $pdf->setPaper('A4', 'portrait');

        return $pdf->stream('rent-receipt-'.$collection->id.'.pdf');
    }

    /**
     * Remove the specified rent collection from storage.
     */
    public function destroy($id)
    {
        $collection = RentCollection::findOrFail($id);
        $collection->delete();

        return redirect()->route('rent-collection.index')->with('success', 'Rent collection deleted successfully.');
    }
}
