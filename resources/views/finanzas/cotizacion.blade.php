@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Cotización de proyectos</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/finanzas" style="font-size: 16px; color: #9568A9;">Finanzas</a>/  Cotización de proyectos
        </p>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="container ml-5"> <!-- Falta alinear correctamente a la derecha-->

            <div class="text-center w-90 d-flex justify-content ml-5">
                <table class="table table-striped table-hover table-bordered text-center ml-5 mt-5">
                    <thead style="background-color: #1B3280;">
                        <tr>
                            <th scope="col" style="color: #fff;">NOMBRE DEL PROYECTO</th> 
                            <th scope="col" style="color: #fff;">Cliente</th>
                            <th scope="col" style="color: #fff;">VISUALIZAR</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($proyectos as $proyecto)
                        <tr>
                            <th scope="row">{{$proyecto->nombre}}</th>
                            <td>{{$proyecto->cliente}}</td>
                            <td>
                                <a href="{{route('cotizacion.show', $proyecto->id)}}"><i class="bi bi-eye-fill mr-2 text-primary" style="font-size: 18px;"></i></a>
                            </td>
                        </tr>
                        @endforeach

                        <tr>
                            <th scope="row">Sistema web para el gobierno del estado</th>
                            <td>Daniela Huerta</td>
                            <td>
                                <a href="/visualizar"><i class="bi bi-eye-fill mr-2 text-primary" style="font-size: 18px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Sistema de inventario para la empresa Pemex</th>
                            <td>Arturo Alcocer</td>
                            <td>
                                <a href="/visualizar"><i class="bi bi-eye-fill mr-2 text-primary" style="font-size: 18px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Aplicación móvil de matemáticas para niños</th>
                            <td>Daniela Huerta</td>
                            <td>
                                <a href="/visualizar"><i class="bi bi-eye-fill mr-2 text-primary" style="font-size: 18px;"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            </div>
        </div>    
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

