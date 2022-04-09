@extends('layouts.app')
@section('content')
<?php use App\Models\Departamentos;
?>
<?php $departamentos=Departamentos::get();?>
<center><br><br><br>
<table>
    <thead>
        <tr>
            <th>ID EMPLEADO</th>
            <th>Nombre</th>
            <th>Departamento</th>
            <th>Calificacion</th>
            <th>Fecha</th>
            <th>Acciones</th>
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
                <form action="{{ url('/recursos-humanos/evaluaciones/delete/'.$eva->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" value="Eliminar" onclick="return confirm('¿Está seguro en eliminar el registro?')">
                </form>
        </tr>
        @endforeach
    </body>
</table>
<?php
?>
</center>
@endsection