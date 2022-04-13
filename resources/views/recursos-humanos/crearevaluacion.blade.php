@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

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
        <h4 class="page-title">Evaluar empleado</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/recursos-humanos" style="font-size: 16px; color: #979799;">Recursos Humanos</a> / Evaluar empleado
        </p>
    </div>
</div>
<!-- FIN CABECERA -->

<div class="justify-content ml-5">
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
        <div style="display: flex;">
        <label for="Nombre">Nombre del empleado:</label>
        <input class="form-control form-control-sm" style="max-width:300px; margin-left:10px; margin-right: 70px;"  type="text" name="Nombre" id="nombre" value="{{$nombrecompleto}}" readonly>   
        <input type="hidden" name="empid" id="empid" value="{{$empleado['id']}}" style.display="none">  
        <label  for="Departamento_id">Departamento:</label>
        <input class="form-select form-select-sm" aria-label=".form-select-sm example" style="max-width:300px; margin-left:10px;" type="text" value="{{$ndep}}" readonly>
        <input type="hidden" value="{{$now->format('Y-m-d');}}" name="fecha" id="fecha" readonly>
        </div>

    <br><br>
        <div class="form-check">
            <LABEl style="margin-right: 20px;">PUNTUALIDAD:         </LABEl>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio1" value="BP" name="PUNTUALIDAD" checked>
                <label class="form-check-label" for="inlineRadio1">Buena</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio2" value="RP" name="PUNTUALIDAD">
                <label class="form-check-label" for="inlineRadio1">Regular</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio3" value="MP" name="PUNTUALIDAD">
                <label class="form-check-label" for="inlineRadio1">Mala</label>
            </div>
            <br><br>
            <LABEl style="margin-right: 20px;">ASISTENCIA:         </LABEl>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio4" value="BA" name="ASISTENCIA" checked>
                <label class="form-check-label" for="inlineRadio1">Buena</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio5" value="RA" name="ASISTENCIA">
                <label class="form-check-label" for="inlineRadio1">Regular</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio6" value="MA" name="ASISTENCIA">
                <label class="form-check-label" for="inlineRadio1">Mala</label>
            </div>
            <br><br>
            <LABEl style="margin-right: 20px;">PRODUCTIVIDAD:         </LABEl>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio7" value="BR" name="PRODUCTIVIDAD" checked>
                <label class="form-check-label" for="inlineRadio1">Buena</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio8" value="RR" name="PRODUCTIVIDAD">
                <label class="form-check-label" for="inlineRadio1">Regular</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" id="inlineRadio9" value="MR" name="PRODUCTIVIDAD">
                <label class="form-check-label" for="inlineRadio1">Mala</label>
            </div>
            <br><br>
        </div><br>  
        
        <div style="display:flex; margin-left: 680px; margin-top: 30px;">
            <a href="{{ url('/recursos-humanos/empleados') }}" type="button" class="btn btn-primary" style="border: none; background-color:#0098C7; width:80px;">  Atrás  </a>
            <input type="submit" style="margin-left: 5px;" class="btn btn-success mr-5" value="Guardar Evaluación">
        </div>
    </form>
</div>

@endsection