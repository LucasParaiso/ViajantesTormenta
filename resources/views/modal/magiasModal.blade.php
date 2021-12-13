<!-- MAGIAS POST -->
<div class="modal fade" id="magiasModal" tabindex="-1" aria-labelledby="magiasModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="magiasModalLabel">Nova Magia</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/magia/{{ $ficha->id }}" method="POST" id="magiaForm">
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

                        <!-- CIRCULO -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="circulo">
                                    Círculo:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='circulo'>
                                        <option value="1º Circulo" style="color: black;">1º Circulo</option>
                                        <option value="2º Circulo" style="color: black;">2º Circulo</option>
                                        <option value="3º Circulo" style="color: black;">3º Circulo</option>
                                        <option value="4º Circulo" style="color: black;">4º Circulo</option>
                                        <option value="5º Circulo" style="color: black;">5º Circulo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- EXECUCAO -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="execucao">
                                    Execucao:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='execucao'>
                                        <option value="Livre" style="color: black;">Livre</option>
                                        <option value="Padrao" style="color: black;">Padrao</option>
                                        <option value="Movimento" style="color: black;">Movimento</option>
                                        <option value="Completa" style="color: black;">Completa</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- ALCANCE -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="alcance">
                                    Alcance:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='alcance'>
                                        <option value="Pessoal" style="color: black;">Pessoal</option>
                                        <option value="Toque" style="color: black;">Toque</option>
                                        <option value="Curto" style="color: black;">Curto</option>
                                        <option value="Medio" style="color: black;">Medio</option>
                                        <option value="Longo" style="color: black;">Longo</option>
                                        <option value="Ilimitado" style="color: black;">Ilimitado</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- ALVO -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="alvo">
                                    Alvo:
                                </label>
                                <div class="col col-md-9">
                                    <input class="form-control bg-transparent text-center" type="text" name='alvo' style="color: white;">
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- AREA -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="area">
                                    Área:
                                </label>
                                <div class="col col-md-9">
                                    <input class="form-control bg-transparent text-center" type="text" name='area' style="color: white;">
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- DURACAO -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="duracao">
                                    Duração:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='duracao'>
                                        <option value="Instantanea" style="color: black;">Instantanea</option>
                                        <option value="Cena" style="color: black;">Cena</option>
                                        <option value="Sustentada" style="color: black;">Sustentada</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- RESISTENCIA -->
                        <div class="col-12 mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="resistencia">
                                    Resistência:
                                </label>
                                <div class="col col-md-9">
                                    <input class="form-control bg-transparent text-center" type="text" name='resistencia' style="color: white;">
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
                <input type="submit" value="Nova" class="btn btn-primary" form="magiaForm">
            </div>
        </div>
    </div>
</div>

<!-- MAGIAS UPDATE -->
@foreach($ficha->magia()->get() as $magia)
<div class="modal fade" id={{ str_replace(" ", "", $magia->nome) . 'Modal'}} tabindex="-1" aria-labelledby={{ $magia->nome . 'ModalLabel'}} aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id={{ $magia->nome . 'ModalLabel'}}>{{ $magia->nome }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/magia/{{ $ficha->id }}/{{ $magia->id }}" method="POST" id={{ str_replace(" ", "", $magia->nome) . 'ModalForm'}}>
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
                                    <input required class="form-control bg-transparent text-center" type="text" name='nome' style="color: white;" id={{ $magia->nome . 'Nome'}} value="{{ $magia->nome }}">
                                </div>
                            </div>
                        </div>

                        <!-- CIRCULO -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="circulo">
                                    Círculo:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='circulo'>
                                        <option value="1º Circulo" style="color: black;">1º Circulo</option>
                                        <option value="2º Circulo" style="color: black;"
                                        @if ($magia->circulo == '2º Circulo')
                                        selected
                                        @endif
                                        >2º Circulo</option>
                                        <option value="3º Circulo" style="color: black;"
                                        @if ($magia->circulo == '3º Circulo')
                                        selected
                                        @endif
                                        >3º Circulo</option>
                                        <option value="4º Circulo" style="color: black;"
                                        @if ($magia->circulo == '4º Circulo')
                                        selected
                                        @endif
                                        >4º Circulo</option>
                                        <option value="5º Circulo" style="color: black;"
                                        @if ($magia->circulo == '5º Circulo')
                                        selected
                                        @endif
                                        >5º Circulo</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- EXECUCAO -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="execucao">
                                    Execucao:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='execucao'>
                                        <option value="Livre" style="color: black;">Livre</option>
                                        <option value="Padrao" style="color: black;"
                                        @if ($magia->execucao == 'Padrao')
                                        selected
                                        @endif
                                        >Padrao</option>
                                        <option value="Movimento" style="color: black;"
                                        @if ($magia->execucao == 'Movimento')
                                        selected
                                        @endif
                                        >Movimento</option>
                                        <option value="Completa" style="color: black;"
                                        @if ($magia->execucao == 'Completa')
                                        selected
                                        @endif
                                        >Completa</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- ALCANCE -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="alcance">
                                    Alcance:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='alcance'>
                                        <option value="Pessoal" style="color: black;">Pessoal</option>
                                        <option value="Toque" style="color: black;"
                                        @if ($magia->alcance == 'Toque')
                                        selected
                                        @endif
                                        >Toque</option>
                                        <option value="Curto" style="color: black;"
                                        @if ($magia->alcance == 'Curto')
                                        selected
                                        @endif
                                        >Curto</option>
                                        <option value="Medio" style="color: black;"
                                        @if ($magia->alcance == 'Medio')
                                        selected
                                        @endif
                                        >Medio</option>
                                        <option value="Longo" style="color: black;"
                                        @if ($magia->alcance == 'Longo')
                                        selected
                                        @endif
                                        >Longo</option>
                                        <option value="Ilimitado" style="color: black;"
                                        @if ($magia->alcance == 'Ilimitado')
                                        selected
                                        @endif
                                        >Ilimitado</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- ALVO -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="alvo">
                                    Alvo:
                                </label>
                                <div class="col col-md-9">
                                    <input class="form-control bg-transparent text-center" type="text" name='alvo' style="color: white;" id={{ $magia->alvo . 'Alvo'}} value="{{ $magia->alvo }}">
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- AREA -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="area">
                                    Área:
                                </label>
                                <div class="col col-md-9">
                                    <input class="form-control bg-transparent text-center" type="text" name='area' style="color: white;" id={{ $magia->area . 'Area'}} value="{{ $magia->area }}">
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- DURACAO -->
                        <div class="col-12 mb-4">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="duracao">
                                    Duração:
                                </label>
                                <div class="col col-md-9">
                                    <select class="col form-select bg-transparent text-center" style="color: white;" name='duracao'>
                                        <option value="Instantanea" style="color: black;">Instantanea</option>
                                        <option value="Cena" style="color: black;"
                                        @if ($magia->duracao == 'Cena')
                                        selected
                                        @endif
                                        >Cena</option>
                                        <option value="Sustentada" style="color: black;"
                                        @if ($magia->duracao == 'Sustentada')
                                        selected
                                        @endif
                                        >Sustentada</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <!-- RESISTENCIA -->
                        <div class="col-12 mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="resistencia">
                                    Resistência:
                                </label>
                                <div class="col col-md-9">
                                    <input class="form-control bg-transparent text-center" type="text" name='resistencia' style="color: white;" id={{ $magia->resistencia . 'Resistencia'}} value="{{ $magia->resistencia }}">
                                </div>
                            </div>
                        </div>

                        <!-- DESCRICAO -->
                        <div class="col-12 text-start">
                            <label class="mb-2" for="descricao">Descrição:</label>
                            <textarea class="form-control bg-transparent" style="color: white;" name="descricao" rows="10">{{ $magia->descricao }}</textarea>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer justify-content-between">
                <form action="/ficha/magia/{{ $ficha->id }}/{{ $magia->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Excluir" class="btn btn-danger">
                </form>
                <input type="submit" value="Salvar" class="btn btn-primary" form={{ str_replace(" ", "", $magia->nome) . 'ModalForm'}}>
            </div>
        </div>
    </div>
</div>
@endforeach