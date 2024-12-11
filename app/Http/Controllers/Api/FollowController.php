<?php

namespace App\Http\Controllers\Api;

use App\Models\Offer;
use App\Models\Follow;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FollowController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(string $id)
    {
        //
        return response()->json(Offer::find($id)->follows, 200);
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
    public function store(Request $request, $offerId)
    {
        //
        $follow = Follow::create([
            'offer_id' => (int)$offerId,
            'news' => $request->news,
        ]);
        return response()->json($follow, 200);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $offerId, string $newsId)
    {
        //
        return response()->json(Offer::find($offerId)->follows[(int)$newsId - 1],200);
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
    public function update(Request $request, string $offerId, string $newsId)
    {
        //
        $follow = Offer::find($offerId)->follows[(int)$newsId - 1];

        $follow->update([
            'offer_id' => $request->offer_id,
            'news' => $request->news,
        ]);
        return response()->json($follow, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $offerId, string $newsId)
    {
        //
        Offer::find($offerId)->follows[(int)$newsId - 1]->delete();
    }
}
