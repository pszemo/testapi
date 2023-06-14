<?php

namespace App\Http\Controllers;

use App\Models\Office;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class OfficeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Office::all();
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
        $office = Office::create($request->all());
        return response()->json($office, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Office $office)
    {
        return $office;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Office $office)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Office $office)
    {
        $office->update($request->all());
        return response()->json($office, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Office $office)
    {
        //
        $office->delete();
        return response()->json(null, 204);
    }

    public function showEmployees($office_id)
    {
        $office = Office::findOrFail($office_id);
        $employees = $office->employees;
        return $employees;
    }

    public function showCats($office_id){
        $office = Office::findOrFail($office_id);
        $cats = $office->cats;
        return $cats;
    }


}
