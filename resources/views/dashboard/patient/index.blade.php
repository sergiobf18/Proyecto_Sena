@extends('dashboard.master')
@section('titulo','Pacientes')
@include('layouts/navigation')
@section('contenido')
<main>
    <br>
    
    <h1 class="text-center"><b>LISTADO DE PACIENTES</b></h1>
    <br>
    <div class="container">
        <div class="row">
          <div class="col-md-6 m-6">
    <td><a href="{{url('dashboard.patient.create')}}" class="btn btn-info">Nuevo Paciente</a></td>
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
            @foreach ($patient as $patient )
           
            <tr>
                <td scope="row">{{$patient->id }}</td>
                <td scope="row">{{$patient->Document_type}}</td>
                <td scope="row">{{$patient->Document_number}}</td>
                <td scope="row">{{$patient->name}}</td>
                <td scope="row">{{$patient->last_name}}</td>
                <td scope="row">{{$patient->second_last_name}}</td>
                <td scope="row">{{$patient->email}}</td>
                <td scope="row">{{$patient->phone_number}}</td>
                <td><a href="{{url('dashboard/patient/'.$patient->id.'/edit')}}" class="bi bi-pencil-square"></a></td>
                <td>
                    <form action="{{url('dashboard/patient/'.$patient->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="bi bi-eraser-fill" type="submit"></button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>  
</div>
</div>
</div>
</div>
</main>
@endsection

 

