@extends('dashboard.master')
@section('titulo','Ingresar Psicologo')
@include('layouts/navigation')
@section('contenido')

<div>
<form action="{{ route('psychologist.update', ['psychologist' => $psychologist->id]) }}" method="post">
    @csrf
    @method('patch')
    <div class="form-group row">
        <label for="Document_type" class="col-sm-2 col-form-label">Tipo de Documento</label>
        <div class="col-sm-8">
            <select class="form-control" id="Document_type" name="Document_type" required>
                <option value="" disabled>Seleccione el tipo de documento</option>
                <option value="CC" {{ $psychologist->Document_type == 'CC' ? 'selected' : '' }}>Cédula de Ciudadanía</option>
                <option value="TI" {{ $psychologist->Document_type == 'TI' ? 'selected' : '' }}>Tarjeta de Identidad</option>
                <option value="C.E" {{ $psychologist->Document_type == 'C.E' ? 'selected' : '' }}>Cédula de Extranjería</option>
                <option value="PASA" {{ $psychologist->Document_type == 'PASA' ? 'selected' : '' }}>Pasaporte</option>
            </select>
        </div>
    </div>
        
        <br>
        <div class="form-group row">
            <label for="Document_number" class="col-sm-2 col-form-label">Ingrese el numero de documento</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="Document_number" id="Document_number" placeholder="Ingrese CC/TI/C.E/PASA" required value="{{ $psychologist->Document_number }}">
            </div>
        </div>
        
        <br>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Ingrese el nombre</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese el nombre" required value="{{ $psychologist->name }}">
            </div>
        </div>
        
        <br>
        <div class="form-group row">
            <label for="last_name" class="col-sm-2 col-form-label">Ingrese el primer apellido</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Ingrese su primer apellido" required value="{{ $psychologist->last_name }}">
            </div>
        </div>
        <br>
        
        <div class="form-group row">
            <label for="second_last_name" class="col-sm-2 col-form-label">Ingrese el segundo apellido</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="second_last_name" id="second_last_name" placeholder="Ingrese su segundo apellido" value="{{ $psychologist->second_last_name }}">
            </div>
        </div>
        <br>
        <br>
        <div class="form-group row">
            <label for="license" class="col-sm-2 col-form-label">Ingrese su targeta profesional</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="license" id="license" placeholder="Ingrese la targeta profesional" required value="{{ $psychologist->Document_number }}">
            </div>
        </div>
             
        
        <br>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su correo"  value="{{ $psychologist->email }}">
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="phone_number" class="col-sm-2 col-form-label">Ingrese el numero de telefono</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Ingrese el numero de telefono" value="{{ $psychologist->phone_number }}">
            </div>
        </div>
        
        <br>

    
    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <button type="submit" class="btn btn-success">Actualizar</button>
            <a href="{{url('dashboard/psychologist.index')}}" class="btn btn-secondary">Regresar</a>
        </div>
    </div>
</form>

@endsection

 

