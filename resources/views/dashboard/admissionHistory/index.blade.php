@extends('dashboard.master')
@section('titulo','HC de ingreso')
@include('layouts/navigation')
@section('contenido')
<br>
<br>

<center>
<div class="card-img-top">
    <center>
    <img width="100" height="100" src="https://img.icons8.com/cotton/100/green-file--v2.png" alt="green-file--v2">
    </center>
    <div class="card-body">
      <h5 class="card-title">HISTORIA CLINICA DE INGRESO</h5>
      <a href="{{url('dashboard/admissionHistory/create')}}" class="btn btn-primary">CREAR</a>
    </div>
  </div>
<br>
  <center>
    <div class="card-img-top">
        <center>
          <img width="100" height="100" src="https://img.icons8.com/cotton/64/red-file--v2.png" alt="red-file--v2"/>
        </center>
        <div class="card-body">
          <h5 class="card-title"></h5>
          <a href="{{url('dashboard/admissionHistory/create')}}" class="btn btn-primary">CREAR</a>
        </div>
      </div>
    
      <div class="container overflow-hidden text-center">
        <div class="row gx-5">
          <div class="col">
            <center>
            <img width="100" height="100" src="https://img.icons8.com/cotton/64/red-file--v2.png" alt="red-file--v2"/>
           </center>
           <div class="p-3">HISTORIA CLINICA DE INGRESO <br><a href="{{url('dashboard/admissionHistory/create')}}" class="btn btn-primary">CREAR</a></div>
          </div>
          <div class="col">
            <div class="p-3">Custom column padding</div>
          </div>
        </div>
      </div>