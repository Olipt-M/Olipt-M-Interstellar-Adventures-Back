<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\JourneyType;

class JourneyTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $journeyTypes = JourneyType::all();
        return response()->json($journeyTypes);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $journeyType = new JourneyType($request->all());
        $journeyType->save();

        return response()->json($journeyType);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id, JourneyType $journeyType)
    {
        $journeyType = JourneyType::findOrFail($id);
        $journeyType->update($request->all());
        return response()->json(['message' => 'Type de voyage mis à jour avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, JourneyType $journeyType)
    {
        $journeyType = JourneyType::findOrFail($id);
        $journeyType->delete();
        return response()->json(['message' => 'Type de voyage mis à jour avec succès']);
    }
}
