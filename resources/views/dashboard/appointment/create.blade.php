@extends('dashboard.master')
@section('titulo','Crear nueva cita')
@include('layouts.navigation')
@section('contenido')

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
    @endif


<div class="container py-4">
    
    <form action="{{ route('appointment.store') }}" method="POST">
    @csrf
    <div class="form-group">
    <label for="idPatient">Paciente</label>
    <select class="form-control" id="idPatient" name="idPatient" required>
        <option value="">Selecciona un paciente</option>
        @foreach($patient as $patient)
            <option value="{{ $patient->id }}" 
                data-document-type="{{ $patient->Document_type }}" 
                data-document-number="{{ $patient->Document_number }}" 
                data-name="{{ $patient->name }}" 
                data-last-name="{{ $patient->last_name }}" 
                data-second-last-name="{{ $patient->second_last_name }}" 
                data-email="{{ $patient->email }}" 
                data-phone-number="{{ $patient->phone_number }}">
                {{ $patient->Document_number }} --- {{ $patient->name }} {{ $patient->last_name }} 
            </option>
        @endforeach
    </select>
</div>
        
        <br>
        <div class="form-group">
            <label for="idPsychologist">Psicologo</label>
            <select class="form-control" id="idPsychologist" name="idPsychologist" required>
            <option value="">Selecciona un Psicologo</option>
            @foreach($psychologist as $psychologist)
            <option value="{{ $psychologist->id }}">{{ $psychologist->name }} {{ $psychologist->last_name }}
            {{ $psychologist->last_name }} </option>
                @endforeach
            </select>
        </div>
        
        <br>
        <div class="form-group">
            <label for="appointment_date">Fecha de la Cita</label>
            <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
        </div>
        <br>
        <div class="form-group">
            <label for="appointment_status">Estado de la Cita</label>
            <select class="form-control" id="appointment_status" name="appointment_status" required>
                <option value="">Selecciona el estado</option>
                <option value="activa">Activa</option>
                <option value="cancelada">Cancelada</option>
            </select>
        </div>
        
        <br>
        <div class="form-group">
            <label for="notes">Notas</label>
            <textarea class="form-control" id="notes" name="notes"></textarea>
        </div>
        <br>
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Crear</button>
                <a href="{{ route ('appointment.index') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>

@endsection