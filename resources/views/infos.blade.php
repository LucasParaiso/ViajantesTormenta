<div class="col">
    <div class='p-3 m-2 {{ strtolower(strtok($ficha->nome, ' ')) . 'Fundo' }}'>
        <!-- TITULO -->
        <div class="d-flex justify-content-center">
            <h2 class="fs-2">Informações</h2>
            <ion-icon class="ms-2" name="create-outline" size="large" data-bs-toggle="modal" data-bs-target="#infosModal" style="cursor: pointer;"></ion-icon>
        </div>

        <!-- INFORMACOES -->
        <div class="row row-cols-1 row-cols-md-2">
            <!-- RACA -->
            <div class="col mt-3">
                <div class="row">
                    <div class="col align-self-center">Raça:</div>
                    <div class="col border border-light rounded p-2 me-3">{{ $ficha->raca }}</div>
                </div>
            </div>

            <!-- CLASSE -->
            <div class="col mt-3">
                <div class="row">
                    <div class="col align-self-center">Classe:</div>
                    <div class="col border border-light rounded p-2 me-3">{{ $ficha->classe }}</div>
                </div>
            </div>

            <!-- ORIGEM -->
            <div class="col mt-3">
                <div class="row">
                    <div class="col align-self-center">Origem:</div>
                    <div class="col border border-light rounded p-2 me-3">{{ $ficha->origem }}</div>
                </div>
            </div>

            <!-- DEUS -->
            <div class="col mt-3">
                <div class="row">
                    <div class="col align-self-center">Deus:</div>
                    <div class="col border border-light rounded p-2 me-3">{{ $ficha->deus }}</div>
                </div>
            </div>

            <!-- NIVEL -->
            <div class="col mt-3">
                <div class="row">
                    <div class="col align-self-center">Nível:</div>
                    <div class="col border border-light rounded p-2 me-3">{{ $ficha->nivel }}</div>
                </div>
            </div>

            <!-- DEFESA -->
            <div class="col mt-3">
                <div class="row">
                    <div class="col align-self-center">Defesa:</div>
                    <div class="col border border-light rounded p-2 me-3">
                        @php
                        foreach ($ficha->atributo()->get() as $atributo) {
                            if ($atributo->nome == 'Destreza') {
                                if ($atributo->valor < 10) {
                                    $resultado = '-' . ceil((10 - $atributo->valor) / 2);
                                } else {
                                    $resultado = floor(($atributo->valor - 10) / 2);
                                }
                            }
                        }

                        $defesaArmadura = 0;
                        foreach ($ficha->armadura()->get() as $armadura) {
                            $defesaArmadura += $armadura->defesa;
                        }

                        $resultado += $ficha->defesa;
                        $resultado += $defesaArmadura;
                        $resultado += 10;
                        echo $resultado;
                        @endphp
                    </div>
                </div>
            </div>

            <!-- DESLOCAMENTO -->
            <div class="col mt-3">
                <div class="row">
                    <div class="col align-self-center">Desloca.:</div>
                    <div class="col border border-light rounded p-2 me-3">{{ $ficha->deslocamento }}</div>
                </div>
            </div>

            <!-- RD -->
            <div class="col mt-3">
                <div class="row">
                    <div class="col align-self-center">RD:</div>
                    <div class="col border border-light rounded p-2 me-3">{{ $ficha->rd }}</div>
                </div>
            </div>
        </div>
    </div>
</div>