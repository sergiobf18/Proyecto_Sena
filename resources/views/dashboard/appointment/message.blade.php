@extends('dashboard.master')
@section('titulo','Agendamiento')
@include('layouts.navigation')
@section('contenido')

@if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <!-- Ícono de verificación -->
        <svg class="bi flex-shrink-0 me-2" width="24" height="24" role="img" aria-label="Success:">
            <use xlink:href="#check-circle-fill"/>
        </svg>
        {{ session('success') }}
    </div>
@endif

@endsection