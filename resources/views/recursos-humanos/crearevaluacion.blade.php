@extends('layouts.app')
@section('content')
<H2>EVALUACION:</H2>

@if (count($errors)>0)
    @foreach ($errors->all() as $error)
        {{$error}}
        <br>
    @endforeach
@endif

<form action="{{ url('/recursos-humanos/evaluaciones') }}" method="post">
    @csrf
    <?php $now = new DateTime();?>
    <?php $puestos=['Asesor legal y organizacional','Administrador','Analista','Diseñador UI/UX','Programador','Documentador','Analista financiero','Jefe de presupuestos','Publicista','Ventas'];
     $nombrecompleto=$empleado['nombre']." ".$empleado['apellido'];?>
     @foreach ($departamentos as $id=>$nombredep)
        @if($id==$empleado['departamento_id'])
            <?php $ndep=$nombredep;?>
        @endif
     @endforeach
    <label for="Nombre">Nombre Empleado</label>
    <input type="text" name="Nombre" id="nombre" value="{{$nombrecompleto}}" readonly>   
    <input type="hidden" name="empid" id="empid" value="{{$empleado['id']}}" style.display="none">  
    <label for="Departamento_id">Departamento</label>
    <input type="text" value="{{$ndep}}" readonly>
    <input type="hidden" value="{{$now->format('Y-m-d');}}" name="fecha" id="fecha" readonly>

<br><br>
    <LABEl>PUNTUALIDAD:         </LABEl>
    <input type="radio" value="BP" name="PUNTUALIDAD" checked>Buena
    <input type="radio" value="RP" name="PUNTUALIDAD">Regular
    <input type="radio" value="MP" name="PUNTUALIDAD">Mala
    <br><br>
    <LABEl>ASISTENCIA:         </LABEl>
    <input type="radio" value="BA" name="ASISTENCIA" checked>Buena
    <input type="radio" value="RA" name="ASISTENCIA">Regular
    <input type="radio" value="MA" name="ASISTENCIA">Mala
    <br><br>
    <LABEl>PRODUCTIVIDAD:         </LABEl>
    <input type="radio" value="BR" name="PRODUCTIVIDAD" checked>Buena
    <input type="radio" value="RR" name="PRODUCTIVIDAD">Regular
    <input type="radio" value="MR" name="PRODUCTIVIDAD">Mala
    <br><br>

    <br><br><br>
    



    <input type="submit" value="Guardar Evaluación">
</form>
@endsection