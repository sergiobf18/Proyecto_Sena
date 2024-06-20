@extends('dashboard.master')
@section('titulo','appointment')
@section('contenido')
<main>
  <h1>Agenda</h1>
  <br>
  <a href="{{url('dashboard/appointment/create')}}" class="btn btn-primary btn-lg">Nueva cita</a>
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

      @foreach ($appointments as $NewAppointment)
        <tr>
          <td scope="row">{{ $NewAppointment->id }}</td>
          <td scope="row">{{ $NewAppointment->patient->Document_type ?? '' }}</td>
          <td scope="row">{{ $NewAppointment->patient->Document_number ?? '' }}</td>
          <td scope="row">{{ $NewAppointment->patient->name ?? '' }}</td>
          <td scope="row">{{ $NewAppointment->patient->last_name ?? '' }}</td>
          <td scope="row">{{ $NewAppointment->patient->second_last_name ?? '' }}</td>
          <td scope="row">{{ $NewAppointment->patient->email ?? '' }}</td>
          <td scope="row">{{ $NewAppointment->patient->phone_number ?? '' }}</td>
          <td scope="row">{{ $NewAppointment->appointment_date }}</td>
          <td scope="row">{{ $NewAppointment->appointment_status }}</td>
          <td scope="row">{{ $NewAppointment->notes ?? '' }}</td>
          <td><a href="{{url('dashboard/appointment/'.$NewAppointment->id.'/edit')}}" class="bi bi-pencil-square"></a></td>
          <td>
            <form action="{{url('dashboard/appointment/'.$NewAppointment->id)}}" method="post">
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
