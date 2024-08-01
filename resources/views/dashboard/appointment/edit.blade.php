@extends('dashboard.master')
@section('titulo','Editar cita')
@include('layouts.navigation')
@section('contenido')

<div>
    <form action="{{ route('appointment.edit',['appointment' => $appointment->id]) }}" method="POST">
    @csrf
    <div class="form-group">
            <label for="idPatient">Paciente</label>
            <select class="form-control" id="idPatient" name="idPatient" required>
                <option value="">Selecciona un paciente</option>
                
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
               
            </select>
        </div>
        
        <br>
        <div class="form-group">
            <label for="idPsychologist">Psicólogo</label>
            <select class="form-control" id="idPsychologist" name="idPsychologist" required>
                <option value="">Selecciona un psicólogo</option>
                @foreach($singlePsychologist as $psychologist)
                    <option value="{{ $psychologist->id }}">{{ $psychologist->name }}</option>
                @endforeach
            </select>
        </div>
        
        <br>
        <div class="form-group">
            <label for="appointment_date">Fecha de la Cita</label>
            <input type="date" class="form-control" id="appointment_date" name="appointment_date" required>
        </div>
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
        
        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Actualizar cita</button>
                <a href="{{ url('dashboard/appointment') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>

@endsection