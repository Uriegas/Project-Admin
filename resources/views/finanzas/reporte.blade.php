@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Reporte de gastos</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/finanzas" style="font-size: 16px; color: #9568A9;">Finanzas</a>/  Reporte de gastos
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
            <div class="d-flex float-left mr-5 mb-3">
                <p>Visualizando presupuesto de: </p>
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
                        <tr>
                            <td colspan="4" class="table-info" style="text-align: left;">Departamento de Administración</td>
                        </tr>
                        <tr>
                            <th scope="row">Cartuchos para impresora</th>
                            <td>10</td>
                            <td>$12,000.00</td>
                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#editar"><i class="bi bi-pencil-fill mr-2 text-dark" style="font-size: 18px;"></i></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="bi bi-trash3-fill text-danger" style="font-size: 18px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Gasto total:</th>
                            <td>-</td>
                            <td colspan="2" style="text-align: right;">$12,000.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="table-info" style="text-align: left;">Departamento de Recursos Humanos</td>
                        </tr>
                        <tr>
                            <th scope="row">Cartuchos para impresora</th>
                            <td>10</td>
                            <td>$12,000.00</td>
                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#editar"><i class="bi bi-pencil-fill mr-2 text-dark" style="font-size: 18px;"></i></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="bi bi-trash3-fill text-danger" style="font-size: 18px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Gasto total:</th>
                            <td>-</td>
                            <td colspan="2" style="text-align: right;">$12,000.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="table-info" style="text-align: left;">Departamento de Marketing y Ventas</td>
                        </tr>
                        <tr>
                            <th scope="row">Cartuchos para impresora</th>
                            <td>10</td>
                            <td>$12,000.00</td>
                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#editar"><i class="bi bi-pencil-fill mr-2 text-dark" style="font-size: 18px;"></i></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="bi bi-trash3-fill text-danger" style="font-size: 18px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Gasto total:</th>
                            <td>-</td>
                            <td colspan="2" style="text-align: right;">$12,000.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="table-info" style="text-align: left;">Departamento de Finanzas</td>
                        </tr>
                        <tr>
                            <th scope="row">Cartuchos para impresora</th>
                            <td>10</td>
                            <td>$12,000.00</td>
                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#editar"><i class="bi bi-pencil-fill mr-2 text-dark" style="font-size: 18px;"></i></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="bi bi-trash3-fill text-danger" style="font-size: 18px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Gasto total:</th>
                            <td>-</td>
                            <td colspan="2" style="text-align: right;">$12,000.00</td>
                        </tr>
                        <tr>
                            <td colspan="4" class="table-info" style="text-align: left;">Departamento de Desarrollo</td>
                        </tr>
                        <tr>
                            <th scope="row">Cartuchos para impresora</th>
                            <td>10</td>
                            <td>$12,000.00</td>
                            <td>
                                <a href="" data-bs-toggle="modal" data-bs-target="#editar"><i class="bi bi-pencil-fill mr-2 text-dark" style="font-size: 18px;"></i></a>
                                <a href="" data-bs-toggle="modal" data-bs-target="#eliminar"><i class="bi bi-trash3-fill text-danger" style="font-size: 18px;"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">Gasto total:</th>
                            <td>-</td>
                            <td colspan="2" style="text-align: right;">$12,000.00</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="d-flex float-right mr-5 mb-3">
                <div class="mr-5">
                    <button type="button" class="btn bg-warning text-white mr-5"><i class="bi bi-file-earmark-pdf-fill mr-2 text-white" style="font-size: 18px;"></i>Ver PDF</button>
                    <button type="button" class="btn btn-danger mr-5">Descartar</button>
                    <button type="button" class="btn btn-success mr-5">Guardar</button>
                </div>
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
                            <button type="button" class="btn btn-primary">Agregar</button>
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

