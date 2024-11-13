@extends('dashboard.master')
@section('titulo','Psicologos')
@include('layouts/navigation')
@section('contenido')

@if (session('success'))
    <div class="alert alert-primary d-flex align-items-center" role="alert">
        <!-- Ícono de verificación con tamaño personalizado -->
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="me-2" viewBox="0 0 512 512">
            <path d="M256 48a208 208 0 1 1 0 416 208 208 0 1 1 0-416zm0 464A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209c9.4-9.4 9.4-24.6 0-33.9s-24.6-9.4-33.9 0l-111 111-47-47c-9.4-9.4-24.6-9.4-33.9 0s-9.4 24.6 0 33.9l64 64c9.4 9.4 24.6 9.4 33.9 0L369 209z"/>
        </svg>
        <!-- Mensaje de éxito -->
        {{ session('success') }}
    </div>
@endif


<main>
    
   <br>
        <h1 class="text-center"><b>LISTADO DE PSICOLOGOS</b></h1>
    <br>
    <div class="container py-4">
        
           
    <td><a href="{{url('dashboard/psychologist/create')}}" class="btn btn-info">Nuevo psicologo <i class="bi bi-person-check"></i></a></td>
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
                <td><a href="{{url('dashboard/psychologist/'.$singlePsychologist->id.'/edit')}}" class="btn btn-success"><i class="bi bi-pencil-square"></i></a></td>
                <td>
                    <center>
                    <form action="{{url('dashboard/psychologist/'.$singlePsychologist->id)}}" method="post">
                        @method("DELETE")
                        @csrf
                        <button class="btn btn-danger" type="submit"><i class="bi bi-x-square"></i></button>
                    </form>
                </center>
                </td>
            </tr>
            @endforeach
        </tbody>  

</div>

</main>

<!-- Script para ocultar la alerta después de unos segundos -->
<script>
    // Ocultar la alerta después de 5 segundos
    setTimeout(() => {
        const alert = document.querySelector('.alert');
        if (alert) {
            alert.classList.remove('show'); // Oculta la alerta con un efecto
            alert.remove(); // Elimina el elemento del DOM
        }
    }, 3000); // 3000 ms = 3 segundos
</script>
@endsection

 

