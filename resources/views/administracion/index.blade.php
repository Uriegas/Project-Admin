@extends('administracion.layout')

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
                <td>{{++$i}}</td>
                <td>{{$proyecto->nombre_proyecto}}</td>
                <td>{{$proyecto->nombre_cliente}}</td>
                <td>{{$proyecto->presupuesto}}</td>
                <td>{{$proyecto->integrantes}}</td>
                <td>{{$proyecto->descripcion}}</td>
                <td>
                    <form action="{{route('proyectos.destroy',$proyecto->id)}}" method ="POST">
                        <a class="btn btn-info" href="{{ route('proyectos.show', $proyecto->id)}}">Mostrar</a>
                        <a class="btn btn-primary" href="{{ route('proyectos.edit', $proyecto->id)}}">Editar</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Eliminar</button>
                    </form>
                </td>
            </tr>
            
            @endforeach

        </table>

    </div>
@endsection