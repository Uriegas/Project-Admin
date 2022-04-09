@extends('layouts.app')

@section('content')

<!-- CABECERA -->
<div class="page-header d-xl-flex d-block">
    <div class="page-leftheader">
        <h4 class="page-title">Dashboard</h4>
    </div>

</div>
<!-- FIN CABECERA -->




<!-- CONTENIDO -->
<div class="row">
    <div class="col-xl-12 col-md-12 col-lg-12">
        
    <div class="page-rightheader ml-md-auto">
        <div class="align-items-end flex-wrap my-auto right-content breadcrumb-right">
            <div class="btn-list">
                <a href="{{ url('/recursos-humanos/empleados') }}" class="btn btn-primary mr-3">
                    Lista de Empleados</a>
            </div>
            <div class="btn-list">
                <a href="{{ url('/recursos-humanos/evaluaciones') }}" class="btn btn-primary mr-3">
                    Lista de Evaluaciones</a>
            </div>
        </div>
    </div>
    
    </div>
</div>
<!-- FIN CONTENIDO -->
@endsection