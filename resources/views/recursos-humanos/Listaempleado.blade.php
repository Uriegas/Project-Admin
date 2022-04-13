@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@section('content')

<style>
    .opciones{
        margin-right: 7px;
        font-size: 18px;
    }
</style>
<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Empleados</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/recursos-humanos" style="font-size: 16px; color: #979799;">Recursos Humanos</a> / Empleados
        </p>
    </div>
</div>
<!-- FIN CABECERA -->

<div class="text-center w-90 d-flex justify-content ml-5">
<table class="table table-hover">
    <thead>
        <tr style="background-color: #1B3280;">
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Nombre</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Apellidos</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Puesto</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Departamento</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Tipo de Contrato</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Prestaciones</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Salario</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Acciones</th>
        </tr>
    </thead>
    <body>
        @foreach  ($empleados as $empleado)
        <tr>
            <th>{{$empleado->nombre}}</th>
            <th>{{$empleado->apellido}}</th>
            <th>{{$empleado->puesto}}</th>
            <th><?php foreach($departamentos as $id=>$d){ if($id==$empleado['departamento_id']){echo $d;} }?></th>
            <th>{{$empleado->tipo_contrato}}</th>
            <th>{{$empleado->prestaciones}}</th>
            <th>{{$empleado->salario}}</th>
            <th>
                <div style="display: flex;">
                <a href="{{ url('/recursos-humanos/empleados/'.$empleado->id.'/edit') }}"><i class="bi bi-pencil-fill opciones"></i></a><!--editar-->
                <a href="{{ url('/recursos-humanos/empleados/pdf/'.$empleado->id) }}"><i class="bi bi-filetype-pdf opciones" style="color: #B454D8"></i></a> <!--pdf-->
                <a href="{{ url('/recursos-humanos/evaluaciones/'.$empleado->id.'/create') }}"><i class="bi bi-clipboard2-data opciones" style="color: #3B785F"></i></a> <!--evaluar-->
                <form action="{{ url('/recursos-humanos/empleados/delete/'.$empleado->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}                       
                    <a href="" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="bi bi-trash3-fill text-danger opciones" ></i></a>
                </form><!--eliminar--></div>
            </th> 
        </tr>
        @endforeach
    </body>
</table></div>

<div class="text-center w-90 d-flex justify-content ml-5">
    <a href="{{ url('/recursos-humanos/empleados/create') }}" type="button" class="btn btn-success mr-5"><i class="bi bi-person-plus icono-agregar"></i> Agregar Empleado</a>
</div>

<!-- Modal para eliminar empleado -->
<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <div class="text-center justify-content">
                <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Eliminar empleado</h3>
            </div>
        </div>
        <div class="modal-body">
            <div class="justify-content mb-5 text-center">
                <i class="bi bi-exclamation-circle-fill text-danger fs-1 text-center"></i>
            </div>
            <p class="text-center fs-6">
                ¿Está seguro de querer eliminar al empleado seleccionado?
            </p>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, cancelar</button>
            <form action="{{ url('/recursos-humanos/empleados/delete/'.$empleado->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}                       
                    <button type="submit" class="btn btn-danger">Sí, eliminar</button>
                </form>
        </div>
        </div>
    </div>
    </div>



<!--<a href="{{ url('/recursos-humanos/empleados/create') }}" type="button" class="btn btn-success mr-5" data-bs-toggle="modal" data-bs-target="#agregar"><i class="bi bi-person-plus icono-agregar"></i> Agregar Empleado</a>-->

@endsection