@extends('layouts.app')

<!-- Bootstrap css -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Desarrollo</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="{{route('showAllTableros')}}" style="font-size: 16px; color: #979799;">Desarrollo</a> / Tableros
        </p>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>


<!-- FIN CABECERA -->

<!-- CONTENIDO -->
       
    

    <div class="row dflex">   
        <div class="container" style="margin: 0px; margin-left: 50px; ">
            <button type="button" class="btn btn-success al-auto" data-bs-toggle="modal" data-bs-target="#tar1"><i class="bi bi-plus" style="margin-right: 10px;"></i> Agregar tablero</button>
        </div> 
        <div class="row d-flex justify-content-center">
            @foreach ($tableros as $tablero)
                <div class="card" style="width: 18rem; margin: 10px;">
                <!--<img src="..." class="card-img-top" alt="...">-->
                    <div class="card-body">
                        <h5 class="card-title">{{$tablero->titulo}}</h5>
                        <p class="card-text">{{$tablero->descripcion}}</p>
                        <!--<a href="#" class="btn btn-primary">Ver tarjeta</a>
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Ampliar</button>
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#proy1">Ver proyecto</button>-->
                        <a href = "{{route('show.tablero', ['idTablero' => $tablero->id])}}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                        <button type="button" class="btn btn-secondary btnVerTablero" data-bs-toggle="modal" data-bs-target="#verTableroInfo" data-id="{{route('showTablero', ['idTablero' => $tablero->id])}}"><i class="bi bi-info-circle"></i></button>
                        <button type="button" class="btn btn-danger btnEliminarTablero" data-id="{{route('eliminarTablero', ['idTablero' => $tablero->id])}}"><i class="bi bi-trash3"></i></button>
                    </div>
                </div>
            @endforeach
        </div>
    </div>    

    <!-- MODALES -->
    <div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                    ¿Está seguro de querer eliminar la estrategia el tablero seleccionado? Se eliminarán todas las actividades del tablero.
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, cancelar</button>
                <button type="button" class="btn btn-danger" id="btnConfirmarEliminarTablero">Sí, eliminar</button>
            </div>
            </div>
        </div>
    </div>

    <!-- MODAL VER ACTIVIDAD/EDITAR -->
    <div class="modal fade" id="verTableroInfo" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class= "modal-dialog modal-dialog-scrollable" role="document">
        <form id="formEditarTablero" method="POST" action="{{route('showAllTableros')}}">  
            @csrf 
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tablero</h5>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                            Título: 
                            <input type="text" id="verTableroTitulo" class="form-control" placeholder="Titulo" name="titulo" readonly>
                            <input type="hidden" id="verTableroId" class="form-control" placeholder="Titulo" name="verTableroId" hidden><br>
                            Nombre de proyecto:<br>
                            <input type="text" id="verTableroProyecto" class="form-control" placeholder="Titulo" name="proyecto" readonly><br>
                            Descripción: 
                            <input type="descripcion" id="verTableroDescripcion" class="form-control" placeholder="Descripción" name="descripcion" readonly><br>
                            Fecha de inicio: <input type="date" id="verTableroFechaInicio" name="fechaInicio" readonly><br><br>
                            Fecha de finalización: <input type="date" id="verTableroFechaFin" name="fechaFin" readonly><br><br>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-secondary" id="btnEditarTablero"><i class="bi bi-pencil-square"></i><span> Editar tablero</span></button>
                        <button type="button" class="btn btn-primary btnPermitirEdicionTablero"><i class="bi bi-pencil"></i><span> Permitir edición</span></button>                            
                    </div>
                </div>
            </form>
        </div>
    </div>

    

        <!-- MODAL AGREGAR TABLERO -->
        <div class="modal fade" id="tar1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class= "modal-dialog modal-dialog-scrollable" role="document">
                <form id="formAgregarTablero" method="POST" action="{{route('showAllTableros')}}">
                    @csrf
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Agregar tablero</h5>
                            <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Título: 
                            <input type="text" id="desc1" class="form-control" placeholder="Titulo" name="titulo"><br>
                            ID del proyecto:<br>
                            <select id="disabledSelect" class="form-select" name="idProyecto">
                                <option selected>Seleccione ID</option>
                                @foreach ($proyectos as $proyecto)
                                    <option value="{{$proyecto->id}}">{{$proyecto->descripcion}}</option>
                                @endforeach
                            </select><br>
                            Descripción: 
                            <input type="descripcion" id="desc1" class="form-control" placeholder="Descripción" name="descripcion"><br>
                            Fecha de inicio: <input type="date" id="fecha" name="fechaInicio"><br><br>
                            Fecha de finalización: <input type="date" id="fecha2" name="fechaFin"><br><br>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                        <button type="submit" class="btn btn-primary">Agregar tablero</button>
                    </div>
                </form>
            </div>
        </div>

          
        <!-- Script AGREGAR actividad -->
        <script>
            const urlAgregarTablero = "{{route('agregarTablero')}}";
            const formAgregarTablero = document.getElementById('formAgregarTablero');

            formAgregarTablero.addEventListener('submit', function(e)
            {
                e.preventDefault();

                const fetchData = {
                    method: "POST",
                    body: new FormData(formAgregarTablero)
                };  

                fetch(urlAgregarTablero, fetchData).then(r => r.json()).then(data =>
                {
                    window.location.href = "{{route('showAllTableros')}}";
                });
            });
        </script>

        <!-- Script EDITAR actividad -->
        <script>
            const urlEditarTablero = "{{route('editarTablero')}}";
            const formEditarTablero = document.getElementById('formEditarTablero');

            formEditarTablero.addEventListener('submit', function(e)
            {
                e.preventDefault();

                const fetchData = {
                    method: "POST",
                    body: new FormData(formEditarTablero)
                };  

                fetch(urlEditarTablero, fetchData).then(r => r.json()).then(data =>
                {
                    window.location.href = "{{route('showAllTableros')}}";
                });
            });
        </script>

    <!-- Script Get Tablero Info edicion -->
    <script>
        $(document).ready(function()
        {
            $('.btnVerTablero').click(function(event)
            {
                event.preventDefault();

                var urlData = $(this).attr('data-id');

                $.ajax({
                    url: urlData,
                    type: 'GET',
                    dataType: 'html'
                }).done(function(response)
                {
                    response = JSON.parse(response);
                    console.log(response);
                    $('#verTableroTitulo').val(response.tablero.titulo);
                    $('#verTableroId').attr('value', response.tablero.codigo_proyecto);
                    $('#verTableroProyecto').val(response.tablero.nombreProyecto);
                    $('#verTableroDescripcion').val(response.tablero.descripcion);
                    $('#verTableroFechaInicio').val(response.tablero.inicio);
                    $('#verTableroFechaFin').val(response.tablero.fin);
                });
            });

            $('.btnEliminarTablero').click(function(event)
            {
                event.preventDefault();
                var urlDelete = $(this).attr('data-id');
                
                
                confirmarEliminarTablero(urlDelete);
                
            });

            
        });
    </script>
    
    <!-- Script Permitir Edicion -->
    <script>
        $(document).ready(function(){
            $('#btnEditarTablero').hide();
            
            $('.btnPermitirEdicionTablero').click(function(event)
            {
                event.preventDefault();

                $(this).find('span').text(' Cancelar edición');

                if($('#btnEditarTablero').is(":visible"))
                {
                    $('#btnEditarTablero').hide();

                    $('#verTableroTitulo').attr('readonly', true);
                    $('#verTableroProyecto').attr('readonly', true);
                    $('#verTableroDescripcion').attr('readonly', true);
                    $('#verTableroFechaFin').attr('readonly', true);

                    $(this).find('span').text(' Permitir edición');
                }
                else
                {
                    $('#btnEditarTablero').show();

                    $('#verTableroTitulo').attr('readonly', false);
                    $('#verTableroDescripcion').attr('readonly', false);
                    $('#verTableroFechaFin').attr('readonly', false);
                }
            });
        });
    </script>


    <!-- Confirmar Eliminar Tablero -->
    <script>
        function confirmarEliminarTablero(urlDelete)
        {
            $('#modalEliminar').modal('show');

            $('#btnConfirmarEliminarTablero').click(function(event)
            {
                event.preventDefault();

                eliminarTablero(urlDelete);
            });
        }

        function eliminarTablero(urlDelete)
        {
            $.ajax({
                url: urlDelete
            }).done(function(response)
            {
                window.location.href = "{{route('showAllTableros')}}";
            });  
        }
    </script>

    

    

<!-- FIN CONTENIDO -->
@endsection