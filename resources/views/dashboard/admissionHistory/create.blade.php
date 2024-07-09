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