<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Climate;

class ClimateController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $climates = Climate::all();
        return response()->json($climates);
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
        $climate = new Climate($request->all());
        $climate->save();

        return response()->json($climate);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $climate = Climate::findOrFail($id);
        return response()->json($climate);
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
    public function update(Request $request, string $id, Climate $climate)
    {
        $climate = Climate::findOrFail($id);
        $climate->update($request->all());
        return response()->json(['message' => 'Climat mis à jour avec succès']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id, Climate $climat)
    {
        $climate = Climate::findOrFail($id);
        $climate->delete();
        return response()->json(['message' => 'Climat supprimé avec succès']);
    }
}
