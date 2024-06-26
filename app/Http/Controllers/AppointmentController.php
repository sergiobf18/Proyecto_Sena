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
        $appointments = Appointment::with('patient')->get();
        return view('dashboard.appointment.index', ['appointments' => $appointments]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    $patients = \App\Models\Patient::all();
    $psychologists = \App\Models\Psychologist::all(); // Get all psychologists
    return view('dashboard.appointment.create', compact('patients', 'psychologists'));
        
       
       
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $appointment = new appointment();
        $appointment->idPatient= $request->input('idPatient');
        $appointment->idPsychologist= $request->input('idPsychologist');
        $appointment->appointment_date= $request->input('appointment_date'); 
        $appointment->appointment_status= $request->input('appointment_status');
        $appointment->notes= $request->input('notes'); 
        $appointment->save();
        $request->validate([
            'patient_id' => 'required',
            'appointment_date' => 'required|date',
            'appointment_status' => 'required',
            'notes' => 'required|string',
        ]);

        Appointment::create($request->all());   
        return view('dashboard.appointment.message', ['msg' => "Nueva cita creada"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(appointment $appointment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $appointments = \App\Models\psychologist::findOrFail($id);
        $patients = \App\Models\Patient::all();
        return view('dashboard.appointment.edit', compact('appointment', 'patients'));
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
    public function destroy($id)
    {
        $appointment=appointment::find($id);
        $appointment->delete();
        return redirect("dashboard/appointment");
    }
}
