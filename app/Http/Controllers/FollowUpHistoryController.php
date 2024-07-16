<?php

namespace App\Http\Controllers;

use App\Models\followUpHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FollowUpHistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('dashboard.followUpHistory.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patient = \App\Models\Patient::all(); 
        $psychologist = \App\Models\Psychologist::all(); 
        $diagnosis = \App\Models\Diagnosis::all(); 
        return view('dashboard.followUpHistory.create', compact('patient', 'psychologist', 'diagnosis'));
        
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $follow_uphistories= new followUpHistory();
        $follow_uphistories->idPatient= $request -> input('idPatient');
        $follow_uphistories->idPsychologist = $request->input('idPsychologist');
        $follow_uphistories->idDiagnosis = $request->input('idDiagnosis');
        $follow_uphistories->adhistory_date = $request->input('adhistory_date');
        $follow_uphistories->psychologist= $request->input('psychologist');
        $follow_uphistories->Document_type= $request->input('Document_type');
        $follow_uphistories->Document_number= $request->input('Document_number');
        $follow_uphistories->last_name= $request->input('last_name');
        $follow_uphistories->second_last_name= $request->input('second_last_name');
        $follow_uphistories->gender= $request->input('gender');
        $follow_uphistories->personal_status= $request->input('personal_status');
        $follow_uphistories->education= $request->input('education');
        $follow_uphistories->occupation= $request->input('occupation');
        $follow_uphistories->evolution= $request->input('evolution');
        $follow_uphistories->motive_for_consultation= $request->input('motive_for_consultation');
        $follow_uphistories->subjective= $request->input('subjective');
        $follow_uphistories->mental_test= $request->input('mental_test');
        $follow_uphistories->purpose_of_the_intervention= $request->input('purpose_of_the_intervention');
        $follow_uphistories->hypothesis= $request->input('hypothesis');
        $follow_uphistories->dsmv= $request->input('dsmv');
        $follow_uphistories->process= $request->input('process');
        $follow_uphistories->management_plan= $request->input('management_plan');
        $follow_uphistories->clinical_assessment_of_suicide_risk= $request->input('clinical_assessment_of_suicide_risk');
        $follow_uphistories->remission= $request->input('remission');
        $follow_uphistories->save();
        return view('dashboard.admisssionHistory.message', ['msg' => "Nueva History clinica de ingreso creada"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(followUpHistory $followUpHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(followUpHistory $followUpHistory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, followUpHistory $followUpHistory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(followUpHistory $followUpHistory)
    {
        //
    }
}
