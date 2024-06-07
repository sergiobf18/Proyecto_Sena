@extends('dashboard.master')
@section('titulo','Pacientes')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
    <h1>Listado de pacinetes</h1>
    <br>
    <a href="{{url('dashboard/patient/create')}}">Ingresar nuevo paciente</a>
    </div>
</main>

@endsection