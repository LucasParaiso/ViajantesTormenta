<div class="col">
    <div class='p-2 m-2 {{ strtolower(strtok($ficha->nome, ' ')) . 'Fundo' }}'>
        <!-- ARMAS -->
        <table class="table mb-4">
            <div class="d-flex" data-bs-toggle="modal" data-bs-target="#armaModal">
                <p>Armas</p>
                <ion-icon name="add-outline" size="small"></ion-icon>
            </div>

            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Ataque</th>
                    <th scope="col">Dano</th>
                    <th scope="col">Crítico</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ficha->arma()->get() as $arma)
                <tr>
                    <td>
                        <div class="col d-flex justify-content-center" data-bs-toggle="modal" data-bs-target={{ '#' . $arma->nome . 'Modal'}}>
                            <p>{{ $arma->nome }}</p>
                            <ion-icon class="ms-1" name="create-outline" size="small"></ion-icon>
                        </div>
                    </td>
                    <td>
                        <div class="col">
                            @php

                            foreach($ficha->pericia()->get() as $pericia) {
                                if ($pericia->nome == $arma->pericia) {
                                    $atributo = $arma->atributo;
                                    $treinado = $pericia->treinado;
                                    $bonus = $pericia->bonus;
                                }
                            }

                            foreach($ficha->atributo()->get() as $atri) {
                                if ($atributo == $atri->nome) {
                                    if ($atri->valor < 10) {
                                        $mod = '-' . ceil((10 - $atri->valor) / 2);
                                    } else {
                                        $mod = '+' . floor(($atri->valor - 10) / 2);
                                    }
                                }
                            }

                            $resultado = floor($ficha->nivel / 2) + $mod + $bonus + $arma->ataque_bonus;

                            if ($treinado) {
                                if ($ficha->nivel >= 15) {
                                    $resultado += 6;
                                } else if ($ficha->nivel >= 7) {
                                    $resultado += 4;
                                } else {
                                    $resultado += 2;
                                }
                            }
                            
                            if ($resultado >= 0) {
                                echo '+' . $resultado;
                            } else {
                                echo $resultado;
                            }
                            @endphp    
                        </div>
                    </td>
                    <td>
                        <div class="col">
                            @php
                            foreach($ficha->atributo()->get() as $atri) {
                                if ($arma->atributo == $atri->nome) {
                                    if ($atri->valor < 10) {
                                        $mod = '-' . ceil((10 - $atri->valor) / 2);
                                    } else {
                                        $mod = '+' . floor(($atri->valor - 10) / 2);
                                    }
                                }
                            }

                            $dano_bonus = $arma->dano_bonus + $mod;

                            if ($dano_bonus >=0) {
                                echo $arma->dano . "+" . ($arma->dano_bonus + $mod);
                            } else {
                                echo $arma->dano . ($arma->dano_bonus + $mod);
                            }
                            @endphp
                        </div>
                    </td>
                    <td>
                        <div class="col">
                            <p>{{ $arma->critico }}</p>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>

        <!-- ARMADURAS -->
        <table class="table">
            <div class="d-flex" data-bs-toggle="modal" data-bs-target="#armaduraModal">
                <p>Armaduras</p>
                <ion-icon name="add-outline" size="small"></ion-icon>
            </div>

            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Defesa</th>
                    <th scope="col">Penalidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ficha->armadura()->get() as $armadura)
                <tr>
                    <td>
                        <div class="col d-flex justify-content-center" data-bs-toggle="modal" data-bs-target={{ '#' .$armadura->nome . 'Modal'}}>
                            <p>{{ $armadura->nome }}</p>
                            <ion-icon class="ms-1" name="create-outline" size="small"></ion-icon>
                        </div>
                    </td>
                    <td>
                        <div class="col">
                            <p>{{ '+' . $armadura->defesa }}</p>
                        </div>
                    </td>
                    <td>
                        <div class="col">
                            @if ($armadura->penalidade != 0) 
                            <p>{{ '-' . $armadura->penalidade }}</p>
                            @else
                            <p>{{ $armadura->penalidade }}</p>
                            @endif
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>