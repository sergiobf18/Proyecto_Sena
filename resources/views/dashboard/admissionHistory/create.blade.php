@extends('dashboard.master')
@section('titulo','HC de ingreso')
@include('layouts/navigation')
@section('contenido')
<br>
<div class="container">
    <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAADAAAAAwCAYAAABXAvmHAAAACXBIWXMAAAsTAAALEwEAmpwYAAABBklEQVR4nO3Zvw4BQRAG8GtU+yT+HYmHQBQ+b6LkTqGRiEahlHgdtUNCdMh6AA8wcola7nKTsct8yfT7y87sFBsEGo3m9zN4UA+W7rBERStcnDbigL6lG8fh06pMEirHyVwUAKbDp1WN9/IIMAPEEWAE1OKDPAKMgHp0kEeAGSCOACMgjI7yCDACGtFRHgFGQGt2yYDYTZ0FtLfPTIjm8rxxEpCnAgW8ozdgtYWK5WdbyIzWVBquCpUZr78IGHsOgO8thH+eAfOhdeDDDDgBgO8tBN8BRvfASvdApugMDB19Ro3uAdI98N9DDAWQzA1wfjHlqCsbAJa6wojrwFKHDaDRaAJn8wKaFL5xkwdSHQAAAABJRU5ErkJggg==" class="rounded float-start" alt="Logo">
    <h1 class="display-6">HC DE INGRESO</h1>
    <br>
    <form action="{{ route('admissionHistory.store') }}" method="POST">
        @csrf
        <div class="form-group row">
                <label for="dadhistory_date" class="col-form-label"><b>FECHA:</b></label>
                 <div class="col-sm-8">
                <input type="date" class="form-control" name="adhistory_date" id="adhistory_date" placeholder="Ingrese la fecha de la cita" required>
                </div>
                </div>
        
        <br>

        <div class="form-group">
            <label for="psychologist"><b>NOMBRE DE QUIEN DILIGENCIA</b></label>
            <select name="psychologist" id="psychologist" class="form-control">
                @foreach($psychologist as $psychologist)
                    <option value="{{ $psychologist->id }}">{{ $psychologist->name }}</option>
                @endforeach
            </select>
        </div> 
        <br>
        <br>
        
        <h1><b>1. DATOS DE IDENTIFICACIÓN DEL CONSULTANTE</b></h1>
        <br>
        <br>
        <div class="form-group">
            <label for="idPatient"><em><b>Paciente</b></em></label>
            <select name="idPatient" id="idPatient" class="form-control">
                @foreach($patient as $patient)
                    <option value="{{ $patient->id }}">{{ $patient->name }}</option>
                @endforeach
            </select>
        </div>
        <br>
        <div class="form-group row">
            <label for="Document_type" class="col-sm-2 col-form-label"><em><b>Tipo de documento</b></em></label>
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
                    <label for="Document_number" class="col-sm-2 col-form-label"><em><b>Numero de documento</b></em></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="Document_number" id="Document_number" placeholder="Ingrese CC/TI/C.E/PASA" required>
                    </div>
                </div>
                
                <br>
                
                <div class="form-group row">
                    <label for="date_of_birth" class="col-sm-2 col-form-label"><em><b>Fecha de nacimiento</b></em></label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="Ingrese la fecha de nacimiento" required>
                    </div>
                </div>
                <br>
        
                <div class="form-group row">
                <label for="gender" class="col-sm-2 col-form-label"><em><b>Genero</b></em></label>
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
                <label for="personal_status" class="col-sm-2 col-form-label"><em><b>Estado civil</b></em>L</label>
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
                <label for="education" class="col-sm-2 col-form-label"><em><b>Nivel de educación</b></em></label>
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
                    <label for="occupation" class="col-sm-2 col-form-label"><em><b>Ocupación</b></em></label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" name="occupation" id="occupation" placeholder="Ingrese La ocupación" required>
                    </div>
                </div>

                <br>
                <div class="form-group row">
                    <label for="evolution" class="col-sm-2 col-form-label"><em><b>Evolución</b></em></label>
                    <div class="col-sm-8">
                        <div class="form-check">
                        <input type="radio" class="form-check-input" name="evolution" id="primeravez" value="primera" checked>
                        <label class="form-check-label" for="primeravez">PRIMERA VEZ</label>
                        </div>
                        <div class="form-check">
                        <input type="radio" class="form-check-input" name="evolution" id="evolucion" value="evolu">
                        <label class="form-check-label" for="evolucion">EVOLUCION</label>
                        </div>
                    </div>
                    </div>
                
                    
                    <br>
                    <br>
                    <div class="mb-3">
                        <label for="motive_for_consultation"><b>MOTIVO DE CONSULTA</b></label>
                        <textarea class="form-control" rows="5" id="motive_for_consultation" name="Motivo de consulta"></textarea>
                    </div>

                    <br>
                    <div class="mb-3">
                        <label for="subjective"><b>SUBJETIVO</b></label>
                        <textarea class="form-control" rows="5" id="subjective" name="subjetivo"></textarea>
                    </div>

                    <br>
                    <div class="mb-3">
                        <label for="mental_test"><b>EXAMEN MENTAL</b></label>
                        <textarea class="form-control" rows="5" id="mental_test" name="examen mental"></textarea>
                    </div>

                    <br>
                    <div class="mb-3">
                        <label for="purpose_of_the_intervention"><b>OBJETIVO DE AL INTERVENCIÓN</b></label>
                        <textarea class="form-control" rows="5" id="purpose_of_the_intervention" name="objetivo de la intervención"></textarea>
                    </div>

                    <br>
                    <div class="mb-3">
                        <label for="hypothesis"><b>ANALISIS-HIPOTESIS</b></label>
                        <textarea class="form-control" rows="5" id="hypothesis" name="analisis"></textarea>
                    </div>
                <div class="form-group">
                    <label for="idDiagnosis"><b>IMPRESIÓN DIAGNOSTICA GENERAL (DSMV)</b></label>
                    <select name="idDiagnosis" id="idDiagnosis" class="form-control">
                         @foreach($diagnosis as $diagnosis)
                             <option value="{{ $diagnosis->id }}">{{ $diagnosis->descrip_diagnosis}}</option>
                         @endforeach
                        </select>
                    </div>
        

        
        
                    
        
        <br>
        <button type="submit" class="btn btn-primary">Guardar</button>
    </form>
</div>
@endsection