@extends('administracion.layout')
@extends('layouts.app')

@section('content')
<div class="pull-left">
        <h2>Administración</h2>
    <div class="row">
        <div class="col-lg-12 margin-tb">
            
            <div class="pull-right">
                    
            </div>
        </div>
    </div>
        
        @if($message = Session::get('success'))

        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
        @endif

        <table class="table table bordered">
            <tr>
                <th>ID</th>
                <th>Nombre del Proyecto</th>
                <th>Nombre del cliente</th>
                <th>Presupuesto</th>
                <th>Integrantes</th>
                <th>Descripción</th>
                <th width="280px">Acción</th>
            </tr>
            @foreach($proyectos as $proyecto)
            <tr>
                <td>{{$proyecto->id}}</td>
                <td>{{$proyecto->nombre_proyecto}}</td>
                <td>{{$proyecto->nombre_cliente}}</td>
                <td>{{$proyecto->presupuesto}}</td>
                <td>{{$proyecto->integrantes}}</td>
                <td>{{$proyecto->descripcion}}</td>
                <td>
                </td>
            </tr>
            
            @endforeach

        </table>

    </div>
@endsection