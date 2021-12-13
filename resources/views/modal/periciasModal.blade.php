@foreach($ficha->pericia()->get() as $pericia)
<div class="modal fade" id={{ $pericia->nome . 'Modal' }} tabindex="-1" aria-labelledby={{ $pericia->nome . 'ModalLabel' }} aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id={{ $pericia->nome . 'ModalLabel' }}>{{ $pericia->nome }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/pericia/{{ $ficha->id }}/{{ $pericia->id }}" method="POST" id={{ $pericia->nome . 'ModalForm' }}>
                    @csrf
                    @method('PUT')
                    <div class="row row-cols-1">
                        <!-- BONUS -->
                        <div class="col">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for={{ $pericia->bonus }}>
                                    Bônus:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="number" name='bonus' id={{ $pericia->nome . 'bonus' }} style="color: white;" value={{ $pericia->bonus }}>
                                </div>
                            </div>
                        </div>

                        <!-- TREINADO -->
                        <div class="col mt-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for={{ $pericia->bonus }}>
                                    Treinado:
                                </label>
                                <div class="col">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='treinado' id={{ $pericia->nome . 'treinado' }}>
                                        <option value="0" style="color: black;">Não</option>
                                        <option value="1" style="color: black;"
                                        @if ($pericia->treinado)
                                        selected
                                        @endif
                                        >Sim</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Atualizar" class="btn btn-primary" form={{ $pericia->nome . 'ModalForm' }}>
            </div>
        </div>
    </div>
</div>
@endforeach