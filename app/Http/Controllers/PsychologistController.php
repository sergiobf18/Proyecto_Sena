<?php

namespace App\Http\Controllers;

use App\Models\psychologist;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PsychologistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $psychologist=psychologist::all();
        return view('dashboard.psychologist.index',['psychologist'=> $psychologist]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.psychologist.create');
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
        $psychologist->phone_number = $request->input('phone_number');
        $psychologist->email = $request->input('phone_number');
        $psychologist->save();
        return view('dashboard.psychologist.message', ['msg' => "Nuevo psicologo creado"]);
    }

    /**
     * Display the specified resource.
     */
    public function show(psychologist $psychologist)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $psychologist=psychologist::find($id);
        return view('dashboard.psychologist.edit',['psychologist'=>$psychologist]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, psychologist $psychologist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(psychologist $psychologist)
    {
        //
    }
}
