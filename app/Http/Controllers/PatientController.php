<?php

namespace App\Http\Controllers;

use App\Models\Models\patient;
use App\Models\patient as ModelsPatient;
use Illuminate\Http\Request;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patient=ModelsPatient::all();
        return view('dashboard.patient.index',['patient'=> $patient]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.patient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ModelsPatient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ModelsPatient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ModelsPatient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ModelsPatient $patient)
    {
        //
    }
}
