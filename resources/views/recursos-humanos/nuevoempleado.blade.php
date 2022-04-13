@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')

<style>
    .seccion{
        display: flex;
        margin-top: 10px;
        margin-bottom: 20px;
    }
    .combo{
        margin-right: 20px;
        margin-left: 5px;
        margin-top: 3px;
    }
</style>
<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Agregar empleado</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/recursos-humanos" style="font-size: 16px; color: #979799;">Recursos Humanos</a> / Agregar empleado
        </p>
    </div>
</div>
<!-- FIN CABECERA -->

<div class="justify-content ml-5">
    <div>
        @if (count($errors)>0)
            @foreach ($errors->all() as $error)
                {{$error}}
                <br>
            @endforeach
        @endif

        <form action="{{ url('/recursos-humanos/empleados') }}" method="post">
            <div class="seccion">
            @csrf  
            <label for="Nombre">Nombre del empleado:</label>
            <input class="form-control form-control-sm" style="max-width:300px; margin-right: 70px; margin-left: 10px;" type="text" name="Nombre" id="Nombre" value="{{old('Nombre')}}"><br>

            <label for="Apellido">Apellidos del empleado:</label>
            <input class="form-control form-control-sm" style="max-width:300px; margin-left: 10px;" type="text" name="Apellido" id="Apellido" value="{{old('Apellidos')}}"><br>
            </div>

            <div class="seccion">
            <label for="Puesto">Puesto:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="max-width:300px; margin-right: 160px; margin-left: 10px;" name="Puesto" id="Puesto">
                @foreach ($puestos as $puesto)
                    <option value="{{$puesto}}">{{$puesto}}</option>
                @endforeach
            </select><br>
            <label for="Departamento_id">Departamento:</label>
            <select class="form-select form-select-sm" aria-label=".form-select-sm example" style="max-width:300px; margin-left: 10px;" name="Departamento_id" id="Departamento_id">
            @foreach ($departamentos as $id=>$d)
                    <option value="{{$id}}">{{$d}}</option>
            @endforeach
            </select>
            <br>
            </div>

            <div class="seccion">
            <label for="TipoContrato">Contrato: </label>
            <input class="form-control form-control-sm" style="max-width:200px; margin-right: 249px; margin-left: 10px;" type="text" name="Tipo_Contrato" id="Tipo_Contrato" value="{{old('TipoContrato')}}"><br>

            <label for="Salario">Salario:</label>
            <input class="form-control form-control-sm" style="max-width:200px; margin-left: 10px;" type="number" name="Salario" id="Salario" value="{{old('Salario')}}"><br>            
            </div>

            <div class="seccion">
                <label for="Prestaciones">Prestaciones: </label><br>
                <div class="form-check" style="display: flex;">
                    <label class="form-check-label" for="Vacaciones">Vacaciones</label><input class="combo" type="checkbox" name="Prestaciones[]" id="Vacaciones" value="Vacaciones" 
                    @if(in_array('Vacaciones',old('Prestaciones',[])))
                    checked
                    @endif> <br>
                    <label for="Seguro">Seguro</label><input class="combo" type="checkbox" name="Prestaciones[]" id="Seguro" value="Seguro" 
                    @if(in_array('Seguro',old('Prestaciones',[])))
                    checked
                    @endif><br>
                    <label for="Prestamos">Prestamos</label><input class="combo" type="checkbox" name="Prestaciones[]" id="Prestamos" value="Prestamos"
                    @if(in_array('Prestamos',old('Prestaciones',[])))
                    checked
                    @endif><br>
                    <label for="Bonificacion">Bonificacion</label><input class="combo" type="checkbox" name="Prestaciones[]" id="Bonificacion" value="Bonificacion"
                    @if(in_array('Bonificacion',old('Prestaciones',[])))
                    checked
                    @endif><br>
                </div>
            </div>
            <div style="margin-left: 800px; margin-top: 30px;">
                <a href="{{ url('/recursos-humanos/empleados') }}" type="button" class="btn btn-primary" style="border: none; background-color:#0098C7; width:80px;">  Atrás  </a>
                <input type="submit" class="btn btn-success mr-5" style="width:80px;" value="Guardar">
            </div>
        </form>
    </div>
</div>
@endsection