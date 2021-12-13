<div class="col">
    <div class='p-3 m-2 {{ strtolower(strtok($ficha->nome, ' ')) . 'Fundo' }}'>
        <div class="text-center">
            <!-- FOTO -->
            <div class="row">
                <!-- PERSONAGEM -->
                <picture class="col-6" data-bs-toggle="modal" data-bs-target="#personagemModal">
                    <source height="250px" width="250px" media='(min-width: 1250px)' srcset={{ $ficha->imagem_personagem }}>
                    <img height="125px" width="125px" src={{ $ficha->imagem_personagem }} class='img-fluid img-thumbnail rounded-circle mb-4' alt='FotoPersonagem'>
                </picture>

                <!-- PET -->
                <picture class="col-6" data-bs-toggle="modal" data-bs-target="#petModal">
                    <source height="250px" width="250px" media='(min-width: 1250px)' class="grande" srcset={{ $ficha->imagem_pet }}>
                    <img height="125px" width="125px" src={{ $ficha->imagem_pet }} class='img-fluid img-thumbnail rounded-circle mb-4' alt='FotoPersonagem'>
                </picture>
            </div>

            <!-- VIDA -->
            <div data-bs-toggle="modal" data-bs-target="#vidaModal">
                <div class="row mb-1">
                    <div class="col d-flex text-start ms-1">
                        <p>VIDA</p>
                        <ion-icon name="create-outline" size="small" class="ms-1"></ion-icon>
                    </div>
                    <p class="col text-end ">
                        {{ $ficha->vida_atual . "/" . $ficha->vida_max }}
                    </p>
                </div>
                <div class="progress" style="height: 25px;" id="vidaFundo">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: {{ ($ficha->vida_atual / $ficha->vida_max) * 100 }}%;" aria-valuenow={{ $ficha->vida_atual }} aria-valuemin="0" aria-valuemax={{ $ficha->vida_max }}></div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-2 mb-3">
                <div class="text-start d-flex">
                    <form action="/ficha/{{ $ficha->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="number" name="vida_atual" hidden value={{ $ficha->vida_atual - 1 }}>
                        <input type="submit" value="-1" class="bg-transparent border border-1 border-light rounded">
                    </form>
                    <form action="/ficha/{{ $ficha->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="number" name="vida_atual" hidden value={{ $ficha->vida_atual - 10 }}>
                        <input type="submit" value="-10" class="bg-transparent border border-1 border-light rounded ms-2">
                    </form>
                </div>
                <div class="text-end d-flex">
                    <form action="/ficha/{{ $ficha->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="number" name="vida_atual" hidden value={{ $ficha->vida_atual + 10 }}>
                        <input type="submit" value="+10" class="bg-transparent border border-1 border-light rounded">
                    </form>
                    <form action="/ficha/{{ $ficha->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="number" name="vida_atual" hidden value={{ $ficha->vida_atual + 1 }}>
                        <input type="submit" value="+1" class="bg-transparent border border-1 border-light rounded ms-2">
                    </form>
                </div>
            </div>

            <!-- MANA -->
            <div data-bs-toggle="modal" data-bs-target="#manaModal">
                <div class="row mb-1">
                    <div class="col d-flex text-start ms-1">
                        <p>MANA</p>
                        <ion-icon name="create-outline" size="small" class="ms-1"></ion-icon>
                    </div>
                    <p class="col text-end ">
                        {{ $ficha->mana_atual . "/" . $ficha->mana_max }}
                    </p>
                </div>
                <div class="progress" style="height: 25px;" id="manaFundo">
                    <div class="progress-bar bg-info" role="progressbar" style="width: {{ ($ficha->mana_atual / $ficha->mana_max) * 100 }}%;" aria-valuenow={{ $ficha->mana_atual }} aria-valuemin="0" aria-valuemax={{ $ficha->mana_max }}></div>
                </div>
            </div>
            <div class="d-flex justify-content-between mt-2">
                <div class="text-start d-flex">
                    <form action="/ficha/{{ $ficha->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="number" name="mana_atual" hidden value={{ $ficha->mana_atual - 1 }}>
                        <input type="submit" value="-1" class="bg-transparent border border-1 border-light rounded">
                    </form>
                    <form action="/ficha/{{ $ficha->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="number" name="mana_atual" hidden value={{ $ficha->mana_atual - 10 }}>
                        <input type="submit" value="-10" class="bg-transparent border border-1 border-light rounded ms-2">
                    </form>
                </div>
                <div class="text-end d-flex">
                    <form action="/ficha/{{ $ficha->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="number" name="mana_atual" hidden value={{ $ficha->mana_atual + 10 }}>
                        <input type="submit" value="+10" class="bg-transparent border border-1 border-light rounded">
                    </form>
                    <form action="/ficha/{{ $ficha->id }}" method="POST">
                        @csrf
                        @method('PUT')
                        <input type="number" name="mana_atual" hidden value={{ $ficha->mana_atual + 1 }}>
                        <input type="submit" value="+1" class="bg-transparent border border-1 border-light rounded ms-2">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>