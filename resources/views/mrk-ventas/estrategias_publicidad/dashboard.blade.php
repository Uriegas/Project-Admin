@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Estrategias de publicidad</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/mrk-ventas" style="font-size: 16px; color: #9568A9;">Marketing y ventas</a> / Estrategias de publicidad
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
                        <th scope="col" style="color: #fff;">TÍTULO</th>
                        <th scope="col" style="color: #fff;">AUTOR</th>
                        <th scope="col" style="color: #fff;">FECHA DE INICIO</th>
                        <th scope="col" style="color: #fff;">FECHA DE FINALIZACIÓN</th>
                        <th scope="col" style="color: #fff;">PRESUPUESTO ESTIMADO</th>
                        <th scope="col" style="color: #fff;">OPCIONES</th>
                    </tr>
                </thead>
                <tbody class="">
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>
                            <!-- Acciones:
                            - La opción de 'visualizar' se abre en otra página
                            - La opción de 'agregar' y 'editar' se abre en la misma página con un modal
                            - La opción de 'eliminar' se abre un modal tipo notificación en la misma página
                            -->
                            <a href="/mrk-ventas/estrategias_publicidad/visualizar_estrategia"><i class="bi bi-eye-fill mr-2 text-primary" style="font-size: 18px;"></i></a> 
                            <a href="" data-bs-toggle="modal" data-bs-target="#editar"><i class="bi bi-pencil-fill mr-2 text-dark" style="font-size: 18px;"></i></a>
                            <a href="" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="bi bi-trash3-fill text-danger" style="font-size: 18px;"></i></a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

    </div>

    <!-- Modal Notificación Estrategia Eliminada -->
    <div class="modal fade" id="estrategia_eliminada" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <div class="text-center justify-content">
                    <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Eliminar estrategia de publicidad</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="justify-content mb-5 text-center">
                    <i class="bi bi-check-circle-fill text-success fs-1 text-center"></i>
                </div>
                <p class="text-center fs-6">
                    Estrategia de publicidad eliminada correctamente
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Aceptar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal Notificación Estrategia Editada -->
    <div class="modal fade" id="estrategia_eliminada" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <div class="text-center justify-content">
                    <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Editar estrategia de publicidad</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="justify-content mb-5 text-center">
                    <i class="bi bi-check-circle-fill text-success fs-1 text-center"></i>
                </div>
                <p class="text-center fs-6">
                    Estrategia de publicidad editada correctamente
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
                    <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Eliminar estrategia de publicidad</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="justify-content mb-5 text-center">
                    <i class="bi bi-exclamation-circle-fill text-danger fs-1 text-center"></i>
                </div>
                <p class="text-center fs-6">
                    ¿Está seguro de querer eliminar la estrategia de publicidad seleccionada?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, cancelar</button>
                <button type="button" class="btn btn-danger">Sí, eliminar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- Modal editar -->
    <div class="modal fade" id="editar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class= "modal-dialog modal-dialog-scrollable " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Editar estrategia de publicidad</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="#">
                        <!-- ID --> 
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">ID</label> 
                            <div class="col-sm-2">
                                <input type="number" class="form-control" disabled>
                            </div>
                        </div>
                        <!-- Título -->
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">Título</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" autofocus required>
                            </div>
                        </div>
                        <!-- Autor -->
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">Autor</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" autofocus required>
                            </div>
                        </div>
                        <!-- Fecha de inicio -->
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">Fecha de inicio</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" required>
                            </div>
                        </div>
                        <!-- Fecha de finalización -->
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">Fecha de finalización</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" required>
                            </div>
                        </div>
                        <!-- ID, título, autor, fecha de inicio, fecha de finalización, presupuesto estimado, descripción, imagen -->
                        <!-- Presupuesto estimado -->
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">Presupuesto estimado</label>
                            <div class="col-sm-8 input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" autofocus required>
                            </div>
                        </div>

                        <!-- Descripción -->
                        <div class="row mb-5">
                            <label for="" class="col-sm-4 col-form-label">Descripción</label>
                            <div class="col-sm-8">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- Subir imagen -->
                        <div class="file-field justify-content-center text-center align-items-center d-flex mt-5">
                            <div class="z-depth-1-half mb-4 w-40 justify-content-center text-center align-items-center mt-5">
                                <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid align-items-center justify-content-center text-center" alt="example placeholder">
                            </div>
                            <div class="d-flex justify-content-center mt-5">
                                <div class="btn btn-mdb-color btn-rounded float-left">
                                    <input type="file" accept="image/*">
                                </div>
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

    <!-- Modal agregar -->
    <div class="modal fade" id="agregar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class= "modal-dialog modal-dialog-scrollable " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Agregar estrategia de publicidad</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">

                    <form action="#">
                        <!-- ID --> 
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">ID</label> 
                            <div class="col-sm-2">
                                <input type="number" class="form-control" disabled>
                            </div>
                        </div>
                        <!-- Título -->
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">Título</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" autofocus required>
                            </div>
                        </div>
                        <!-- Autor -->
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">Autor</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" autofocus required>
                            </div>
                        </div>
                        <!-- Fecha de inicio -->
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">Fecha de inicio</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" required>
                            </div>
                        </div>
                        <!-- Fecha de finalización -->
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">Fecha de finalización</label>
                            <div class="col-sm-8">
                                <input type="date" class="form-control" required>
                            </div>
                        </div>
                        <!-- ID, título, autor, fecha de inicio, fecha de finalización, presupuesto estimado, descripción, imagen -->
                        <!-- Presupuesto estimado -->
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">Presupuesto estimado</label>
                            <div class="col-sm-8 input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" class="form-control" autofocus required>
                            </div>
                        </div>

                        <!-- Descripción -->
                        <div class="row mb-5">
                            <label for="" class="col-sm-4 col-form-label">Descripción</label>
                            <div class="col-sm-8">
                                <textarea class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- Subir imagen -->
                        <div class="file-field justify-content-center text-center align-items-center d-flex mt-5">
                            <div class="z-depth-1-half mb-4 w-40 justify-content-center text-center align-items-center mt-5">
                                <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid align-items-center justify-content-center text-center" alt="example placeholder">
                            </div>
                            <div class="d-flex justify-content-center mt-5">
                                <div class="btn btn-mdb-color btn-rounded float-left">
                                    <input type="file" accept="image/*">
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Agregar</button>
                </div>
            </div>
        </div>
    </div>
    
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

