<!-- VIDA MODAL -->
<div class="modal fade" id="vidaModal" tabindex="-1" aria-labelledby="vidaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="vidaModalLabel">Atualizar Vida</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/{{ $ficha->id }}" method="POST" id="vidaModalForm">
                    @csrf
                    @method('PUT')
                    <div class="row row-cols-1 text-start">
                        <!-- VIDA ATUAL -->
                        <div class="col mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="vida_atual">Vida Atual: </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name="vida_atual" style="color: white;" value={{ $ficha->vida_atual }}>
                                </div>
                            </div>
                        </div>

                        <!-- VIDA MAXIMA -->
                        <div class="col">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="vida_max">Vida Máxima: </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name="vida_max" style="color: white;" value={{ $ficha->vida_max }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Atualizar Vida" class="btn btn-primary" form="vidaModalForm">
            </div>
        </div>
    </div>
</div>

<!-- MANA MODAL -->
<div class="modal fade" id="manaModal" tabindex="-1" aria-labelledby="manaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="manaModalLabel">Atualizar Mana</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="/ficha/{{ $ficha->id }}" method="POST" id="manaModalForm">
                    @csrf
                    @method('PUT')
                    <div class="row row-cols-1 text-start">
                        <!-- MANA ATUAL -->
                        <div class="col mb-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="mana_atual">Mana Atual: </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name="mana_atual" style="color: white;" value={{ $ficha->mana_atual }}>
                                </div>
                            </div>
                        </div>

                        <!-- MANA MAXIMA -->
                        <div class="col">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="mana_max">Mana Máxima: </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name="mana_max" style="color: white;" value={{ $ficha->mana_max }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Atualizar Mana" class="btn btn-primary" form="manaModalForm">
            </div>
        </div>
    </div>
</div>

<!-- PERSONAGEM MODAL -->
<div class="modal fade" id="personagemModal" tabindex="-1" aria-labelledby="personagemModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="personagemModalLabel">Foto de {{ $ficha->nome }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <form action="/ficha/{{ $ficha->id }}" method="POST" id="personagemModalForm">
                    @csrf
                    @method('PUT')
                    <!-- FOTO PERSONAGEM -->
                    <label for="imagem_personagem" class="mb-1 fs-5">Link</label>
                    <input required type="text" name="imagem_personagem" class="form-control mb-3 bg-transparent" style="color: white;">
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Atualizar Foto" class="btn btn-primary" form="personagemModalForm">
            </div>
        </div>
    </div>
</div>

<!-- PET MODAL -->
<div class="modal fade" id="petModal" tabindex="-1" aria-labelledby="petModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="petModalLabel">Foto do Pet de {{ $ficha->nome }}</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <form action="/ficha/{{ $ficha->id }}" method="POST" id="petModalForm">
                    @csrf
                    @method('PUT')
                    <!-- FOTO PET -->
                    <label for="imagem_pet" class="mb-1 fs-5">Link</label>
                    <input required type="text" name="imagem_pet" class="form-control mb-3 bg-transparent" style="color: white;">
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Atualizar Foto" class="btn btn-primary" form="petModalForm">
            </div>
        </div>
    </div>
</div>