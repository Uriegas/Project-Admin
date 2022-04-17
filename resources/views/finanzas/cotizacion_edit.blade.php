@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Editar Produto</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/finanzas" style="font-size: 16px; color: #9568A9;">Finanzas</a>/ <a class="navbar-brand mr-1" href="/cotizacion" style="font-size: 16px; color: #9568A9;">Cotización de proyectos</a> / Producto {{$item->id}}
        </p>
    </div>
</div>
<!-- FIN CABECERA -->

<!-- CONTENIDO -->
<div class="row">
	<div class="col-xl-12 col-md-12 col-lg-12">
		<div class="card">
        <form action="{{ route('cotizacion.update', $item->id) }}" method="POST" enctype="multipart/form-data">
        @method('PUT')
        @csrf
			<div class="card-header d-xl-flex d-block">
				<div class="card-leftheader">
					<h4 class="card-title" id="impuestos">Información del Producto</h4>
				</div>
			</div>
			<div class="card-body text-center">
				<div class="col-sm-12">
                    <!-- Concepto -->
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label">Concepto</label>
                        <div class="col-sm-8">
                            <input id="concepto" name="concepto" type="text" value="{{$item->concepto}}" class="form-control" autofocus required>
                        </div>
                    </div>
                    <!-- Cantidad -->
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label">Cantidad</label>
                        <div class="col-sm-8">
                            <input name="cantidad" id="cantidad" type="text" value="{{$item->cantidad}}" class="form-control" autofocus required>
                        </div>
                    </div>
                    <!-- Costo total -->
                    <div class="row mb-3">
                        <label for="" class="col-sm-4 col-form-label">Monto</label>
                        <div class="col-sm-8">
                            <input name="monto" id="total" type="text" value="{{$item->monto}}" class="form-control" autofocus required>
                        </div>
                    </div>
				</div>
			</div>
            <div class="card-footer text-right">
                <a role="button" class="btn btn-outline-dark" href="{{ url()->previous() }}">
                    <i class="feather feather-corner-down-left sidemenu_icon"></i>
                    Regresar
                </a>
                <button type="submit" class="btn btn-primary">
					<i class="feather feather-save sidemenu_icon"></i>
					Guardar
				</button>
            </div>
        </form>
		</div>
	</div>
</div>

<!-- FIN CONTENIDO -->
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
 