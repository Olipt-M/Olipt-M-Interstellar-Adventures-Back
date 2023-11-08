<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Ship;

class ShipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ships = Ship::all();
        return response()->json($ships);
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
        $ship = new Ship($request->all());
        $ship->save();

        return response()->json($ship);
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
    public function update(Request $request, string $id)
    {
        $ship = Ship::findOrFail($id);
        $ship->update($request->all());
        return response()->json(['message' => 'Vaisseau mis à jour avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Ship $ship)
    {
        $ship = Ship::findOrFail($id);
        $ship->delete();
        return response()->json(['message' => 'Vaisseau supprimé avec succès']);
    }
}
