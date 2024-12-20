<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\patient;



class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients= patient::all();
        return view('dashboard.patient.index',['patient'=> $patients]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $patient= patient::all();
        return view('dashboard.patient.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $patient = new patient();
        $patient->Document_type = $request->input('Document_type');
        $patient->Document_number = $request->input('Document_number');
        $patient->name = $request->input('name');
        $patient->last_name = $request->input('last_name');
        $patient->second_last_name = $request->input('second_last_name');
        $patient->date_of_birth = $request->input('date_of_birth');
        $patient->gender = $request->input('gender') ;
        $patient->personal_status = $request->input('personal_status');
        $patient->education = $request->input('education');
        $patient->occupation = $request->input('occupation');
        $patient->email = $request->input('email');
        $patient->phone_number = $request->input('phone_number');
        $patient->save();
        return redirect()->route('patient.index')->with('success', 'Paciente creado exitosamente.'); 
        //return view('dashboard.patient.message', ['msg' => "Nuevo paciente creado"]);
        
    
}
    

    /**
     * Display the specified resource.
     */
    public function show(patient $patient)
    {
        patient::all($patient);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $patient=patient::find($id);
        return view('dashboard.patient.edit',['patient'=>$patient]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $patient=patient::find($id);
        $patient->Document_type = $request->input('Document_type');
        $patient->Document_number = $request->input('Document_number');
        $patient->name = $request->input('name');
        $patient->last_name = $request->input('last_name');
        $patient->second_last_name = $request->input('second_last_name');
        $patient->date_of_birth = $request->input('date_of_birth');
        $patient->gender = $request->input('gender') ;
        $patient->personal_status = $request->input('personal_status');
        $patient->education = $request->input('education');
        $patient->occupation = $request->input('occupation');
        $patient->email = $request->input('email');
        $patient->phone_number = $request->input('phone_number');
        $patient->save();
        return view('dashboard.patient.message',['msg'=>"Los datos han sido actualizados"]);

       
    }

    public function message(Request $request)
    {
        // Obtenemos el mensaje de la sesión
        $msg = $request->session()->get('success', ''); // Usa un valor por defecto si no hay mensaje
        return view('dashboard.patient.message', compact('msg'));
    }

    public function destroy($id)
    {
        $patient=patient::find($id);
        $patient->delete();
        return redirect("dashboard/patient");
    }
}
