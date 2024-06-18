@extends('dashboard.master')
@section('titulo','Pacientes')
@include('layouts/navigation')
@section('contenido')
<main>
    <div>
    <h1>Listado de Pacientes</h1>
    <br>
    <td><a href="{{url('dashboard/patient/create')}}" class="btn btn-primary btn-lg">Nuevo paciente</a></td>
    <br><br>
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th>Id paciente</th>
                <th>Tipo de documento</th>
                <th>Numero de documento</th>
                <th>Nombres</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Correo</th>
                <th>Telefono</th>
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($patient as $singlePatient )
           
            <tr>
                <td scope="row">{{$singlePatient->id }}</td>
                <td scope="row">{{$singlePatient->Document_type}}</td>
                <td scope="row">{{$singlePatient->Document_number}}</td>
                <td scope="row">{{$singlePatient->name}}</td>
                <td scope="row">{{$singlePatient->last_name}}</td>
                <td scope="row">{{$singlePatient->second_last_name}}</td>
                <td scope="row">{{$singlePatient->email}}</td>
                <td scope="row">{{$singlePatient->phone_number}}</td>
                <td><a href="{{url('dashboard/patient/'.$singlePatient->id.'/edit')}}" class="bi bi-pencil-square"></a></td>
                <td>
                    <form action="{{url('dashboard/patient/'.$singlePatient->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit"></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>  
</div>
</main>
@endsection

 

