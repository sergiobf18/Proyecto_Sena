@extends('dashboard.master')
@section('titulo','appointment')
@include('layouts/navigation')
@section('contenido')
 

<main class="bs-primary-bg-subtle">
  
  <br>
  <a href="{{url('dashboard/appointment/create')}}" class="btn btn-info">Nueva cita</a>
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
          <td><a href="{{url('dashboard/appointment/'.$appointment->id.'/edit')}}" class="bi bi-pencil-square"></a></td>
          <td>
            <form action="{{url('dashboard/appointment/'.$appointment->id)}}" method="post">
              @method("DELETE")
              @csrf
              <button class="bi bi-eraser-fill" type="submit"></button>
            </form>
          </td>
        </tr>
      @endforeach
    </tbody>
  </table>
</main>

@endsection
