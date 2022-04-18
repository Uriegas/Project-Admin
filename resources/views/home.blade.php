@extends('layouts.app')

@section('content')

<!-- Styles-Carrusel -->
<style>
.carousel{
 width: 940px; 
 height: 460px; 
}

</style>

<!-- Carrusel JS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<!-- CABECERA -->
<div class="page-header d-xl-flex d-block ml-5">
    <div class="page-leftheader">
        <h4 class="page-title mt-5">Dashboard</h4>
    </div>
</div>
<!-- FIN CABECERA -->


<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-7 col-md-7 col-lg-7 text-center justify-content-center justify-content">
            <div class="row text-center justify-content-center justify-content">
                <div class="col-5">
                        <div class="card-body">
                            <div class="container">
                                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" >
                                        <img class="d-block w-100" src="{{ asset('img/imagen1.jpg') }}" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('img/imagen2.jpg') }}" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="{{ asset('img/imagen3.jpg') }}" alt="Third slide">
                                    </div>
                                </div>

                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br><br><br><br>

    <div class="row" style="margin-top:100px;">
    <div class="col-xl-12 col-md-12 col-lg-12 text-center justify-content-center justify-content">
        <div class="text-center justify-content-center justify-content ml-5">
            <div class="row text-center justify-content-center justify-content">
                
                <div class="col-5">
                    <div class="text-black mb-3">
                        <div class="card-body">
                            <br><br>
                            <h1>Misión</h1>
                            <br><br>
                            <p>Ofrecer soluciones en desarrollo de tecnología de última generación para actuales y potenciales clientes que requieran un 
                                servicio de excelente calidad. Para ello, se trabaja en un ambiente de calidad total donde el servicio ofrecido es un fiel 
                                reflejo de la eficacia y eficiencia, que satisfaga las necesidades de nuestros clientes en términos de tecnología, innovación, 
                                confiabilidad y cumplimiento de normas.</p>
                            <br><br>
                        </div>
                    </div>
                </div>
                
                <div class="col-5">
                    <div class="text-black mb-3">
                        <div class="card-body">
                            <br><br>
                            <h1>Visión</h1>
                            <br><br>
                            <p>Ser una empresa líder reconocida como una de las mejores empresas tecnológicas de la región noreste de México, permitiéndonos 
                                ser un aliado de calidad para nuestros clientes. Nuestro principal objetivo es crear y desarrollar soluciones de software innovadoras 
                                que destaquen por su eficiencia, automatización y simplicidad de uso. La esencia de Foster Intelligence es nuestro equipo de trabajo, 
                                caracterizado por sus amplios conocimientos y alta productividad. </p>
                            <br><br>
                        </div>
                    </div>
                </div>
                
                <!-- <div class="col-5">
                    <div class="text-black mb-3">
                        <div class="card-body">
                            <br><br>
                            <h1>Organigrama Empresarial</h1>
                            <br><br>
                            <img src="{{ asset('img/organigrama.png') }}" alt="organigramaEmpresarial" style="width:700px; height: 730px;">
                            <br><br><br><br><br>
                        </div>
                    </div>
                </div> -->

            </div>
        </div>
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection