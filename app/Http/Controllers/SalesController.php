<?php

namespace App\Http\Controllers;

use Barryvdh\DomPDF\Facade\Pdf;

use App\Models\PaymentStatus;
use Illuminate\Http\Request;
use App\Models\Properties;
use App\Models\Sales;

class SalesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sales = Sales::select('s.id', 's.buyer_name', 's.buyer_phone', 's.sale_price', 's.paid_price', 's.remaining_price', 'ps.name as payment_status', 'p.title as property_title', 's.sale_date', 'p.address as property_address', 'p.city as city')
            ->from('sales as s')
            ->join('payment_status as ps', 's.payment_status_id', '=', 'ps.id')
            ->join('properties as p', 's.property_id', '=', 'p.id')
            ->join('property_types as pt', 'p.property_type_id', '=', 'pt.id')
            ->orderBy('s.id', 'desc')
            ->get();

        return view('admin.pages.sales.index', compact('sales'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $properties = Properties::all();
        $paymentStatus = PaymentStatus::all();
        return view('admin.pages.sales.create', compact('properties', 'paymentStatus'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        Sales::create([

            'property_id' => $request->property_id,
            'buyer_name' => $request->buyer_name,
            'buyer_phone' => $request->buyer_phone,
            'sale_price' => $request->price,
            'paid_price' => $request->paid_price,
            'remaining_price' => $request->remaining_price,
            'payment_status_id' => $request->payment_status_id,
            'size' => $request->size,
            'measurement_id' => $request->measurement_id,
            'address' => $request->address,
            'city' => $request->city,
            'area' => $request->area,
            'notes' => $request->notes,


        ]);

        return redirect()
            ->route('properties.index')
            ->with('success', 'Property Added Successfully!');


    }

    /**
     * Display the specified resource.
     */
    public function show($s)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($s)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $s)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($s)
    {
        //
    }


    // Properties' Deed

    // public function showDeed($id)
    // {
    //     $sale = Sales::select('s.*', 'p.title as property_title', 'p.address as property_address', 'p.city as property_city', 'p.area as property_area', 'p.size as property_size', 'pt.name as property_type', 'pp.name as property_purpose', 'm.name as measurement_name', 'ps.name as payment_status_name')
    //         ->from('sales as s')
    //         ->join('properties as p', 's.property_id', '=', 'p.id')
    //         ->join('property_types as pt', 'p.property_type_id', '=', 'pt.id')
    //         ->join('property_purpose as pp', 'p.property_purpose_id', '=', 'pp.id')
    //         ->join('measurement as m', 'p.measurement_id', '=', 'm.id')
    //         ->join('payment_status as ps', 's.payment_status_id', '=', 'ps.id')
    //         ->where('s.id', $id)
    //         ->first();

    //     return view('property-deed', compact('sale'));
    // }

    public function showDeed($id)
    {
        $sale = Sales::select('s.id', 's.property_id','s.buyer_name', 's.buyer_phone','s.sale_price','s.paid_price','s.remaining_price','s.payment_status_id','s.id','s.size', 's.measurement_id', 's.address', 's.city', 's.area', 's.notes', 's.sale_date', 'p.title as title', 'p.address as address', 'p.city as property_city', 'p.area as property_area', 'p.size as property_size', 'pt.name as property_type', 'pp.name as property_purpose', 'm.name as measurement', 'ps.name as payment_status')
            ->from('sales as s')
            ->join('properties as p', 's.property_id', '=', 'p.id')
            ->join('property_types as pt', 'p.property_type_id', '=', 'pt.id')
            ->join('property_purpose as pp', 'p.property_purpose_id', '=', 'pp.id')
            ->join('measurement as m', 'p.measurement_id', '=', 'm.id')
            ->join('payment_status as ps', 's.payment_status_id', '=', 'ps.id')
            ->where('s.id', $id)
            ->first();

        return view('property-deed', compact('sale'));
    }


public function generateDeed($id)
{
    $sale = Sales::findOrFail($id);

    // Load image and convert to base64
    $path = public_path('deed-header.jpg');
    $type = pathinfo($path, PATHINFO_EXTENSION);
    $data = file_get_contents($path);
    $base64 = 'data:image/' . $type . ';base64,' . base64_encode($data);

    $pdf = Pdf::loadView('property-deed', compact('sale', 'base64'))
        ->setPaper('legal', 'portrait');

    $pdf->setOptions([
        'defaultFont' => 'DejaVu Sans',
        'isHtml5ParserEnabled' => true,
        'isRemoteEnabled' => true,
    ]);

    return $pdf->stream("deed_{$sale->id}.pdf");
}






}
