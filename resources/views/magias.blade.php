<div class="col">
    <div class='p-3 m-2 padraoFundo overflow-auto text-start' id="overflowMagias">
        <div class="d-flex justify-content-center p-3 mb-0" data-bs-toggle="modal" data-bs-target="#magiasModal">
            <h2 class="fs-2 mb-0">Magias</h2>
            <ion-icon name="add-outline" size="large"></ion-icon>
        </div>

        @php
        $magias = ['1º Circulo', '2º Circulo', '3º Circulo', '4º Circulo', '5º Circulo'];
        @endphp

        @foreach ($magias as $m)
        <h2 class="fs-4 mt-3">{{ $m }}</h2>
        <div class="accordion" id={{ 'accordion' . str_replace("º ", "", $m) }}>
            @foreach ($ficha->magia()->get() as $magia)
            @if ($magia->circulo == $m)
            <div class="accordion-item bg-transparent border-white">
                <h2 class="accordion-header d-flex p-3 justify-content-between" id={{ $magia->nome }}>
                    <div class="d-flex" data-bs-toggle="modal" data-bs-target={{ '#' . str_replace(" ", "", $magia->nome) . 'Modal' }}>
                        <p class="fs-5">{{ $magia->nome }}</p>
                        <ion-icon class="ms-1" name="create-outline" size="small"></ion-icon>
                    </div>
                    <ion-icon name="chevron-down-outline" size="small" data-bs-toggle="collapse" data-bs-target={{ '#' . $magia->nome . 'Collapse' }} aria-expanded="false" aria-controls={{ $magia->nome . 'Collapse' }}></ion-icon>
                </h2>
                <div id={{ $magia->nome . 'Collapse' }} class="accordion-collapse collapse" aria-labelledby={{ $magia->nome }} data-bs-parent={{ '#' . 'accordion' . str_replace("º ", "", $m) }}>
                    <div class="accordion-body">
                        @php
                        $efeitos = ['execucao', 'alcance', 'alvo', 'area', 'duracao', 'resistencia'];

                        foreach ($efeitos as $efeito) {
                            if ($magia->$efeito !== NULL) {
                                echo "<p><strong>" . ucfirst($efeito) . ": </strong>" . $magia->$efeito . "</p>";
                            }
                        }
                        echo "<br>";
                        @endphp

                        @php
                        $paragrafos = strtok($magia->descricao, "\n");

                        while ($paragrafos !== false) {
                            echo "<p>" . $paragrafos . "</p>";
                            $paragrafos = strtok("\n");
                        }

                        @endphp
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
        @endforeach
    </div>
</div>
