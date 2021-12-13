<!-- MODAL -->
<div class="modal fade" id="atributosModal" tabindex="-1" aria-labelledby="atributosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="atributosModalLabel">Atributos</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <form action="/ficha/atributo/{{ $ficha->id }}" method="POST" id="atributosModalForm">
                    @csrf
                    @method('PUT')
                    <div class="row row-cols-1 row-cols-md-2">
                        @foreach($ficha->atributo()->get() as $atributo)
                        <div class="col mt-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for={{ $atributo->nome }}>{{ $atributo->nome }}:</label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="number" name={{ $atributo->nome }} style="color: white;" value={{ $atributo->valor }}>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Atualizar Atributos" class="btn btn-primary" form="atributosModalForm">
            </div>
        </div>
    </div>
</div>