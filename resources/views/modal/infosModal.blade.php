<!-- MODAL -->
<div class="modal fade" id="infosModal" tabindex="-1" aria-labelledby="infosModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content bg-dark">
            <div class="modal-header">
                <h5 class="modal-title" id="infosModalLabel">Informações</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-start">
                <form action="/ficha/{{ $ficha->id }}" method="POST" id="infosModalForm">
                    @csrf
                    @method('PUT')
                    <div class="row row-cols-1 row-cols-md-2">
                        <!-- RACA -->
                        <div class="col mt-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="raca">Raça: </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name="raca" style="color: white;" value={{ $ficha->raca }}>
                                </div>
                            </div>
                        </div>

                        <!-- CLASSE -->
                        <div class="col mt-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="classe">Classe: </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name="classe" style="color: white;" value={{ $ficha->classe }}>
                                </div>
                            </div>
                        </div>

                        <!-- ORIGEM -->
                        <div class="col mt-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="origem">Origem: </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name="origem" style="color: white;" value={{ $ficha->origem }}>
                                </div>
                            </div>
                        </div>

                        <!-- DEUS -->
                        <div class="col mt-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="deus">Deus: </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name="deus" style="color: white;" value={{ $ficha->deus }}>
                                </div>
                            </div>
                        </div>

                        <!-- NIVEL -->
                        <div class="col mt-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="nivel">Nível: </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="number" name="nivel" min="0" style="color: white;" value={{ $ficha->nivel }}>
                                </div>
                            </div>
                        </div>

                        <!-- DEFESA -->
                        <div class="col mt-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="defesa">Defesa: </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="number" name="defesa" min="0" style="color: white;" value={{ $ficha->defesa }}>
                                </div>
                            </div>
                        </div>

                        <!-- DESLOCAMENTO -->
                        <div class="col mt-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="deslocamento">Desloca.: </label>
                                <div class="col">
                                    <input required class="form-control bg-transparent text-center" type="text" name="deslocamento" style="color: white;" value="{{ $ficha->deslocamento }}">
                                </div>
                            </div>
                        </div>

                        <!-- RD -->
                        <div class="col mt-3">
                            <div class="row justify-content-between">
                                <label class="col col-form-label" for="rd">RD: </label>
                                <div class="col">
                                    <input required class="col form-control bg-transparent text-center" type="number" name="rd" min="0" style="color: white;" value={{ $ficha->rd }}>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <input type="submit" value="Atualizar Informações" class="btn btn-primary" form="infosModalForm">
            </div>
        </div>
    </div>
</div>