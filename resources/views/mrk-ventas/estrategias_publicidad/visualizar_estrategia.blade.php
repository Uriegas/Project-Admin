@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Estrategias de publicidad</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/mrk-ventas" style="font-size: 16px; color: #9568A9;">Marketing y ventas</a> / <a class="navbar-brand mr-1" href="/mrk-ventas/estrategias_publicidad/dashboard" style="font-size: 16px; color: #af83c2;">Estrategias de publicidad</a>/ Visualizar estrategia de publicidad
        </p>
    </div>
</div>
<!-- FIN CABECERA -->

<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">

        <div class="container ml-5"> <!-- Falta alinear correctamente a la derecha-->

            <div class="ml-5">

                <!-- Título -->
                <div class="fs-5 d-flex">
                    <div class="w-15">
                        <h6>Título: </h6>
                    </div>
                    <div class="w-35">
                        <h3 class="fw-bolder">Cambiar</h3> 
                    </div>
                </div>

                <!-- Autor -->
                <div class="fs-5 d-flex mb-2">
                    <div class="w-15">
                        <h6>Autor: </h6>
                    </div>
                    <div class="w-35">
                        <h4 class="fw-bold">Cambiar</h4> 
                    </div>
                </div>

                <!-- ID -->
                <div class="fs-5 d-flex mb-5">
                    <div class="w-15">
                        <h6>ID: </h6>
                    </div>
                    <div class="w-35">
                        <h5 class="fw-bold">Cambiar</h5> 
                    </div>
                </div>
                
            </div> 

            <div class="d-flex mt-5 ml-3">
                <!-- Imagen --> 
                <div class="col-3 mr-5 mt-5"> <!-- Se cambia el src de la imagen -->
                    <h6>Imagen: </h6>
                    <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid d-block w-100" alt="...">
                    <a href="" data-bs-toggle="modal" data-bs-target="#ampliar_imagen" class="stretched-link"></a>
                </div>

                <div class="col-12 ml-5 mt-5">
                    <!-- Descripción -->
                    <div class="fs-5 d-flex mb-4">
                        <div class="w-15">
                            <h6>Descripción: </h6>
                        </div>
                        <div class="w-35">
                            <h5 class="fw-normal">Cambiar Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta reprehenderit reiciendis iusto necessitatibus, nesciunt laboriosam dolorum sit numquam et voluptate vero quas sequi laborum nemo, debitis quidem incidunt quisquam nostrum.</h5> 
                        </div>
                    </div>
                    <!-- Fecha de inicio -->
                    <div class="fs-5 d-flex mb-4">
                        <div class="w-15">
                            <h6>Fecha de inicio: </h6>
                        </div>
                        <div class="w-35">
                            <h5 class="fw-normal">Cambiar</h5> 
                        </div>
                    </div>
                    <!-- Fecha de finalización -->
                    <div class="fs-5 d-flex mb-4">
                        <div class="w-15">
                            <h6>Fecha de finalización: </h6>
                        </div>
                        <div class="w-35">
                            <h5 class="fw-normal">Cambiar</h5> 
                        </div>
                    </div>
                    <!-- Presupuesto estimado -->
                    <div class="fs-5 d-flex mb-4">
                        <div class="w-15">
                            <h6>Presupuesto estimado: </h6>
                        </div>
                        <div class="w-35">
                            <h5 class="fw-normal">Cambiar</h5> 
                        </div>
                    </div>
                </div>

            </div>

            <br><br><br>

            <div class="d-flex float-right mr-5 mb-3">
                <div class="mr-5">
                    <a href="/mrk-ventas/estrategias_publicidad/dashboard" class="btn btn-primary mr-5 w-100"><i class="bi bi-arrow-left mr-1"></i> Regresar </a>
                </div>
            </div>

        </div>

        <!-- Modal Ampliar imagen -->
        <div class="modal fade" id="ampliar_imagen" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-body"> <!-- Se cambia el src de la imagen -->
                        <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid d-block w-100" alt="...">
                    </div>
                </div>
            </div>
        </div>

        <br><br><br><br>
    
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

