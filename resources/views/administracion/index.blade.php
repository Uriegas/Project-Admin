@extends('administracion.layout')
@extends('layouts.app')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader">
        <h4 class="page-title mt-5">Administración</h4>
    </div>
</div>
<!-- FIN CABECERA -->


<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12 text-center justify-content-center justify-content">
        <div class="text-center justify-content-center justify-content ml-5">
            <div class="row text-center justify-content-center justify-content">
                
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
                    </tr>
                    @endforeach
                </table>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection