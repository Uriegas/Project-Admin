@extends('layouts.app')
@section('content')
<br><br><br>
<table>
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Apellidos</th>
            <th>Puesto</th>
            <th>Departamento</th>
            <th>Tipo de Contrato</th>
            <th>Prestaciones</th>
            <th>Salario</th>
            <th>Acciones</th>
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
                <a href="{{ url('/recursos-humanos/empleados/'.$empleado->id.'/edit') }}">EDITAR EMPLEADO</a> |
                <a href="{{ url('/recursos-humanos/empleados/'.$empleado->id.'/pdf') }}">PDF</a> |
                <a href="{{ url('/recursos-humanos/evaluaciones/'.$empleado->id.'/create') }}">EVALUAR</a> |
                <form action="{{ url('/recursos-humanos/empleados/delete/'.$empleado->id) }}" method="post">
                    @csrf
                    {{method_field('DELETE')}}
                    <input type="submit" value="Eliminar" onclick="return confirm('¿Está seguro en eliminar el registro?')">
                </form>
            </th> 
        </tr>
        @endforeach
    </body>
</table>

<a href="{{ url('/recursos-humanos/empleados/create') }}" type="button">Agregar Empleado</a>
</center>
@endsection