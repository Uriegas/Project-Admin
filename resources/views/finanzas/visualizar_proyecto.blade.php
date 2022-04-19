@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">{{$proyecto->nombre}}</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/finanzas" style="font-size: 16px; color: #9568A9;">Finanzas</a> / <a class="navbar-brand mr-1" href="{{route('cotizacion.index')}}" style="font-size: 16px; color: #af83c2;">Cotización de proyectos</a>/ {{$proyecto->nombre}}
        </p>
    </div>
</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        <div class="container ml-5"> <!-- Falta alinear correctamente a la derecha-->
            <div class="d-flex float-right mr-5 mb-3">
                <div>
                    <form class="navbar-form mr-3">
                        <div class="input-group no-border">
                            <input type="text" value="" class="form-control" placeholder="Buscar...">
                            <button type="submit" class="btn btn-white btn-round btn-just-icon">
                            <i class="bi bi-search"></i>
                            <div class="ripple-container"></div>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="mr-5">
                    <button type="button" class="btn btn-success mr-5" data-bs-toggle="modal" data-bs-target="#agregar"><i class="bi bi-plus mr-1"></i> Agregar</button>
                </div>
            </div>

            <div class="text-center w-90 d-flex justify-content ml-5">
                <table class="table table-striped table-hover table-bordered text-center ml-5 mt-5">
                    <thead style="background-color: #1B3280;">
                        <tr>
                            <th scope="col" style="color: #fff;">CONCEPTO</th> 
                            <th scope="col" style="color: #fff;">CANTIDAD</th>
                            <th scope="col" style="color: #fff;">COSTO TOTAL</th>                            
                            <th scope="col" style="color: #fff;"></th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($presupuesto as $item)
                        <tr>
                            <td>{{$item->concepto}}</td>
                            <td>{{$item->cantidad}}</td>
                            <td>{{$item->monto}}</td>
                            <td style="display: flex; place-content: center;">
                                {{-- <button type="button" class="btn btn-warning mr-5" data-bs-toggle="modal" data-bs-target="#editar"><i class="bi bi-pencil mr-1"></i> Editar</button>
                                <button type="button" class="btn btn-danger mr-5"  data-bs-toggle="modal" data-bs-target="#eliminar"><i class="bi bi-trash mr-1"></i> Eliminar</button> --}}

                                {{-- <a href="" data-bs-toggle="modal" data-bs-target="#editar"><i class="bi bi-pencil-fill mr-2 text-dark" style="font-size: 18px;"></i></a> --}}

                                <a href="{{route('cotizacion.edit', $item->id)}}"><i class="bi bi-pencil-fill mr-2 text-dark" style="font-size: 18px;"></i></a>
                                <form action="{{route('cotizacion.destroy', $item->id)}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="bi bi-trash3-fill text-danger show-confirm" style="border:none; background-color:transparent; font-size: 18px;" data-toggle="tooltip" data-placement="top" title="Eliminar" id="delete-item" type="submit"></button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>
                            <th scope="row">Gasto Total:</th>
                            <td>-</td>
                            <td colspan="2" style="text-align: right;">${{$total}}</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Modal Notificación Gasto Editado -->
            <div class="modal fade" id="cliente_eliminado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <div class="text-center justify-content">
                            <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Editar gasto</h3>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="justify-content mb-5 text-center">
                            <i class="bi bi-check-circle-fill text-success fs-1 text-center"></i>
                        </div>
                        <p class="text-center fs-6">
                            Gasto editado 
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Modal editar -->
            <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class= "modal-dialog modal-dialog-scrollable " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fs-5" id="exampleModalLabel">Editar gasto</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="#">
                                <!-- Departamento -->
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Departamento</label>
                                    <div class="col-sm-8">
                                        <div class="dropdown">
                                            <select name="Departamento" class="form-select">
                                                <option value="0" selected>Seleccionar...</option>
                                                <option value="1">Administración</option>
                                                <option value="2">Recursos Humanos</option>
                                                <option value="3">Marketing y Ventas</option>
                                                <option value="4">Finanzas</option>
                                                <option value="5">Desarrollo</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Concepto -->
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Concepto</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" autofocus required>
                                    </div>
                                </div>
                                <!-- Cantidad -->
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Cantidad</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" autofocus required>
                                    </div>
                                </div>
                                <!-- Costo total -->
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Costo total</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" autofocus required>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-primary">Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Modal Notificación Gasto Eliminado -->
            <div class="modal fade" id="cliente_eliminado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <div class="text-center justify-content">
                            <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Eliminar gasto</h3>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="justify-content mb-5 text-center">
                            <i class="bi bi-check-circle-fill text-success fs-1 text-center"></i>
                        </div>
                        <p class="text-center fs-6">
                            Gasto eliminado correctamente
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Modal eliminar -->
            <div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <div class="text-center justify-content">
                            <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Eliminar gasto</h3>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="justify-content mb-5 text-center">
                            <i class="bi bi-exclamation-circle-fill text-danger fs-1 text-center"></i>
                        </div>
                        <p class="text-center fs-6">
                            ¿Está seguro de querer eliminar el gasto seleccionado?
                        </p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, cancelar</button>
                        <button type="button" class="btn btn-danger">Sí, eliminar</button>
                    </div>
                    </div>
                </div>
            </div>

            <!-- Modal agregar -->
            <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class= "modal-dialog modal-dialog-scrollable " role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title fs-5" id="exampleModalLabel">Agregar gasto</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">

                            <form action="{{route('cotizacion.store')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <!-- Hidden proyecto_id -->
                                <input type="hidden" name="proyecto_id" id="proyecto_id" value="{{$proyecto->id}}">
                                <!-- Concepto -->
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Concepto</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="concepto" id="concepto" class="form-control" autofocus required>
                                    </div>
                                </div>
                                <!-- Cantidad -->
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Cantidad</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="cantidad" id="cantidad" class="form-control" autofocus required>
                                    </div>
                                </div>
                                <!-- Costo total -->
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Monto</label>
                                    <div class="col-sm-8">
                                        <input type="text" name="monto" id="monto" class="form-control" autofocus required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                    <button type="button submit" class="btn btn-primary">Agregar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

