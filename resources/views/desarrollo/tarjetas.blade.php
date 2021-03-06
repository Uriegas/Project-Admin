@extends('layouts.app')

<!-- Bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!-- FIN CABECERA -->

<!-- CONTENIDO -->
    <div class="page-header d-xl-flex d-block ml-5">
        <div class="page-leftheader ml-5 mt-5">
            <h4 class="page-title">Desarrollo</h4> 
            <p style="font-size: 16px;" class="navbar-brand my-0">
                <a class="navbar-brand mr-1" href="{{route('showAllTableros')}}" style="font-size: 16px; color: #979799;">Tableros</a> / {{$nombreTablero}} / actividades
            </p>
        </div>
    </div>

    <div class="row dflex">   
        <div class="container" style="margin: 0px; margin-left: 50px; ">
            <button type="button" class="btn btn-success al-auto" data-bs-toggle="modal" data-bs-target="#tar1"><i class="bi bi-plus" style="margin-right: 10px;"></i> Agregar actividad</button>
        </div> 
        <div class="row d-flex justify-content-center">
            @foreach ($actividades as $actividad)
                <div class="card" style="width: 18rem; margin: 10px;">
                    <div class="card-body">
                        <h5 class="card-title">{{$actividad->titulo}}</h5>
                        <p class="card-text">{{$actividad->descripcion}}</p>
                        
                            @php
                                if($actividad->estatus == 0)
                                {
                                    echo '<div class="bg-info text-white rounded" style="width: fit-content; padding-left: 10px; padding-right: 10px; margin-bottom: 10px; font-weight: bold">Desarrollo</div>';
                                }
                                elseif($actividad->estatus == 1)
                                {
                                    echo '<div class="bg-warning text-white rounded" style="width: fit-content; padding-left: 10px; padding-right: 10px; margin-bottom: 10px; font-weight: bold">Revisi??n</div>';
                                }
                                elseif($actividad->estatus == 2)
                                {
                                    echo '<div class="text-white rounded" style="width: fit-content; padding-left: 10px; padding-right: 10px; margin-bottom: 10px; font-weight: bold; background-color: #198754;">Terminado</div>';
                                }
                                else
                                {
                                    echo '<div class="bg-info text-white rounded" style="width: fit-content; padding-left: 10px; padding-right: 10px; margin-bottom: 10px; font-weight: bold">Desarrollo</div>';
                                }
                            @endphp
                        
                        <button type="button" class="btn btn-primary btnVerActividad" data-bs-toggle="modal" data-bs-target="#verActividad" data-id="{{route('show.actividad', ['idTablero' => $idTablero, 'idActividad' => $actividad->id])}}"><i class="bi bi-eye"></i></button>
                        <button type="button" class="btn btn-danger btnEliminarActividad" data-id="{{route('eliminarActividadTablero', ['idActividad' => $actividad->id])}}"><i class="bi bi-trash3"></i></button>
                    </div>
                </div>
            @endforeach    
        </div>
    </div>

    <!-- MODALES -->
    <div class="modal fade" id="modalEliminarActividad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <div class="text-center justify-content">
                    <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Eliminar tablero</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="justify-content mb-5 text-center">
                    <i class="bi bi-exclamation-circle-fill text-danger fs-1 text-center"></i>
                </div>
                <p class="text-center fs-6">
                    ??Est?? seguro de querer eliminar la actividad seleccionada? No se podr?? recuperar despu??s.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, cancelar</button>
                <button type="button" class="btn btn-danger" id="btnConfirmarEliminarActividad">S??, eliminar</button>
            </div>
            </div>
        </div>
    </div>

    

    <!-- MODAL VER ACTIVIDAD/EDITAR -->
    <div class="modal fade" id="verActividad" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class= "modal-dialog modal-dialog-scrollable" role="document">
        <form id="formEditarActividad" method="POST" action="{{route('show.tablero', ['idTablero' => $idTablero])}}">
            @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tarjeta de Actividad</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        
                            T??tulo: 
                            <input type="text" id="verActividadTitulo" class="form-control" placeholder="Titulo" name="titulo" readonly>
                            <input type="hidden" id="verActividadId" class="form-control" placeholder="Titulo" name="verActividadId" hidden><br>
                            Descripci??n:
                            <textarea class="form-control" placeholder="Descripci??n" id="verActividadDescripcion" name="descripcion" rows="3" readonly></textarea><br>
                            Encargado: <br>
                            <input type="descripcion" id="verActividadEncargado" class="form-control" placeholder="Descripci??n" name="encargado" readonly><br>
                            </ul>
                            Fecha de inicio: <input type="date" id="verActividadFechaInicio" name="fechaInicio" readonly><br><br>
                            Fecha de finalizaci??n: <input type="date" id="verActividadFechaFin" name="fechaFin" readonly><br><br>
                            Actividades a realizar: 
                            <input type="actividades" id="verActividadActividades" class="form-control" placeholder="Actividades" name="actividades" readonly><br>
                            Status: <br>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="verActividadStatusDesarrollo" name="status" value="0">En desarrollo
                                <label class="form-check-label" for="verActividadStatusDesarrollo"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="verActividadStatusRevision" name="status" value="1">En revisi??n
                                <label class="form-check-label" for="verActividadStatusRevision"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="verActividadStatusTerminado" name="status" value="2">Terminado
                                <label class="form-check-label" for="verActividadStatusTerminado"></label>
                            </div>                        
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" id="btnEditarActividad"><i class="bi bi-pencil-square"></i><span> Editar actividad</button>
                        <button type="button" class="btn btn-primary btnPermitirEdicionActividad"><i class="bi bi-pencil"></i><span> Permitir edici??n</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

        <!-- MODAL AGREGAR ACTIVIDAD -->
        <div class="modal fade" id="tar1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class= "modal-dialog modal-dialog-scrollable" role="document">
                <form id="formAgregarActividadTablero" method="POST" action="{{route('show.tablero', ['idTablero' => $idTablero])}}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agrega una nueva actividad</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            T??tulo: 
                            <input type="text" id="desc1" class="form-control" placeholder="Titulo" name="titulo">
                            <input type="hidden" id="desc1" class="form-control" placeholder="Titulo" name="idTablero" value="{{$idTablero}}"><br>
                            Descripci??n:
                            <textarea class="form-control" placeholder="Descripci??n" name="descripcion" rows="3"></textarea><br>
                            Encargado: <br>
                            <select id="disabledSelect" class="form-select" name="encargado">
                                <option selected>Seleccione el encargado</option>
                                    @foreach ($empleados as $empleado)
                                        <option value="{{$empleado->id}}">{{$empleado->nombre}} {{$empleado->apellido}} </option>
                                    @endforeach
                            </select><br>
                            </ul>
                            Fecha de inicio: <input type="date" id="fecha" name="fechaInicio"><br><br>
                            Fecha de finalizaci??n: <input type="date" id="fecha2" name="fechaFin"><br><br>
                            Actividades a realizar: 
                            <input type="actividades" id="acts1" class="form-control" placeholder="Actividades" name="actividades"><br>
                            Status: <br>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio1" name="status" value="0">En desarrollo
                                <label class="form-check-label" for="radio1"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio2" name="status" value="1">En revisi??n
                                <label class="form-check-label" for="radio2"></label>
                            </div>
                            <div class="form-check">
                                <input type="radio" class="form-check-input" id="radio3" name="status" value="2">Terminado
                                <label class="form-check-label" for="radio3"></label>
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Agregar actividad</button>
                    </div>
                </form>
            </div>
        </div>

        <!-- AGREGAR ACTIVIDAD -->
        <script>
            const urlEnviarData = "{{route('agregarActividadTablero')}}";
            const formAgregarActividadTablero = document.getElementById("formAgregarActividadTablero");

            formAgregarActividadTablero.addEventListener('submit', function(e)
            {
                e.preventDefault();

                const fetchData = {
                    method: "POST",
                    body: new FormData(formAgregarActividadTablero)
                };

                fetch(urlEnviarData, fetchData).then(r => r.json()).then(data =>
                {
                    window.location.href = "{{route('show.tablero', ['idTablero' => $idTablero])}}";
                });
            });
        </script>

        <!-- EDITAR ACTIVIDAD -->
        <script>
            const urlEditarData = "{{route('editarActividadTablero')}}";
            const formEditarActividad = document.getElementById('formEditarActividad');

            formEditarActividad.addEventListener('submit', function(e)
            {
                e.preventDefault();

                const fetchEditData = {
                    method: "POST",
                    body: new FormData(formEditarActividad)
                };

                fetch(urlEditarData, fetchEditData).then(r => r.json()).then(data =>
                {
                    window.location.href = "{{route('show.tablero', ['idTablero' => $idTablero])}}";
                });
            });
        </script>

        



        <div class="modal fade" id="tar2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class= "modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Actividad</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    ...
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-primary">Guardar</button>
                </div>
                </div>
            </div>
        </div>

        

        <script>
            //const btnVerActividad = document.getElementById('btnVerActividad');
           // document.getElementById('btnVerActividad').addEventListener('click', function(event)
            $(document).ready(function()
            {
                $('.btnVerActividad').click(function(event)
                {
                    event.preventDefault();
                    var urlData =  $(this).attr('data-id');

                    console.log(urlData);
                    
                    $.ajax({
                        url: urlData,
                        type: 'GET',
                        dataType: 'html',
                    }).done(function(response)
                    {
                        response = JSON.parse(response);
                        $('#verActividadTitulo').val(response.actividad.titulo);
                        $('#verActividadDescripcion').val(response.actividad.descripcion);
                        $('#verActividadEncargado').val(response.actividad.nombreEmpleado);
                        $('#verActividadFechaInicio').val(response.actividad.inicio);
                        $('#verActividadFechaFin').val(response.actividad.fin);
                        $('#verActividadActividades').val(response.actividad.actividades);

                        switch(response.actividad.estatus)
                        {
                            case 0:
                            {
                                $('#verActividadStatusDesarrollo').prop("checked", true).trigger("click");
                                break;
                            }
                            case 1:
                            {
                                $('#verActividadStatusRevision').prop("checked", true).trigger("click");
                                break;
                            }
                            case 2:
                            {
                                $('#verActividadStatusTerminado').prop("checked", true).trigger("click");
                                break;
                            }
                            default:
                            {
                                $('#verActividadStatusDesarrollo').prop("checked", true).trigger("click");
                                break;
                            }
                        }

                        $('#verActividadStatusDesarrollo').attr('disabled', true);
                        $('#verActividadStatusRevision').attr('disabled', true);
                        $('#verActividadStatusTerminado').attr('disabled', true);

                        $('#verActividadId').attr('value', response.actividad.id);
                    });
                });

                $('.btnEliminarActividad').click(function(event){
                    event.preventDefault();

                    var urlDelete = $(this).attr('data-id');

                    confirmarEliminarActividad(urlDelete);
                });
                
            });
        </script>

        <script>
            $(document).ready(function()
            {
                $('#btnEditarActividad').hide();
                $('.btnPermitirEdicionActividad').click(function(event)
                {
                    event.preventDefault();

                    $(this).find('span').text(' Cancelar edici??n');

                    if($('#btnEditarActividad').is(":visible"))
                    {
                        $('#btnEditarActividad').hide();
                        $('#verActividadTitulo').attr('readonly', true);
                        $('#verActividadDescripcion').attr('readonly', true);
                        $('#verActividadActividades').attr('readonly', true);
                        $('#verActividadStatusDesarrollo').attr('disabled', true);
                        $('#verActividadStatusRevision').attr('disabled', true);
                        $('#verActividadStatusTerminado').attr('disabled', true);
                        $('#verActividadFechaFin').attr('readonly', true);
                        
                        $(this).find('span').text(' Permitir edici??n');
                    }
                    else
                    {
                        $('#btnEditarActividad').show();
                        $('#verActividadTitulo').attr('readonly', false);
                        $('#verActividadDescripcion').attr('readonly', false);
                        $('#verActividadActividades').attr('readonly', false);
                        $('#verActividadStatusDesarrollo').attr('disabled', false);
                        $('#verActividadStatusRevision').attr('disabled', false);
                        $('#verActividadStatusTerminado').attr('disabled', false);
                        $('#verActividadFechaFin').attr('readonly', false);
                    }
                });
            });
        </script>


        <script>
            function confirmarEliminarActividad(urlDelete)
            {
                $('#modalEliminarActividad').modal('show');

                $('#btnConfirmarEliminarActividad').click(function(event)
                {
                    event.preventDefault();

                    eliminarActividad(urlDelete);
                });
            }

            function eliminarActividad(urlDelete)
            {
                $.ajax({
                    url: urlDelete
                }).done(function(response)
                {
                    window.location.href = "{{route('show.tablero', ['idTablero' => $idTablero])}}";
                });
            }
        </script>
<!-- FIN CONTENIDO -->
@endsection