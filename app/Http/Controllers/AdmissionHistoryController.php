<?php

namespace App\Http\Controllers;

use App\Models\admissionHistory;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class AdmissionHistoryController extends Controller
{
   
    public function index()
    {
        return view('dashboard.admissionHistory.index');
    }
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
        $validatedData = $request->validate([
            'adhistory_date' => 'required|date',
            'idPsychologist' => 'required|exists:psychologists,id',
            'idPatient' => 'required|exists:patients,id',
            'Document_type' => 'required',
            'Document_number' => 'required',
            'date_of_birth' => 'required|date',
            'gender' => 'required',
            'personal_status' => 'required',
            'education' => 'required',
            'occupation' => 'required|string',
            'evolution' => 'required',
            'motive_for_consultation' => 'nullable|string',
            'subjective' => 'nullable|string',
            'mental_test' => 'nullable|string',
            'purpose_of_the_intervention' => 'nullable|string',
            'hypothesis' => 'nullable|string',
            'idDiagnosis' => 'nullable|exists:diagnoses,id',
            'process' => 'nullable|string',
            'management_plan' => 'nullable|string',
            'clinical_assessment_of_suicide_risk' => 'nullable|string',
            'remission' => 'nullable|string',
        ]);
    
        //AdmissionHistory::create($validatedData);
        //return redirect()->route('admissionHistory.index')->with('success', 'Historial de ingreso guardado exitosamente.');
        
        $admissionHistory = AdmissionHistory::create($validatedData);

        // Generar el PDF con los datos
        $pdf = Pdf::loadView('dashboard.admissionHistory.pdf', ['data' => $validatedData]);

        // Descargar el PDF
        return $pdf->download('Historial_Ingreso.pdf');
    }
   
    /**
     * Display the specified resource.
     */
    public function show(AdmissionHistory $admissionHistory)
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
