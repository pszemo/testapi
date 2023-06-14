<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Employee::all();
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
        $employee = Employee::create($request->all());
        return response()->json($employee, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Employee $employee)
    {
        return $employee;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $employee->update($request->all());
        return response()->json($employee, 200);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Employee $employee)
    {
        //
        $employee->delete();
        return response()->json(null, 204);
    }

    public function showOffice($employee_id)
    {
        $employee = Employee::findOrFail($employee_id);
        $office = $employee->office;
        return $office;
    }
}
