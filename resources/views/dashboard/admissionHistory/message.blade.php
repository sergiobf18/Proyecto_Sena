@extends('dashboard.master')
@section('titulo','HC de ingreso')
@include('layouts/navigation')
@section('contenido')
<h1>Mensaje</h1>
<div class="container py-4">
    <h2>{{$msg}}</h2>
    <a href="{{url('dashboard/admissionHistory')}}" class="btn btn-outline-dark">Regresar</a>
</div>
@endsection