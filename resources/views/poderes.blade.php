<div class="col">
    <div class='p-3 m-2 padraoFundo overflow-auto text-start' id="overflowPoderes">
        <div class="d-flex justify-content-center p-3 mb-0" data-bs-toggle="modal" data-bs-target="#poderesModal">
            <h2 class="fs-2 mb-0">Poderes</h2>
            <ion-icon name="add-outline" size="large"></ion-icon>
        </div>
        @php
        $poderes = ['Raca', 'Classe', 'Origem', 'Deus'];
        @endphp

        @foreach ($poderes as $p)
        <h2 class="fs-4 mt-3">{{ $p }}</h2>
        <div class="accordion" id={{ $p . 'Accordion' }}>
            @foreach ($ficha->poder()->get() as $poder)
            @if ($poder->tipo == $p)
            <div class="accordion-item bg-transparent border-white">
                <h2 class="accordion-header d-flex p-3 justify-content-between" id={{ $poder->nome }}>
                    <div class="d-flex" data-bs-toggle="modal" data-bs-target={{ '#' . str_replace(" ", "", $poder->nome) . 'Modal' }}>
                        <p class="fs-5">{{ $poder->nome }}</p>
                        <ion-icon class="ms-1" name="create-outline" size="small"></ion-icon>
                    </div>
                    <ion-icon name="chevron-down-outline" size="small" data-bs-toggle="collapse" data-bs-target={{ '#' . $poder->nome . 'Collapse' }} aria-expanded="false" aria-controls={{ $poder->nome . 'Collapse' }}></ion-icon>
                </h2>
                <div id={{ $poder->nome . 'Collapse' }} class="accordion-collapse collapse" aria-labelledby={{ $poder->nome }} data-bs-parent={{ '#' . $p . 'Accordion' }}>
                    <div class="accordion-body">
                        @php
                        $paragrafos = strtok($poder->descricao, "\n");

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
