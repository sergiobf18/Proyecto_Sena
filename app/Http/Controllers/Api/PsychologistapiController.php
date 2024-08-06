<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Psychologist;
use Illuminate\Support\Facades\Validator;

class PsychologistapiController extends Controller
{     
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $psychologists = Psychologist::all();
       return response()->json($psychologists);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'Document_type' => 'required|string',
            'Document_number' => 'required|string|unique:psychologists',
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_last_name' => 'nullable|string|max:255',
            'license' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone_number' => 'nullable|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $psychologist = new Psychologist();
        $psychologist->Document_type = $request->input('Document_type');
        $psychologist->Document_number = $request->input('Document_number');
        $psychologist->name = $request->input('name');
        $psychologist->last_name = $request->input('last_name');
        $psychologist->second_last_name = $request->input('second_last_name');
        $psychologist->license = $request->input('license');
        $psychologist->email = $request->input('email');
        $psychologist->phone_number = $request->input('phone_number');
        $psychologist->save();

        return response()->json(['message' => 'Nuevo psicólogo creado', 'data' => $psychologist], 201);
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $psychologist = Psychologist::find($id);
        if ($psychologist) {
            return response()->json($psychologist);
        } else {
            return response()->json(['message' => 'Psicólogo no encontrado'], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $psychologist = Psychologist::find($id);

        if (!$psychologist) {
            return response()->json(['message' => 'Psicólogo no encontrado'], 404);
        }

        $validator = Validator::make($request->all(), [
            'Document_type' => 'required|string',
            'Document_number' => 'required|string|unique:psychologists,Document_number,'.$psychologist->id,
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'second_last_name' => 'nullable|string|max:255',
            'license' => 'required|string|max:255',
            'email' => 'nullable|string|email|max:255',
            'phone_number' => 'nullable|string|max:20',
        ]);

        if ($validator->fails()) {
            return response()->json($validator->errors(), 400);
        }

        $psychologist->Document_type = $request->input('Document_type');
        $psychologist->Document_number = $request->input('Document_number');
        $psychologist->name = $request->input('name');
        $psychologist->last_name = $request->input('last_name');
        $psychologist->second_last_name = $request->input('second_last_name');
        $psychologist->license = $request->input('license');
        $psychologist->email = $request->input('email');
        $psychologist->phone_number = $request->input('phone_number');
        $psychologist->save();

        return response()->json(['message' => 'Los datos han sido actualizados', 'data' => $psychologist]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $psychologist = Psychologist::find($id);
        if ($psychologist) {
            $psychologist->delete();
            return response()->json(['message' => 'Psicólogo eliminado']);
        } else {
            return response()->json(['message' => 'Psicólogo no encontrado'], 404);
        }
    }
}
