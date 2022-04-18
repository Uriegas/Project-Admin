@extends('layouts.app')

<style>
    .card-hover:hover {
        opacity: 0.8;
        
    }
</style>

<!-- Bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">
<!-- Icons -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader">
        <h4 class="page-title mt-5">Recursos Humanos</h4>
    </div>
    <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
        <br>
        <i class="fa-solid fa-user mr-2 fs-5 my-auto"></i><div class="mt-1">Perfil: {{Auth::user()->name}}</div>
        <div class="btn-list">
             <a href="{{ route('logout') }}" class="dropdown-item d-flex text-danger"onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
             <i class="fa-solid fa-power-off mr-3 fs-35 my-auto"></i>
                    <div class="mt-1">Cerrar sesión</div>
                </a>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none">
                @csrf
            </form>
        </div>
    </div>
</div>
<!-- FIN CABECERA -->


<!-- CONTENIDO
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12 text-center justify-content-center justify-content">
        
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="{{ url('/recursos-humanos/empleados') }}" class="btn btn-primary mr-3">
                    Lista de Empleados</a>
            </div>
            <div class="btn-list">
                <a href="{{ url('/recursos-humanos/evaluaciones') }}" class="btn btn-primary mr-3">
                    Lista de Evaluaciones</a>
            </div>
        </div>
    </div>
    
    </div>
</div>
FIN CONTENIDO -->

<!-- CONTENIDO -->
<div class="row">
    <div class="col-sm-6 text-center justify-content-center justify-content">
        <div class="text-center justify-content-center justify-content ml-5">
            <div class="row text-center justify-content-center justify-content" style="display: flex;">
                <div class="col-5">
                    <div class="card text-white bg-success mb-3 card-hover" style="widith: 400px;" >
                        <div class="card-body" style="background-color: #30B19C; width: 400px; border-radius: 14px; ">
                            <br><br>
                            <i class="bi bi-people-fill" style="font-size: 60px"></i>
                            <br><br>
                            <h2 class="card-title">Lista de Empleados</h2>
                            <a href="{{ url('/recursos-humanos/empleados') }}"  class="stretched-link"></a>
                            <br>
                        </div>
                    </div>
                </div>
                
                <div class="col-5">
                    <div class="card text-white bg-info mb-3 card-hover" style="widith: 400px; margin-left: 250px; ">
                        <div class="card-body" style=" background-color: #ED6E12; width: 400px; border-radius: 14px; ">
                            <br><br>
                            <i class="bi bi-clipboard2-data" style="font-size: 60px"></i>
                            <br><br>
                            <h2 class="card-title">Lista de Evaluaciones</h2>
                            <a href="{{ url('/recursos-humanos/evaluaciones') }}"  class="stretched-link"></a>
                            <br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- FIN CONTENIDO -->
@endsection