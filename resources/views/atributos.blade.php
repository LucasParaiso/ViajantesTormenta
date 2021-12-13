<div class="col">
    <div class='p-1 m-2 {{ strtolower(strtok($ficha->nome, ' ')) . 'Fundo' }}'>
        <!-- TITULO -->
        <div class="d-flex justify-content-center p-3">
            <h2 class="fs-2">Atributos</h2>
            <ion-icon class="ms-2" name="create-outline" size="large" data-bs-toggle="modal" data-bs-target="#atributosModal" style="cursor: pointer;"></ion-icon>
        </div>
        <div class="container p-0">
            <div class="row row-cols-2 row-cols-md-3">
                @foreach($ficha->atributo()->get() as $atributo)
                <div class='col col text-center p-4 py-3 align-middle'>
                    <label>{{ $atributo->nome }}</label>
                    <p class='border-bottom border-2 fs-3'>
                        @if($atributo->valor < 10)
                            {{ '-' . ceil((10 - $atributo->valor) / 2) }}
                        @else
                            {{ '+' . floor(($atributo->valor - 10) / 2) }}
                        @endif
                    </p>
                    <p class="text-center">{{ $atributo->valor }}</p>
                </div>
                @endforeach
        </div>
    </div>
</div>
</div>