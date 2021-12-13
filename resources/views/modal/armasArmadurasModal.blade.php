<!-- ARMADURA UPDATE -->
@foreach($ficha->armadura()->get() as $armadura)
<div class="modal fade" id={{ $armadura->nome . 'Modal'}} tabindex="-1" aria-labelledby={{ $armadura->nome . 'ModalLabel'}} aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id={{ $armadura->nome . 'ModalLabel'}}>{{ $armadura->nome }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/armadura/{{ $ficha->id }}/{{ $armadura->id }}" method="POST" id={{ str_replace(" ", "", $armadura->nome) . 'ModalForm'}}>
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
                                    <input required class="form-control bg-transparent text-center" type="text" name='nome' id={{ $armadura->nome . 'Nome'}} style="color: white;" value="{{ $armadura->nome }}">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2">
                        <!-- DEFESA -->
                        <div class="col mb-3 mb-md-0">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="defesa">
                                    Defesa:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='defesa' id={{ $armadura->nome . 'Defesa'}} style="color: white;" value="{{ $armadura->defesa }}">
                                </div>
                            </div>
                        </div>

                        <!-- PENALIDADE -->
                        <div class="col">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="penalidade">
                                    Penalidade:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='penalidade' id={{ $armadura->nome . 'Penalidade'}} style="color: white;" value="{{ $armadura->penalidade }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <form action="/ficha/armadura/{{ $ficha->id }}/{{ $armadura->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir" class="btn btn-danger">
                </form>
                <input type="submit" value="Atualizar" class="btn btn-primary" form={{ str_replace(" ", "", $armadura->nome) . 'ModalForm'}}>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- ARMADURA POST -->
<div class="modal fade" id="armaduraModal" tabindex="-1" aria-labelledby="armaduraModelLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="armaduraModelLabel">Criar Armadura</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/armadura/{{ $ficha->id }}" method="POST" id="armaduraForm">
                    @csrf
                    @method('POST')
                    <!-- NOME -->
                    <div class="row">
                        <div class="col mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="nome">
                                    Nome:
                                </label>
                                <div class="col col-md-9">
                                    <input required class="form-control bg-transparent text-center" type="text" name='nome' style="color: white;">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row row-cols-1 row-cols-md-2">
                        <!-- DEFESA -->
                        <div class="col mb-3 mb-md-0">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="defesa">
                                    Defesa:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='defesa' style="color: white;">
                                </div>
                            </div>
                        </div>

                        <!-- PENALIDADE -->
                        <div class="col">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="penalidade">
                                    Penalidade:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='penalidade' style="color: white;">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Criar" class="btn btn-primary" form="armaduraForm">
            </div>
        </div>
    </div>
</div>

<!-- ARMA UPDATE -->
@foreach($ficha->arma()->get() as $arma)
<div class="modal fade" id={{ $arma->nome . 'Modal'}} tabindex="-1" aria-labelledby={{ $arma->nome . 'ModalLabel'}} aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id={{ $arma->nome . 'ModalLabel'}}>{{ $arma->nome }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/arma/{{ $ficha->id }}/{{ $arma->id }}" method="POST" id={{ str_replace(" ", "", $arma->nome) . 'ModalForm'}}>
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
                                    <input required class="form-control bg-transparent text-center" type="text" name='nome' id={{ $arma->nome . 'Nome'}} style="color: white;" value="{{ $arma->nome }}">
                                </div>
                            </div>
                        </div>

                        <!-- PERICIA -->
                        <div class="col-12 mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="ataque_bonus">
                                    Pericia:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='pericia' id={{ $arma->pericia . 'Arma' }}>
                                        <option value="Atuacao" style="color: black;">Atuacao</option>
                                        <option value="Luta" style="color: black;" @if ($arma->pericia == "Luta")
                                            selected
                                            @endif
                                            >Luta</option>
                                        <option value="Pontaria" style="color: black;" @if ($arma->pericia == "Pontaria")
                                            selected
                                            @endif
                                            >Pontaria</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- ATRIBUTO -->
                        <div class="col-12 mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="atributo">
                                    Atributo:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='atributo'' id={{ $arma->atributo . 'Atributo' }}>
                                        <option value="Forca" style="color: black;">Forca</option>
                                        <option value="Destreza" style="color: black;"
                                        @if ($arma->atributo == 'Destreza')
                                        selected
                                        @endif
                                        >Destreza</option>
                                        <option value="Constituicao" style="color: black;"
                                        @if ($arma->atributo == 'Constituicao')
                                        selected
                                        @endif
                                        >Constituicao</option>
                                        <option value="Inteligencia" style="color: black;"
                                        @if ($arma->atributo == 'Inteligencia')
                                        selected
                                        @endif
                                        >Inteligencia</option>
                                        <option value="Sabedoria" style="color: black;"
                                        @if ($arma->atributo == 'Sabedoria')
                                        selected
                                        @endif
                                        >Sabedoria</option>
                                        <option value="Carisma" style="color: black;"
                                        @if ($arma->atributo == 'Carisma')
                                        selected
                                        @endif
                                        >Carisma</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2">
                        <!-- ATAQUE BONUS -->
                        <div class="col mb-3 mb-md-0">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="ataque_bonus">
                                    Ataque Bônus:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='ataque_bonus' id={{ $arma->nome . 'Ataque_bonus'}} style="color: white;" value="{{ $arma->ataque_bonus }}">
                                </div>
                            </div>
                        </div>

                        <!-- DANO BONUS -->
                        <div class="col mb-3 mb-md-0">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="dano_bonus">
                                    Dano Bônus:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='dano_bonus' id={{ $arma->nome . 'Dano_bonus'}} style="color: white;" value="{{ $arma->dano_bonus }}">
                                </div>
                            </div>
                        </div>

                        <!-- DANO -->
                        <div class="col mb-3 mb-md-0">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="dano">
                                    Dano:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='dano' id={{ $arma->nome . 'Dano'}} style="color: white;" value="{{ $arma->dano }}">
                                </div>
                            </div>
                        </div>

                        <!-- CRITICO -->
                        <div class="col">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="critico">
                                    Crítico:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='critico' id={{ $arma->nome . 'Critico'}} style="color: white;" value="{{ $arma->critico }}">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <form action="/ficha/arma/{{ $ficha->id }}/{{ $arma->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir" class="btn btn-danger">
                </form>
                <input type="submit" value="Atualizar" class="btn btn-primary" form={{ str_replace(" ", "", $arma->nome) . 'ModalForm'}}>
            </div>
        </div>
    </div>
</div>
@endforeach

<!-- ARMA POST -->
<div class="modal fade" id="armaModal" tabindex="-1" aria-labelledby="armaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="armaModalLabel">Criar Arma</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/arma/{{ $ficha->id }}" method="POST" id="armaForm">
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

                        <!-- PERICIA -->
                        <div class="col-12 mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="pericia">
                                    Pericia:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='pericia'>
                                        <option value="Atuacao" style="color: black;">Atuacao</option>
                                        <option value="Luta" style="color: black;" selected>Luta</option>
                                        <option value="Pontaria" style="color: black;">Pontaria</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- ATRIBUTO -->
                        <div class="col-12 mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="atributo">
                                    Atributo:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='atributo'>
                                        <option value="Forca" style="color: black;">Forca</option>
                                        <option value="Destreza" style="color: black;">Destreza</option>
                                        <option value="Constituicao" style="color: black;">Constituicao</option>
                                        <option value="Inteligencia" style="color: black;">Inteligencia</option>
                                        <option value="Sabedoria" style="color: black;">Sabedoria</option>
                                        <option value="Carisma" style="color: black;">Carisma</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row row-cols-1 row-cols-md-2">
                        <!-- ATAQUE BONUS -->
                        <div class="col mb-3 mb-md-0">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="ataque_bonus">
                                    Ataque Bônus:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="number" name='ataque_bonus' style="color: white;">
                                </div>
                            </div>
                        </div>

                        <!-- DANO BONUS -->
                        <div class="col mb-3 mb-md-0">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="dano_bonus">
                                    Dano Bônus:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="number" name='dano_bonus' style="color: white;">
                                </div>
                            </div>
                        </div>

                        <!-- DANO -->
                        <div class="col mb-3 mb-md-0">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="dano">
                                    Dano:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='dano' style="color: white;">
                                </div>
                            </div>
                        </div>

                        <!-- CRITICO -->
                        <div class="col">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="critico">
                                    Crítico:
                                </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name='critico' style="color: white;">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Criar" class="btn btn-primary" form="armaForm">
            </div>
        </div>
    </div>
</div>