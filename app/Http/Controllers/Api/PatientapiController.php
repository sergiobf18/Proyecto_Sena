<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient;
use Illuminate\Support\Facades\Validator;

class PatientapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $patients = Patient::all();
        return response()->json($patients);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Document_type' => 'required|string',
            'Document_number' => 'required|string|unique:patients',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_last_name' => 'nullable|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'personal_status' => 'nullable|string',
            'education' => 'nullable|string',
            'occupation' => 'nullable|string',
            'email' => 'nullable|string|email|max:255',
            'phone_number' => 'nullable|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $patient = new Patient();
        $patient->Document_type = $request->input('Document_type');
        $patient->Document_number = $request->input('Document_number');
        $patient->name = $request->input('name');
        $patient->last_name = $request->input('last_name');
        $patient->second_last_name = $request->input('second_last_name');
        $patient->date_of_birth = $request->input('date_of_birth');
        $patient->gender = $request->input('gender');
        $patient->personal_status = $request->input('personal_status');
        $patient->education = $request->input('education');
        $patient->occupation = $request->input('occupation');
        $patient->email = $request->input('email');
        $patient->phone_number = $request->input('phone_number');
        $patient->save();

        return response()->json(['message' => 'Nuevo paciente creado', 'data' => $patient], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $patient = Patient::find($id);
        if ($patient) {
            return response()->json($patient);
        } else {
            return response()->json(['message' => 'Paciente no encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $patient = Patient::find($id);

        if (!$patient) {
            return response()->json(['message' => 'Paciente no encontrado'], 404);
        }

        $validator = Validator::make($request->all(), [
            'Document_type' => 'required|string',
            'Document_number' => 'required|string|unique:patients,Document_number,'.$patient->id,
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_last_name' => 'nullable|string|max:255',
            'date_of_birth' => 'required|date',
            'gender' => 'required|string',
            'personal_status' => 'nullable|string',
            'education' => 'nullable|string',
            'occupation' => 'nullable|string',
            'email' => 'nullable|string|email|max:255',
            'phone_number' => 'nullable|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $patient->Document_type = $request->input('Document_type');
        $patient->Document_number = $request->input('Document_number');
        $patient->name = $request->input('name');
        $patient->last_name = $request->input('last_name');
        $patient->second_last_name = $request->input('second_last_name');
        $patient->date_of_birth = $request->input('date_of_birth');
        $patient->gender = $request->input('gender');
        $patient->personal_status = $request->input('personal_status');
        $patient->education = $request->input('education');
        $patient->occupation = $request->input('occupation');
        $patient->email = $request->input('email');
        $patient->phone_number = $request->input('phone_number');
        $patient->save();

        return response()->json(['message' => 'Los datos han sido actualizados', 'data' => $patient]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        if ($patient) {
            $patient->delete();
            return response()->json(['message' => 'Paciente eliminado']);
        } else {
            return response()->json(['message' => 'Paciente no encontrado'], 404);
        }
    }
}
