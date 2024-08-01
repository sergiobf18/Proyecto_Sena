<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\psychologist;


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
        $psychologist= new psychologist();
        $psychologist->Document_type = $request->input('Document_type');
        $psychologist->Document_number = $request->input('Document_number');
        $psychologist->name = $request->input('name');
        $psychologist->last_name = $request->input('last_name');
        $psychologist->second_last_name = $request->input('second_last_name');
        $psychologist->license = $request->input('license');
        $psychologist->email = $request->input('email');
        $psychologist->phone_number = $request->input('phone_number');
        $psychologist->save();
        return view('dashboard.psychologist.message', ['msg' => "Nuevo psicologo creado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $psychologist=psychologist::find($id);
        $psychologist->Document_type = $request->input('Document_type');
        $psychologist->Document_number = $request->input('Document_number');
        $psychologist->name = $request->input('name');
        $psychologist->last_name = $request->input('last_name');
        $psychologist->second_last_name = $request->input('second_last_name');
        $psychologist->license = $request->input('license');
        $psychologist->email = $request->input('email');
        $psychologist->phone_number = $request->input('phone_number');
        $psychologist->save();
        return view('dashboard.psychologist.message',['msg'=>"Los datos han sido actualizados"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
