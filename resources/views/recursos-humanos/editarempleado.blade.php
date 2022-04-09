@extends('layouts.app')
@section('content')

<h2>EDITAR EMPLEADO: </h2>
<?php $puestos=['Asesor legal y organizacional','Administrador','Analista','Diseñador UI/UX','Programador','Documentador','Analista financiero','Jefe de presupuestos','Publicista','Ventas']; ?>
@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        {{$error}}
        <br>
    @endforeach
@endif
<form action="{{ url('/recursos-humanos/empleados/'.$empleado->id) }}" method="post">
    @csrf
    {{method_field('PATCH')}}
    <label for="Nombre">Nombre Empleado</label>
    <input type="text" name="Nombre" id="nombre" value="{{$empleado['nombre']}}" readonly><br>

    <label for="apellido">Apellidos Empleado</label>
    <input type="text" name="Apellido" id="Apellido"  value="{{$empleado['apellido']}}" readonly><br>

    <label for="Puesto">Puesto</label>
    <select name="Puesto" id="Puesto">
        @foreach ($puestos as $puesto)
            @if ($puesto!=$empleado['puesto'])
                <option value="{{$puesto}}">{{$puesto}}</option>
            @else
            <option value="{{$puesto}}" selected>{{$puesto}}</option>
            @endif
        @endforeach
    </select><br>

    <label for="Departamento">Departamento</label>
    <select name="Departamento_id" id="Departamento_id" value="{{$empleado['departamento_id']}}">
        @foreach ($departamentos as $id=>$d)
        @if ($id!=$empleado['departamento_id'])
                <option value="{{$id}}">{{$d}}</option>
            @else
            <option value="{{$id}}" selected>{{$d}}</option>
            @endif 
       @endforeach
    </select><br>

    <label for="TipoContrato">Contrato: </label>
    <input type="text" name="Tipo_Contrato" id="Tipo_Contrato" value="{{$empleado['tipo_contrato']}}"><br>

    <?php $prestacion=$empleado['prestaciones'];
    $prestacion=explode(",",$prestacion);?>

    <label for="Prestaciones">Prestaciones: </label><br>
    <label for="Vacaciones">Vacaciones</label><input type="checkbox" name="Prestaciones[]" id="Vacaciones" value="Vacaciones"
    @if(in_array('Vacaciones',$prestacion))
    checked
    @endif> <br>
    <label for="Seguro">Seguro</label><input type="checkbox" name="Prestaciones[]" id="Seguro" value="Seguro" 
    @if(in_array('Seguro',$prestacion))
    checked
    @endif><br>
    <label for="Prestamos">Prestamos</label><input type="checkbox" name="Prestaciones[]" id="Prestamos" value="Prestamos"
    @if(in_array('Prestamos',$prestacion))
    checked
    @endif><br>
    <label for="Bonificacion">Bonificacion</label><input type="checkbox" name="Prestaciones[]" id="Bonificacion" value="Bonificacion"
    @if(in_array('Bonificacion',$prestacion))
    checked
    @endif><br>

    <label for="Salario">Salario</label>
    <input type="number" name="Salario" id="Salario"  value="{{$empleado['salario']}}"><br>

    <input type="submit" value="Actualizar Empleado" onclick="return confirm('¿Los datos son correctos?')">
</form>

@endsection