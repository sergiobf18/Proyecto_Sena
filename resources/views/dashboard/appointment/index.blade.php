@extends('dashboard.master')
@section('titulo','appointment')
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
 
<div>
<main class="bs-primary-bg-subtle" >
  
  </div>
  
  
  <div class="container py-4">
    <br>
  <a href="{{url('/dashboard/appointment/create')}}" class="btn btn-info"> <i class="bi bi-calendar-check"></i> Nueva cita</a>
  
  <br><br>

  <table class="table table-bordered border-primary">
    <thead>
      <tr class="table-dark">
        <th>Id Cita</th>
        <th>Tipo de documento</th>
        <th>Numero de documento</th>
        <th>Nombres</th>
        <th>Primer Apellido</th>
        <th>Segundo Apellido</th>
        <th>Correo</th>
        <th>Telefono</th>
        <th>Fecha de la cita</th>
        <th>Estado de la cita</th>
        <th>Notas</th>
        <th>Editar</th>
        <th>Eliminar</th>
      </tr>
    </thead>
    <tbody>

      @foreach ($appointment as $appointment)
        <tr>
          <td scope="row">{{ $appointment->id }}</td>
          <td scope="row">{{ $appointment->patient->Document_type ?? '' }}</td>
          <td scope="row">{{ $appointment->patient->Document_number ?? '' }}</td>
          <td scope="row">{{ $appointment->patient->name ?? '' }}</td>
          <td scope="row">{{ $appointment->patient->last_name ?? '' }}</td>
          <td scope="row">{{ $appointment->patient->second_last_name ?? '' }}</td>
          <td scope="row">{{ $appointment->patient->email ?? '' }}</td>
          <td scope="row">{{ $appointment->patient->phone_number ?? '' }}</td>
          <td scope="row">{{ $appointment->appointment_date }}</td>
          <td scope="row">{{ $appointment->appointment_status }}</td>
          <td scope="row">{{ $appointment->notes ?? '' }}</td>
          <td><a href="{{url('dashboard/appointment/'.$appointment->id.'/edit')}}" class="btn btn-success"><i class="bi bi-pencil-square"></i> </a></td>
          <td>
            <center>
            <form action="{{url('dashboard/appointment/'.$appointment->id)}}" method="post" onsubmit="return confirm('¿Estás seguro de que deseas eliminar la cita?');">
              @method("DELETE")
              @csrf
              <button class="btn btn-danger"  type="submit"> <i class="bi bi-x-square"></i> </button>
            </form>
          </center>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
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
