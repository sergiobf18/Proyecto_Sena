@extends('dashboard.master')
@section('titulo','Ingresar Paciente')
@include('layouts.navigation')
@section('contenido')

<div>
    <form action="{{ route('dashboard/patient/store') }}" method="POST">
    @csrf
    <div class="form-group row">
    <label for="Document_type" class="col-sm-2 col-form-label">Tipo de Documento</label>
    <div class="col-sm-8">
        <select class="form-control" id="Document_type" name="Document_type" required>
            <option value="" disabled selected>Seleccione el tipo de documento</option>
            <option value="CC">Cédula de Ciudadanía</option>
            <option value="TI">Tarjeta de Identidad</option>
            <option value="C.E">Cédula de Extranjería</option>
            <option value="PASA">Pasaporte</option>
        </select>
    </div>
</div>
        
        <br>
        <div class="form-group row">
            <label for="Document_number" class="col-sm-2 col-form-label">Ingrese el numero de documento</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="Document_number" id="Document_number" placeholder="Ingrese CC/TI/C.E/PASA" required>
            </div>
        </div>
        
        <br>
        <div class="form-group row">
            <label for="name" class="col-sm-2 col-form-label">Ingrese el nombre</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="name" id="name" placeholder="Ingrese el nombre" required>
            </div>
        </div>
        
        <br>
        <div class="form-group row">
            <label for="last_name" class="col-sm-2 col-form-label">Ingrese el primer apellido</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Ingrese su primer apellido" required>
            </div>
        </div>
        <br>
        
        <div class="form-group row">
            <label for="second_last_name" class="col-sm-2 col-form-label">Ingrese el segundo apellido</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="second_last_name" id="second_last_name" placeholder="Ingrese su segundo apellido">
            </div>
        </div>
        <br>
        
        <div class="form-group row">
            <label for="date_of_birth" class="col-sm-2 col-form-label">Ingrese La fecha de nacimiento</label>
            <div class="col-sm-8">
                <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Ingrese la fecha de nacimiento" required>
            </div>
        </div>
        <br>

        <div class="form-group row">
        <label for="gender" class="col-sm-2 col-form-label">Género</label>
        <div class="col-sm-8">
            <div class="form-check">
            <input type="radio" class="form-check-input" name="gender" id="genderMale" value="male" checked>
            <label class="form-check-label" for="genderMale">Hombre</label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" name="gender" id="genderFemale" value="female">
            <label class="form-check-label" for="genderFemale">Mujer</label>
            </div>
            <div class="form-check">
            <input type="radio" class="form-check-input" name="gender" id="genderOther" value="other">
            <label class="form-check-label" for="genderOther">Otro</label>
            </div>
        </div>
</div>

<br>
        <div class="form-group row">
        <label for="personal_status" class="col-sm-2 col-form-label">Estado civil</label>
        <div class="col-sm-8">
            <select class="form-control" name="personal_status" id="personal_status" required>
            <option value="">Seleccione el estado civil</option>
            <option value="N/A">No indica</option>
            <option value="Soltero">Soltero</option>
            <option value="Union libre">Union libre</option>
            <option value="Casado">Casado</option>
            <option value="Divorciado">Divorciado</option>
            </select>
        </div>
        </div>
        
        <br>
        <div class="form-group row">
        <label for="education" class="col-sm-2 col-form-label">Nivel de educación</label>
        <div class="col-sm-8">
            <select class="form-control" name="education" id="education" required>
            <option value="">Seleccione el nivel de educación</option>
            <option value="N/A">No indica</option>
            <option value="secundaria">Secundaria</option>
            <option value="Tecnico">Tecnico</option>
            <option value="Tecnologo">Tecnologo</option>
            <option value="Universitario">Posgrado</option>
            </select>
        </div>
        </div>
        
        <br>
        <div class="form-group row">
            <label for="occupation" class="col-sm-2 col-form-label">Ingrese La ocupación</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Ingrese La ocupación" required>
            </div>
        </div>
        
        
        <br>
        <div class="form-group row">
            <label for="email" class="col-sm-2 col-form-label">Correo</label>
            <div class="col-sm-8">
                <input type="email" class="form-control" name="email" id="email" placeholder="Ingrese su correo" required>
            </div>
        </div>
        <br>
        <div class="form-group row">
            <label for="phone_number" class="col-sm-2 col-form-label">Ingrese el numero de telefono</label>
            <div class="col-sm-8">
                <input type="text" class="form-control" name="phone_number" id="phone_number" placeholder="Ingrese el numero de telefono" required>
            </div>
        </div>
        
        <br>

        <div class="form-group row">
            <div class="col-sm-10 offset-sm-2">
                <button type="submit" class="btn btn-success">Crear</button>
                <a href="{{ route ('dashboard/patient') }}" class="btn btn-secondary">Regresar</a>
            </div>
        </div>
    </form>
</div>

@endsection
