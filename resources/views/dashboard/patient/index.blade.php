@extends('dashboard.master')
@section('titulo','Pacientes')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
    <h1>Listado de pacientes</h1>
    <br>
    <a href="{{url('dashboard/patient/create')}}" class="btn btn-primary btn-lg">Ingresar nuevo paciente</a>
    <table class="table table-bordered border-primary">
        <thead>
            <tr>
                <th>Id paciente</th>
                <th>Nombres</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Correo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patient as $patient )
           
            <tr>
                <td scope="row">{{$patient->id}}</td>
                <td scope="row">{{$patient->name}}</td>
                <td scope="row">{{$patient->last_name}}</td>
                <td scope="row">{{$patient->second_last_name}}</td>
                <td scope="row">{{$patient->email}}</td>
            </tr>
            @endforeach
        </tbody>

</div>
</main>

@endsection