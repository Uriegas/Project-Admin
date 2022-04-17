@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Presupuesto</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/finanzas" style="font-size: 16px; color: #9568A9;">Finanzas</a>/  Presupuesto
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
            </div>

            <div class="text-center w-90 d-flex justify-content ml-5">
                <table class="table table-striped table-hover table-bordered text-center ml-5 mt-5">
                    <thead style="background-color: #1B3280;">
                        <tr>
                            <th scope="col" style="color: #fff;">DEPARTAMENTO</th> 
                            <th scope="col" style="color: #fff;">PRESUPUESTO</th>
                        </tr>
                    </thead>
                    <tbody class="">
                        @foreach($departamentos as $departamento)
                        <tr>
                            <td scope="row">{{$departamento->nombre}}</td>
                            <td>{{$departamento->presupuesto}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="d-flex float-right mr-5 mb-3">
                <div class="mr-5">
                    <button type="button" class="btn bg-warning text-white mr-5"><i class="bi bi-file-earmark-pdf-fill mr-2 text-white" style="font-size: 18px;"></i>Ver PDF</button>
                    <button type="button" class="btn bg-info text-white mr-5" data-bs-toggle="modal" data-bs-target="#editar"><i class="bi bi-pencil-fill mr-2 text-white" style="font-size: 18px;"></i>Editar</button>
                    <button type="button" class="btn btn-danger mr-5">Descartar</button>
                    <button type="button" class="btn btn-success mr-5">Guardar</button>
                </div>
            </div>

            <!-- Modal Notificación Presupuesto Editado -->
            <div class="modal fade" id="cliente_eliminado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                    <div class="modal-header">
                        <div class="text-center justify-content">
                            <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Editar presupuesto</h3>
                        </div>
                    </div>
                    <div class="modal-body">
                        <div class="justify-content mb-5 text-center">
                            <i class="bi bi-check-circle-fill text-success fs-1 text-center"></i>
                        </div>
                        <p class="text-center fs-6">
                            Presupuesto editado 
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
                            <h5 class="modal-title fs-5" id="exampleModalLabel">Editar presupuesto</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('presupuesto.update', $departamento) }}">
                                <!-- Departamento -->
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Departamento</label>
                                    <div class="col-sm-8">
                                        <div class="dropdown">
                                        <select name="id" class="form-select">
                                            <option value="" selected>Seleccionar...</option>
                                            @foreach($departamentos as $departamento)
                                            <option value="{{$departamento->id}}">{{$departamento->nombre}}</option>
                                            @endforeach
                                        </select>
                                        </div>
                                    </div>
                                </div>
                                <!-- Presupuesto -->
                                <div class="row mb-3">
                                    <label for="" class="col-sm-4 col-form-label">Presupuesto</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="presupuesto" autofocus required>
                                    </div>
                                </div>
                                <!-- Botones -->
                                <div class="row">
                                    <div class="col-sm-12">
                                        <button type="button" class="btn btn-danger mr-5" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-success">Actualizar</button>
                                    </div>
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

