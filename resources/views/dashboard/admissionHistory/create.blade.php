@extends('dashboard.master')
@section('titulo','HC de ingreso')
@include('layouts/navigation')
@section('contenido')

<div class="container">
    <img src="{{ asset('storage\app\public\img\LOGO.jpg') }}" class="rounded float-start" alt="Logo" >
    <h1 class="display-6">HC DE INGRESO</h1>
    <br>
    <form action="{{ route('admissionHistory.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <label for="idPatient">Paciente</label>
            <select name="idPatient" id="idPatient" class="form-control">
                @foreach($patient as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idPsychologist">Psicólogo</label>
            <select name="idPsychologist" id="idPsychologist" class="form-control">
                @foreach($psychologist as $psychologist)
                    <option value="{{ $psychologist->id }}">{{ $psychologist->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="idDiagnosis">Diagnóstico</label>
            <select name="idDiagnosis" id="idDiagnosis" class="form-control">
                @foreach($diagnosis as $diagnosis)
                    <option value="{{ $diagnosis->id }}">{{ $diagnosis->name }}</option>
                @endforeach
            </select>
        </div>

        <!-- Agrega aquí los demás campos del formulario -->
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection