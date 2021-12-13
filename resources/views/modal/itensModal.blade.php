<!-- ITEM UPDATE -->
@foreach($ficha->item()->get() as $item)
<div class="modal fade" id={{ $item->nome . 'Modal'}} tabindex="-1" aria-labelledby={{ $item->nome . 'ModalLabel'}} aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id={{ $item->nome . 'ModalLabel'}}>{{ $item->nome }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/item/{{ $ficha->id }}/{{ $item->id }}" method="POST" id={{ str_replace(" ", "", $item->nome) . 'ModalForm'}}>
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <!-- NOME -->
                        <div class="col-12 mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="nome">
                                    Nome:
                                </label>
                                <div class="col col-md-9">
                                    <input required class="form-control bg-transparent text-center" type="text" name='nome' id={{ $item->nome . 'Nome'}} style="color: white;" value="{{ $item->nome }}">
                                </div>
                            </div>
                        </div>
                        
                        <!-- QUANTIDADE -->
                        <div class="col-12 mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="quantidade">
                                    Quantidade:
                                </label>
                                <div class="col col-md-9">
                                    <input required class="form-control bg-transparent text-center" type="text" name='quantidade' id={{ $item->quantidade . 'Quantidade'}} style="color: white;" value="{{ $item->quantidade }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <form action="/ficha/item/{{ $ficha->id }}/{{ $item->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir" class="btn btn-danger">
                </form>
                <input type="submit" value="Atualizar" class="btn btn-primary" form={{ str_replace(" ", "", $item->nome) . 'ModalForm'}}>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- ITEM POST -->
<div class="modal fade" id="itemModal" tabindex="-1" aria-labelledby="itemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="itemModalLabel">Criar Item</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/item/{{ $ficha->id }}" method="POST" id="itemForm">
                    @csrf
                    @method('POST')
                    <div class="row row-cols-1">
                        <!-- NOME -->
                        <div class="col mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="nome">
                                    Nome:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='nome' style="color: white;">
                                </div>
                            </div>
                        </div>
                        
                        <!-- QUANTIDADE -->
                        <div class="col">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="quantidade">
                                    Quantidade:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='quantidade' style="color: white;">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Criar" class="btn btn-primary" form="itemForm">
            </div>
        </div>
    </div>
</div>