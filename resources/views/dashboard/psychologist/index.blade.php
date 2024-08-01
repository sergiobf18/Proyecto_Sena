@extends('dashboard.master')
@section('titulo','Psicologos')
@include('layouts/navigation')
@section('contenido')
<main>
    
   <br>
        <h1 class="text-center"><b>LISTADO DE PSICOLOGOS</b></h1>
    <br>
    <div class="container">
        <div class="row">
          <div class="col-md-6 m-6">
           
    <td><a href="{{url('dashboard/psychologist/create')}}" class="btn btn-info">Nuevo psicologo</a></td>
    <br><br>
    <table class="table table-bordered border-primary">
        <thead class="table-dark">
            <tr>
                <th>Id psicologo</th>
                <th>Tipo de documento</th>
                <th>Numero de documento</th>
                <th>Nombres</th>
                <th>Primer Apellido</th>
                <th>Segundo Apellido</th>
                <th>Licencia</th>
                <th>Correo</th>
                <th>Telefono</th>                
                <th>Editar</th>
                <th>Eliminar</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($psychologist as $singlePsychologist )
           
            <tr>
                <td scope="row">{{$singlePsychologist->id }}</td>
                <td scope="row">{{$singlePsychologist->Document_type}}</td>
                <td scope="row">{{$singlePsychologist->Document_number}}</td>
                <td scope="row">{{$singlePsychologist->name}}</td>
                <td scope="row">{{$singlePsychologist->last_name}}</td>
                <td scope="row">{{$singlePsychologist->second_last_name}}</td>
                <td scope="row">{{$singlePsychologist->license}}</td>
                <td scope="row">{{$singlePsychologist->email}}</td>
                <td scope="row">{{$singlePsychologist->phone_number}}</td>
                <td><a href="{{url('dashboard/psychologist/'.$singlePsychologist->id.'/edit')}}" class="bi bi-pencil-square"></a></td>
                <td>
                    <form action="{{url('dashboard/psychologist/'.$singlePsychologist->id)}}" method="post">
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
</main>
@endsection

 

