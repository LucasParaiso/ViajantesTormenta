<div class="col">
    <div class='p-3 m-2 {{ strtolower(strtok($ficha->nome, ' ')) . 'Fundo' }}'>

        <!-- ITENS -->
        <table class="table caption-top">
            <div class="d-flex" data-bs-toggle="modal" data-bs-target="#itemModal">
                <p>Itens</p>
                <ion-icon name="add-outline" size="small"></ion-icon>
            </div>
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Quantidade</th>
                </tr>
            </thead>
            <tbody>
                @foreach($ficha->item()->get() as $item)
                <tr>
                    <td>
                        <div class="col d-flex justify-content-center" data-bs-toggle="modal" data-bs-target={{ '#' .$item->nome . 'Modal'}}>
                            <p>{{ $item->nome }}</p>
                            <ion-icon class="ms-1" name="create-outline" size="small"></ion-icon>
                        </div>
                    </td>
                    <td>{{ $item->quantidade }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>