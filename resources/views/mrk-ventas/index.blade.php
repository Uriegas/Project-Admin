@extends('layouts.app')

<style>
    .card-hover:hover {
        opacity: 0.8;
    }
</style>

<!-- Bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader">
        <h4 class="page-title mt-5">Marketing y Ventas</h4>
    </div>
</div>
<!-- FIN CABECERA -->


<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12 text-center justify-content-center justify-content">
        <div class="text-center justify-content-center justify-content ml-5">
            <div class="row text-center justify-content-center justify-content">
                <div class="col-5">
                    <div class="card text-white bg-success mb-3 card-hover">
                        <div class="card-body">
                            <br><br><br><br><br>
                            <i class="bi bi-palette-fill" style="font-size: 60px"></i>
                            <br><br>
                            <h2 class="card-title">Estrategias de publicidad</h2>
                            <a href="/mrk-ventas/estrategias_publicidad/dashboard" class="stretched-link"></a>
                            <br><br><br><br><br>
                        </div>
                    </div>
                </div>
                
                <div class="col-5">
                    <div class="card text-white bg-info mb-3 card-hover">
                        <div class="card-body">
                            <br><br><br><br><br>
                            <i class="bi bi-people-fill" style="font-size: 60px"></i>
                            <br><br>
                            <h2 class="card-title">Clientes</h2>
                            <a href="/mrk-ventas/clientes/dashboard" class="stretched-link"></a>
                            <br><br><br><br><br>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection