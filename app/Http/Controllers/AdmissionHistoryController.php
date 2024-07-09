<?php

namespace App\Http\Controllers;

use App\Models\admissionHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdmissionHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.admissionHistory.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patient = \App\Models\Patient::all(); 
        $psychologist = \App\Models\Psychologist::all(); 
        $diagnosis = \App\Models\Diagnosis::all(); 
        return view('dashboard.admissionHistory.create', compact('patient', 'psychologist', 'diagnosis'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $admissionHistory= new admissionHistory();
        $admissionHistory->idPatient= $request -> input('idPatient');
        $admissionHistory->idPsychologist = $request->input('idPsychologist');
        $admissionHistory->idDiagnosis = $request->input('idDiagnosis');
        $admissionHistory->adhistory_date = $request->input('adhistory_date');
        $admissionHistory->psychologist= $request->input('psychologist');
        $admissionHistory->Document_type= $request->input('Document_type');
        $admissionHistory->Document_number= $request->input('Document_number');
        $admissionHistory->last_name= $request->input('last_name');
        $admissionHistory->second_last_name= $request->input('second_last_name');
        $admissionHistory->gender= $request->input('gender');
        $admissionHistory->personal_status= $request->input('personal_status');
        $admissionHistory->education= $request->input('education');
        $admissionHistory->occupation= $request->input('occupation');
        $admissionHistory->evolution= $request->input('evolution');
        $admissionHistory->motive_for_consultation= $request->input('motive_for_consultation');
        $admissionHistory->subjective= $request->input('subjective');
        $admissionHistory->mental_test= $request->input('mental_test');
        $admissionHistory->purpose_of_the_intervention= $request->input('purpose_of_the_intervention');
        $admissionHistory->hypothesis= $request->input('hypothesis');
        $admissionHistory->dsmv= $request->input('dsmv');
        $admissionHistory->process= $request->input('process');
        $admissionHistory->management_plan= $request->input('management_plan');
        $admissionHistory->clinical_assessment_of_suicide_risk= $request->input('clinical_assessment_of_suicide_risk');
        $admissionHistory->remission= $request->input('remission');
        $admissionHistory->save();
        return view('dashboard.admisssionHistory.message', ['msg' => "Nueva History clinica de ingreso creada"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(admissionHistory $admissionHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(admissionHistory $admissionHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, admissionHistory $admissionHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(admissionHistory $admissionHistory)
    {
        //
    }
}
