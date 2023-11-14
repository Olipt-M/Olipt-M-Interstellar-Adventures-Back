<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Planet;
use App\Models\Climate;

class PlanetController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(int $page = 1, int $limit = 5)
    {
        $planets = Planet::all()->skip(($page - 1) * $limit)->take($limit);
        foreach ($planets as $planet) {
            $planet->climate = Climate::findOrFail($planet->climate_id);
            $planet->journeyTypes = $planet->journeyTypes()->get();
        }

        return response()->json($planets);
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
        $planet = new Planet($request->all());
        $planet->save();

        return response()->json($planet);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $planet = Planet::findOrFail($id);
        $planet->climate = Climate::findOrFail($planet->climate_id);
        $planet->journeyTypes = $planet->journeyTypes()->get();

        return response()->json($planet);
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
    public function update(Request $request, string $id, Planet $planet)
    {
        $planet = Planet::findOrFail($id);
        $planet->update($request->all());
        return response()->json(['message' => 'Planète mise à jour avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Planet $planet)
    {
        $planet = Planet::findOrFail($id);
        $planet->delete();
        return response()->json(['message' => 'Planète supprimée avec succès']);
    }
}
