<form method="post" action="{{ url('/mrk-ventas/estrategias_publicidad/'.$actividad_estrategia->id) }}" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    <div class="modal fade" id="editar{{$actividad_estrategia->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                <input type="number" class="form-control" value="{{ $actividad_estrategia->id }}" disabled>
                            </div>
                        </div>
                        <!-- Título -->
                        <div class="row mb-3">
                            <label for="Titulo" class="col-sm-4 col-form-label">Título</label>
                            <div class="col-sm-8">
                                <input type="text" name="Titulo" id="Titulo" value="{{ $actividad_estrategia->titulo }}" class="form-control" autofocus required>
                            </div>
                        </div>
                        <!-- Autor -->
                        <div class="row mb-3">
                            <label for="Autor" class="col-sm-4 col-form-label">Autor</label>
                            <div class="col-sm-8">
                                <input type="text" name="Autor" id="Autor" value="{{ $actividad_estrategia->autor }}" class="form-control" autofocus required>
                            </div>
                        </div>
                        <!-- Fecha de inicio -->
                        <div class="row mb-3">
                            <label for="Inicio" class="col-sm-4 col-form-label">Fecha de inicio</label>
                            <div class="col-sm-8">
                                <input type="date" name="Inicio" id="Inicio" value="{{ $actividad_estrategia->inicio }}" class="form-control" required>
                            </div>
                        </div>
                        <!-- Fecha de finalización -->
                        <div class="row mb-3">
                            <label for="Fin" class="col-sm-4 col-form-label">Fecha de finalización</label>
                            <div class="col-sm-8">
                                <input type="date" name="Fin" id="Fin" value="{{ $actividad_estrategia->fin }}" class="form-control" required>
                            </div>
                        </div>
                        <!-- ID, título, autor, fecha de inicio, fecha de finalización, presupuesto estimado, descripción, imagen -->
                        <!-- Presupuesto estimado -->
                        <div class="row mb-3">
                            <label for="Presupuesto" class="col-sm-4 col-form-label">Presupuesto estimado</label>
                            <div class="col-sm-8 input-group">
                                <span class="input-group-text">$</span>
                                <input type="number" name="Presupuesto" id="Presupuesto" value="{{ $actividad_estrategia->presupuesto }}" class="form-control" autofocus required>
                            </div>
                        </div>

                        <!-- Descripción -->
                        <div class="row mb-5">
                            <label for="Descripcion" class="col-sm-4 col-form-label">Descripción</label>
                            <div class="col-sm-8">
                                <textarea name="Descripcion" id="Descripcion" value="{{ $actividad_estrategia->descripcion }}" class="form-control"></textarea>
                            </div>
                        </div>

                        <!-- Subir imagen -->
                        <div class="file-field justify-content-center text-center align-items-center d-flex mt-5">
                            <div class="z-depth-1-half mb-4 w-40 justify-content-center text-center align-items-center mt-5">
                                <img src="https://mdbootstrap.com/img/Photos/Others/placeholder.jpg" class="img-fluid align-items-center justify-content-center text-center" alt="example placeholder">
                            </div>
                            <div class="d-flex justify-content-center mt-5">
                                <div class="btn btn-mdb-color btn-rounded float-left">
                                    <input name="Imagen" id="Imagen" value="{{ $actividad_estrategia->imagen }}" type="file" accept="image/*">
                                </div>
                            </div>
                        </div>

                    </form>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <input type="submit" class="btn btn-primary" value="Actualizar" onclick="">
                </div>
            </div>
        </div>
    </div>
</form>