<div class="col">
    <div class='p-2 m-2 {{ strtolower(strtok($ficha->nome, ' ')) . 'Fundo' }} overflow-auto' id="overflowPericias">
        <table class="table table-striped table-borderless">
            <thead>
                <tr>
                    <th scope="col"></th>
                    <th scope="col">Nome</th>
                    <th scope="col">Mod</th>
                    <th scope="col">Bônus</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ficha->pericia()->get()->sort() as $pericia)
                <tr>
                    <th scope="row">
                        <input class="form-check-input" type="checkbox" disabled
                        @if ($pericia->treinado)
                        checked
                        @endif
                        >
                    </th>
                    <td>
                        <div class="d-flex justify-content-center" data-bs-toggle="modal" data-bs-target={{ '#'. $pericia->nome . 'Modal' }} style="cursor: pointer;">
                            <p>{{ $pericia->nome }}</p>
                            <ion-icon class="ms-2" name="create-outline" size="small"></ion-icon>
                        </div>
                    <td>
                        @php
                        foreach($ficha->atributo()->get() as $atributo) {
                            if ($atributo->valor < 10) {
                                $mod[$atributo->nome] = '-' . ceil((10 - $atributo->valor) / 2);
                            } else {
                                $mod[$atributo->nome] = '+' . floor(($atributo->valor - 10) / 2);
                            }
                        }
                        $resultado = floor($ficha->nivel / 2) + $mod[$pericia->atributo] + $pericia->bonus;
                        if ($pericia->treinado == true) {
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
                    </td>
                    <td>{{ $pericia->bonus }}</td>
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</div>