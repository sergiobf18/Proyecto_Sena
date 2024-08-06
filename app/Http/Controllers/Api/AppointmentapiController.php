<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Appointment;
use Illuminate\Support\Facades\Validator;

class AppointmentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $appointments = Appointment::with('patient', 'psychologist')->get();
        return response()->json($appointments);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $validator = Validator::make($request->all(), [
            'idPatient' => 'required|integer|exists:patients,id',
            'idPsychologist' => 'required|integer|exists:psychologists,id',
            'appointment_date' => 'required|date',
            'appointment_status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Creación de una nueva cita
        $appointment = new Appointment();
        $appointment->idPatient = $request->input('idPatient');
        $appointment->idPsychologist = $request->input('idPsychologist');
        $appointment->appointment_date = $request->input('appointment_date');
        $appointment->appointment_status = $request->input('appointment_status');
        $appointment->notes = $request->input('notes');
        $appointment->save();

        return response()->json(['message' => 'Cita creada con éxito', 'data' => $appointment], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $appointment = Appointment::with('patient', 'psychologist')->find($id);

        if ($appointment) {
            return response()->json($appointment);
        } else {
            return response()->json(['message' => 'Cita no encontrada'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $appointment = Appointment::find($id);

        if (!$appointment) {
            return response()->json(['message' => 'Cita no encontrada'], 404);
        }

        // Validación de datos
        $validator = Validator::make($request->all(), [
            'idPatient' => 'required|integer|exists:patients,id',
            'idPsychologist' => 'required|integer|exists:psychologists,id',
            'appointment_date' => 'required|date',
            'appointment_status' => 'required|string',
            'notes' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Actualización de la cita
        $appointment->idPatient = $request->input('idPatient');
        $appointment->idPsychologist = $request->input('idPsychologist');
        $appointment->appointment_date = $request->input('appointment_date');
        $appointment->appointment_status = $request->input('appointment_status');
        $appointment->notes = $request->input('notes');
        $appointment->save();

        return response()->json(['message' => 'Cita actualizada con éxito', 'data' => $appointment]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $appointment = Appointment::find($id);

        if ($appointment) {
            $appointment->delete();
            return response()->json(['message' => 'Cita eliminada con éxito']);
        } else {
            return response()->json(['message' => 'Cita no encontrada'], 404);
        }
    }
}
