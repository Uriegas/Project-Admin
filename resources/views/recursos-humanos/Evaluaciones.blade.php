@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
@section('content')

<style>
    .seccion{
        display: flex;
        margin-top: 10px;
        margin-bottom: 20px;
    }
    .combo2{
        margin-left: 20px;
        margin-right: 5px;
        margin-top: 3px;
    }
</style>
<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Lista de evaluaciones</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/recursos-humanos" style="font-size: 16px; color: #979799;">Recursos Humanos</a> / Evaluaciones
        </p>
    </div>
</div>
<!-- FIN CABECERA -->

<?php use App\Models\Departamentos;
?>
<?php $departamentos=Departamentos::get();?>
<div class="text-center w-90 d-flex justify-content ml-5">
    <table class="table table-hover">
    <thead>
        <tr style="background-color: #1B3280;">
            <th style="color:rgb(255, 255, 255); font-size: 16px;">ID</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Nombre</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Departamento</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Calificacion</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Fecha</th>
            <th style="color:rgb(255, 255, 255); font-size: 16px;">Acciones</th>
        </tr>
    </thead>
    <body>
        @foreach  ($evaluaciones as $eva)
        <tr>
            <th><?php foreach($empleados as $id){ if($id['id']==$eva['empleado_id']){echo $id['id'];} }?></th>
            <th><?php foreach($empleados as $id){ if($id['id']==$eva['empleado_id']){ echo $id['nombre']." ".$id['apellido'];} }?></th>
            <th><?php foreach($departamentos as $dep){ foreach($empleados as $id){ if($id['id']==$eva['empleado_id']){ if($id['departamento_id']==$dep['id']){ echo $dep['nombre']; } }} }?></th>
            <th><?php echo $eva['calificacion']; ?></th>
            <th><?php echo $eva['fecha']; ?></th>
            <th> 
                    <a href="" data-bs-toggle="modal" data-bs-target="#eliminar{{$eva->id}}"><i class="bi bi-trash3-fill text-danger opciones" ></i></a>
                    <!--<input type="submit" value="Eliminar" onclick="return confirm('??Est?? seguro en eliminar el registro?')">-->
            </th>
            @include('recursos-humanos.modaleva')
        </tr>
        @endforeach
    </body>
</table>

<?php
?>
@endsection