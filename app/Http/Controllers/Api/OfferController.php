<?php

namespace App\Http\Controllers\Api;

use App\Models\Offer;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $offers = Offer::all();
        return response()->json($offers, 200);
    }

    /**
     * Show the form for creating a new resource.
     */
    /*public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $offer = Offer::create([
            'company' => $request->company,
            'status' => $request->status,
            'jobPosition'=> $request->jobPosition,
            'web' => $request->web,
        ]);

        $offer->save();
        return response()->json($offer, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        return response()->json(Offer::find($id), 200);
    }

    /**
     * Show the form for editing the specified resource.
     */
    /*public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $offer = Offer::find($id);

        $offer->update([
            'company' => $request->company,
            'status' => $request->status,
            'jobPosition' => $request->jobPosition,
            'comment' => $request->comment,
        ]);
        $offer->save();
        return response()->json($offer, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $offer = Offer::find($id);
        $offer->delete();
    }
}
