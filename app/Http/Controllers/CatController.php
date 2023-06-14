<?php

namespace App\Http\Controllers;

use App\Models\Cat;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class CatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Cat::all();
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
        $cat = Cat::create($request->all());
        return response()->json($cat, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Cat $cat)
    {
        return $cat;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Cat $cat)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Cat $cat)
    {
        $cat->update($request->all());
        return response()->json($cat, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Cat $cat)
    {
        //
        $cat->delete();
        return response()->json(null, 204);
    }
}
