<!-- PODERES POST -->
<div class="modal fade" id="poderesModal" tabindex="-1" aria-labelledby="poderesModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="poderesModalLabel">Novo Poder</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/poder/{{ $ficha->id }}" method="POST" id="poderForm">
                    @csrf
                    @method('POST')
                    <div class="row">
                        <!-- NOME -->
                        <div class="col-12 mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="nome">
                                    Nome:
                                </label>
                                <div class="col col-md-9">
                                    <input required class="form-control bg-transparent text-center" type="text" name='nome' style="color: white;">
                                </div>
                            </div>
                        </div>

                        <!-- TIPO -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="tipo">
                                    Tipo:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='tipo'>
                                        <option value="Raca" style="color: black;">Raca</option>
                                        <option value="Classe" style="color: black;" selected>Classe</option>
                                        <option value="Origem" style="color: black;">Origem</option>
                                        <option value="Deus" style="color: black;">Deus</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- DESCRICAO -->
                        <div class="col-12 text-start">
                            <label class="mb-2" for="descricao">Descrição:</label>
                            <textarea class="form-control bg-transparent" style="color: white;" name="descricao" rows="10"></textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Novo" class="btn btn-primary" form="poderForm">
            </div>
        </div>
    </div>
</div>

<!-- PODERES UPDATE -->
@foreach($ficha->poder()->get() as $poder)
<div class="modal fade" id={{ str_replace(" ", "", $poder->nome) . 'Modal'}} tabindex="-1" aria-labelledby={{ $poder->nome . 'ModalLabel'}} aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id={{ $poder->nome . 'ModalLabel'}}>{{ $poder->nome }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/poder/{{ $ficha->id }}/{{ $poder->id }}" method="POST" id={{ str_replace(" ", "", $poder->nome) . 'ModalForm'}}>
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
                                    <input required class="form-control bg-transparent text-center" type="text" name='nome' style="color: white;" id={{ $poder->nome . 'Nome'}} value="{{ $poder->nome }}">
                                </div>
                            </div>
                        </div>

                        <!-- TIPO -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="tipo">
                                    Tipo:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='tipo' id={{ $poder->tipo . 'Tipo'}} value="{{ $poder->tipo }}">
                                        <option value="Raca" style="color: black;">Raca</option>
                                        <option value="Classe" style="color: black;"
                                        @if ($poder->tipo == 'Classe')
                                        selected
                                        @endif
                                        >Classe</option>
                                        <option value="Origem" style="color: black;"
                                        @if ($poder->tipo == 'Origem')
                                        selected
                                        @endif
                                        >Origem</option>
                                        <option value="Deus" style="color: black;"
                                        @if ($poder->tipo == 'Deus')
                                        selected
                                        @endif
                                        >Deus</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- DESCRICAO -->
                        <div class="col-12 text-start">
                            <label class="mb-2" for="descricao">Descrição:</label>
                            <textarea class="form-control bg-transparent" style="color: white;" name="descricao" rows="10" id={{ $poder->nome . 'Descricao'}}>{{ $poder->descricao }}</textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <form action="/ficha/poder/{{ $ficha->id }}/{{ $poder->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir" class="btn btn-danger">
                </form>
                <input type="submit" value="Salvar" class="btn btn-primary" form={{ str_replace(" ", "", $poder->nome) . 'ModalForm'}}>
            </div>
        </div>
    </div>
</div>
@endforeach