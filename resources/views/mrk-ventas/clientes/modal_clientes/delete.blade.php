<form action="{{ url('/mrk-ventas/clientes/dashboard/delete/'.$cliente->id) }}" method="post">
    <!-- Modal eliminar -->
    @csrf
    {{method_field('DELETE')}} 
    <div class="modal fade" id="eliminar{{$cliente->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
            <div class="modal-header">
                <div class="text-center justify-content">
                    <h3 class="modal-title text-center justify-content fs-5 text-center" id="exampleModalLabel">Eliminar cliente</h3>
                </div>
            </div>
            <div class="modal-body">
                <div class="justify-content mb-5 text-center">
                    <i class="bi bi-exclamation-circle-fill text-danger fs-1 text-center"></i>
                </div>
                <p class="text-center fs-6">
                    ¿Está seguro de querer eliminar el cliente seleccionado?
                </p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary" data-bs-dismiss="modal">No, cancelar</button>
                <button type="submit" class="btn btn-danger">Sí, eliminar</button>
            </div>
            </div>
        </div>
    </div>
</form>