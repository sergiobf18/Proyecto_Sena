<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AppointmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointment = Appointment::with('patient')->get();
        return view('dashboard.appointment.index', ['appointment' => $appointment]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    $patient = \App\Models\Patient::all();
    $psychologist = \App\Models\Psychologist::all(); // Get all psychologists
    return view('dashboard.appointment.create', compact('patient', 'psychologist'));
        
       
       
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'idPatient' => 'required',
            'idPsychologist' => 'required',
            'appointment_date' => 'required|date',
            'appointment_status' => 'required',
            'notes' => 'required|string',
        ]);
    
        Appointment::create([
            'idPatient' => $request->input('idPatient'),
            'idPsychologist' => $request->input('idPsychologist'),
            'appointment_date' => $request->input('appointment_date'),
            'appointment_status' => $request->input('appointment_status'),
            'notes' => $request->input('notes'),
        ]);
    

        //Appointment::create($request->all());   
        return redirect()->route('appointment.index')->with('success', 'Cita creada exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(appointment $appointment)
    {
        return view('dashboard.appointment.show', compact('appointment'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $appointment = Appointment::with('patient', 'psychologist')->find($id);

        if (!$appointment) {
        
        return abort(404);
    }

    $patient = \App\Models\Patient::all(); 
    return view('dashboard.appointment.edit', compact('appointment', 'patient'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $appointment=appointment::find($id);
        $appointment->idPatient= $request->input('idPatient');
        $appointment->idPsychologist= $request->input('idPsychologist');
        $appointment->appointment_date= $request->input('appointment_date'); 
        $appointment->appointment_status= $request->input('appointment_status');
        $appointment->notes= $request->input('notes'); 
        $appointment->save();   
        return view('dashboard.appointment.message', ['msg' => "Nueva cita creada"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function message(Request $request)
    {
        // Obtenemos el mensaje de la sesión
        $msg = $request->session()->get('success', ''); // Usa un valor por defecto si no hay mensaje
        return view('dashboard.appointment.message', compact('msg'));
    }
    
     public function destroy($id)
    {
        $appointment=appointment::find($id);
        $appointment->delete();
        return redirect("dashboard/appointment");
    }
}
