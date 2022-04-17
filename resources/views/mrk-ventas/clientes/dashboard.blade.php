@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Clientes</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/mrk-ventas" style="font-size: 16px; color: #9568A9;">Marketing y ventas</a> / Clientes
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
                <button type="button" class="btn btn-success mr-5" data-bs-toggle="modal" data-bs-target="#agregar"><i class="bi bi-plus mr-1"></i> Agregar nueva</button>
            </div>
        </div>


        <div class="text-center w-90 d-flex justify-content ml-5">
            <table class="table table-striped table-hover table-bordered text-center ml-5 mt-5">
                <thead style="background-color: #1B3280;">
                    <tr>
                        <th scope="col" style="color: #fff;">ID</th>
                        <th scope="col" style="color: #fff;">NOMBRE</th>
                        <th scope="col" style="color: #fff;">ORGANIZACIÓN</th>
                        <th scope="col" style="color: #fff;">TELÉFONO DE CONTACTO</th>
                        <th scope="col" style="color: #fff;">INTERÉS</th>
                        <th scope="col" style="color: #fff;">OPCIONES</th>
                    </tr>
                </thead>
                <tbody class="">
                    @foreach( $clientes as $cliente )
                    <tr>
                        <th scope="row">{{ $cliente->id }}</th>
                        <td>{{ $cliente->nombre }}</td>
                        <td>{{ $cliente->organizacion }}</td>
                        <td>{{ $cliente->telefono }}</td>
                        <td>{{ $cliente->interes }}</td>
                        <td>
                            <!-- Acciones:
                            - La opción de 'visualizar' se abre en otra página
                            - La opción de 'agregar' y 'editar' se abre en la misma página con un modal
                            - La opción de 'eliminar' se abre un modal tipo notificación en la misma página
                            -->
                            <a href="{{ url('/mrk-ventas/clientes/visualizar_estrategia/'.$cliente->id) }}"><i class="bi bi-eye-fill mr-2 text-primary" style="font-size: 18px;"></i></a> 
                            <a href="" data-bs-toggle="modal" data-bs-target="#editar{{$cliente->id}}"><i class="bi bi-pencil-fill mr-2 text-dark" style="font-size: 18px;"></i></a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#eliminar{{$cliente->id}}"><i class="bi bi-trash3-fill text-danger" style="font-size: 18px;"></i></a>
                        </td>
                        @include('mrk-ventas/clientes/modal_clientes.edit')
                        @include('mrk-ventas/clientes/modal_clientes.delete')
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>

    <!-- Modal Notificación Cliente Eliminado -->
    <div class="modal fade" id="cliente_eliminado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <div class="text-center justify-content">
                    <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Eliminar cliente</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="justify-content mb-5 text-center">
                    <i class="bi bi-check-circle-fill text-success fs-1 text-center"></i>
                </div>
                <p class="text-center fs-6">
                    Cliente eliminado correctamente
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Notificación Cliente Editado -->
    <div class="modal fade" id="cliente_eliminado" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <div class="text-center justify-content">
                    <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Editar cliente</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="justify-content mb-5 text-center">
                    <i class="bi bi-check-circle-fill text-success fs-1 text-center"></i>
                </div>
                <p class="text-center fs-6">
                    Cliente editado correctamente
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
            </div>
            </div>
        </div>
    </div>
    
    </div>
</div>
@include('mrk-ventas.clientes.modal_clientes.create')
<!-- FIN CONTENIDO -->
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

