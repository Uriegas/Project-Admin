@extends('administracion.layout')

@section('content')

<div class="row">
    <div class="col-lg-12 margin-tb">

        <div class="pull-left">
            <h2>Agregar nuevo proyecto</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{route('administracion.index') }}">Regresar</a> 
        </div>
    </div>
</div>
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Ha ocurrido un problema al ingresar los datos.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>

    @endif

    <form action="{{route('administracion.store') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-xs-12-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Descripción</strong>
                    <input type="text" name="descripcion" class="form-control" placeholder="">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>ID del cliente</strong>
                    <input type="text" name="cliente_id" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Presupuesto</strong>
                    <input type="text" name="presupuesto" class="form-control" placeholder="">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Inicio del proyecto</strong>
                    <input type="text" name="inicio" class="form-control" placeholder="">
                </div>
            </div>

            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Fin del proyecto</strong>
                    <input type="text" name="fin" class="form-control" placeholder="">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text center">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
        </div>
    
    </form>

    @endsection