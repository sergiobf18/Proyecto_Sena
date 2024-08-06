<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Diagnosis;
use Illuminate\Support\Facades\Validator;

class DiagnosisapiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $diagnoses = Diagnosis::all();
        return response()->json($diagnoses);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validación de datos
        $validator = Validator::make($request->all(), [
            'descrip_diagnosis' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Creación de un nuevo diagnóstico
        $diagnosis = new Diagnosis();
        $diagnosis->descrip_diagnosis = $request->input('descrip_diagnosis');
        $diagnosis->save();

        return response()->json(['message' => 'Diagnóstico creado con éxito', 'data' => $diagnosis], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $diagnosis = Diagnosis::find($id);

        if ($diagnosis) {
            return response()->json($diagnosis);
        } else {
            return response()->json(['message' => 'Diagnóstico no encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $diagnosis = Diagnosis::find($id);

        if (!$diagnosis) {
            return response()->json(['message' => 'Diagnóstico no encontrado'], 404);
        }

        // Validación de datos
        $validator = Validator::make($request->all(), [
            'descrip_diagnosis' => 'required|string|max:255',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        // Actualización del diagnóstico
        $diagnosis->descrip_diagnosis = $request->input('descrip_diagnosis');
        $diagnosis->save();

        return response()->json(['message' => 'Diagnóstico actualizado con éxito', 'data' => $diagnosis]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $diagnosis = Diagnosis::find($id);

        if ($diagnosis) {
            $diagnosis->delete();
            return response()->json(['message' => 'Diagnóstico eliminado con éxito']);
        } else {
            return response()->json(['message' => 'Diagnóstico no encontrado'], 404);
        }
    }
}
