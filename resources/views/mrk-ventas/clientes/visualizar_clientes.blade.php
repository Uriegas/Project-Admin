@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader ml-5 mt-5">
        <h4 class="page-title">Clientes</h4> 
        <p style="font-size: 16px;" class="navbar-brand my-0">
            <a class="navbar-brand mr-1" href="/mrk-ventas" style="font-size: 16px; color: #9568A9;">Marketing y ventas</a> / <a class="navbar-brand mr-1" href="/mrk-ventas/clientes/dashboard" style="font-size: 16px; color: #af83c2;">Clientes</a>/ Información del cliente
        </p>
    </div>
</div>
<!-- FIN CABECERA -->

<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">

        <div class="container ml-5"> <!-- Falta alinear correctamente a la derecha-->

            <div class="ml-5">

                <div class="">
                    <!-- Nombre del cliente -->
                    <div class="fs-5 d-flex">
                        <div class="w-15">
                            <h6>Nombre: </h6>
                        </div>
                        <div class="w-35">
                            <h3 class="fw-bolder"><?php echo $cliente['nombre'];?></h3> 
                        </div>
                    </div>

                    <!-- Organización -->
                    <div class="fs-5 d-flex mb-5">
                        <div class="w-15">
                            <h6>Organización: </h6>
                        </div>
                        <div class="w-35">
                            <h4 class="fw-bold"><?php echo $cliente['organizacion'];?></h4> 
                        </div>
                    </div>

                    <!-- ID -->
                    <div class="fs-5 d-flex mb-4 mt-5">
                        <div class="w-15 mt-5">
                            <h6>ID: </h6>
                        </div>
                        <div class="mt-5 w-35">
                            <h5 class="fw-normal"><?php echo $cliente['id'];?></h5> 
                        </div>
                    </div>

                    <!-- Teléfono de contacto -->
                    <div class="fs-5 d-flex mb-4">
                        <div class="w-15">
                            <h6>Teléfono de contacto: </h6>
                        </div>
                        <div class="w-35">
                            <h5 class="fw-normal"><?php echo $cliente['telefono'];?></h5> 
                        </div>
                    </div>

                    <!-- Interés en la empresa -->
                    <div class="fs-5 d-flex mb-4">
                        <div class="w-15">
                            <h6>Interés en la empresa: </h6>
                        </div>
                        <div class="w-35">
                            <h5 class="fw-normal"><?php echo $cliente['interes'];?></h5> 
                        </div>
                    </div>

                    <!-- Descripción del interés -->
                    <div class="fs-5 d-flex mb-4">
                        <div class="w-15">
                            <h6>Descripción del interés: </h6>
                        </div>
                        <div class="w-35">
                            <h5 class="fw-normal"><?php echo $cliente['descripcion'];?></h5> 
                        </div>
                    </div>
                </div>

                <hr class="mt-5 mb-5 w-60">
                <h4 class="fst-italic mb-3 mt-5">Dirección del cliente</h4>

                <div class="mt-5 ml-4">
                    <!-- Calle -->
                    <div class="fs-5 d-flex mb-4">
                        <div class="mt-5 w-35">
                            <h5 class="fw-normal"><?php echo $cliente['direccion'];?></h5> 
                        </div>
                    </div>
                </div>
                
            </div> 

            <br><br><br>

            <div class="d-flex float-right mr-5 mb-3">
                <div class="mr-5">
                    <a href="/mrk-ventas/clientes/dashboard" class="btn btn-primary mr-5 w-100"><i class="bi bi-arrow-left mr-1"></i> Regresar </a>
                </div>
            </div>

        </div>

        <br><br><br><br>
    
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

