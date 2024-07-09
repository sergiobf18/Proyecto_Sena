@extends('dashboard.master')
@section('titulo','HC de ingreso')
@include('layouts/navigation')
@section('contenido')
<br>
<br>

<center>
<div class="card">
    <center>
    <img width="100" height="100" src="https://img.icons8.com/cotton/100/green-file--v2.png" alt="green-file--v2">
    </center>
    <div class="card-body">
      <h5 class="card-title">HISTORIA CLINICA DE INGRESO</h5>
      <a href="{{url('dashboard/admissionHistory/create')}}" class="btn btn-primary">CREAR</a>
    </div>
  </div>
</center>