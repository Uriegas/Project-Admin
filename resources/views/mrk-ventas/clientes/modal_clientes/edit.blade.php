<form method="post" action="{{ url('/mrk-ventas/clientes/'.$cliente->id) }}" enctype="multipart/form-data">
    @csrf
    {{method_field('PATCH')}}
    <div class="modal fade" id="editar{{$cliente->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class= "modal-dialog modal-dialog-scrollable " role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title fs-5" id="exampleModalLabel">Editar información del cliente</h5>
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                        <!-- ID -->
                        <div class="row mb-3">
                            <label for="" class="col-sm-4 col-form-label">ID</label>
                            <div class="col-sm-2">
                                <input type="number" value="{{ $cliente->id }}" class="form-control" disabled>
                            </div>
                        </div>
                        <!-- Nombre -->
                        <div class="row mb-3">
                            <label for="Nombre" class="col-sm-4 col-form-label">Nombre Completo</label>
                            <div class="col-sm-8">
                                <input type="text" name="Nombre" id="Nombre" value="{{ $cliente->nombre }}" class="form-control" autofocus required>
                            </div>
                        </div>
                        <!-- Organización -->
                        <div class="row mb-3">
                            <label for="Organizacion" class="col-sm-4 col-form-label">Organización</label>
                            <div class="col-sm-8">
                                <input type="text" name="Organizacion" id="Organizacion" value="{{ $cliente->organizacion }}" class="form-control" autofocus required>
                            </div>
                        </div>
                        <!-- Teléfono de contacto -->
                        <div class="row mb-3">
                            <label for="Telefono" class="col-sm-4 col-form-label">Teléfono de contacto</label>
                            <div class="col-sm-8">
                                <input type="text" name="Telefono" id="Telefono" value="{{ $cliente->telefono }}" maxlength="10" minlength="10" class="form-control" placeholder="834 xxx xxxx" autofocus required>
                            </div>
                        </div>
                        <!-- Interés en la empresa -->
                        <div class="row mb-3">
                            <label for="Interes" class="col-sm-4 col-form-label">Interés en la empresa</label>
                            <div class="col-sm-8">
                                <input type="text" name="Interes" id="Interes" value="{{ $cliente->interes }}" class="form-control" autofocus required placeholder="Aplicación móvil, sistema, etc.">
                            </div>
                        </div>
                        <!-- Descripción del interés -->
                        <div class="row mb-3">
                            <label for="Descripcion" class="col-sm-4 col-form-label">Descripción del interés</label>
                            <div class="col-sm-8">
                                <textarea name="Descripcion" id="Descripcion" value="{{ $cliente->descripcion }}" class="form-control"></textarea>
                            </div>
                        </div>
                        <!-- Direccion de la empresa -->
                        <div class="row mb-3">
                            <label for="Direccion" class="col-sm-4 col-form-label">Direccion</label>
                            <div class="col-sm-8">
                                <textarea name="Direccion" id="Direccion" value="{{ $cliente->direccion }}" class="form-control"></textarea>
                            </div>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Actualizar</button>
                </div>
            </div>
        </div>
    </div>
</form>