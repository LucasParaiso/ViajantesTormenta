<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Favicon -->
    <link rel="shortcut icon" href="/img/favicon.jpg" type="image/x-icon">

    <!-- CSS -->
    <link rel="stylesheet" href="/css/style.css">

    <!-- Title -->
    <title>Viajantes da Tormenta</title>
</head>

<body class="text-center bodyPadrao">
    <h1 class="my-4">Viajantes da Tormenta</h1>

    <!-- TODAS AS FICHAS -->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-4 padraoFundo p-3 m-3 justify-content-center">
            @foreach ($fichas as $ficha)
            <div class="col mb-4">
                <div class="card bg-dark border-1 border-light">
                    <img src={{ $ficha->imagem_personagem }} class="card-img-top" alt={{ $ficha->nome }}>
                    <div class="card-body">
                        <a href={{ "/ficha/" . $ficha->id }} class="btn btn-primary mb-3">{{ $ficha->nome }}</a>

                        <form action="/ficha/{{ $ficha->id }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger delete-btn">
                                <ion-icon name="trash-outline"></ion-icon>Deletar
                            </button>
                        </form>
                    </div>
                </div>
            </div>
            @endforeach
            <div class="col align-self-center">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#criarFicha">Criar Nova Ficha</button>
            </div>

            <!-- Modal -->
            <div class="modal fade" id="criarFicha" tabindex="-1" aria-labelledby="criarFichaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content bg-dark">
                        <div class="modal-header">
                            <h5 class="modal-title" id="criarFichaLabel">Nova Ficha</h5>
                            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <form action="/ficha/criar" method="POST" class="container">
                            <div class="modal-body text-start">
                                @csrf
                                <!-- NOME -->
                                <label for="nome" class="mb-1 fs-5">Nome do Personagem</label>
                                <input type="text" name="nome" class="form-control mb-3" required value="Bellatora Santana">

                                <!-- NIVEL -->
                                <label for="nome" class="mb-1 fs-5">Nível</label>
                                <input type="number" name="nivel" class="form-control mb-3" required value="11">

                                <!-- FOTO PERSONAGEM GRANDE -->
                                <label for="imagem_personagem" class="mb-1 fs-5">Link da Foto do Personagem</label>
                                <input type="text" name="imagem_personagem" class="form-control mb-3" required value="https://cdn.discordapp.com/attachments/763432460570329150/918382454937628682/Bellatora250px.jpg">

                                <!-- FOTO PET GRANDE -->
                                <label for="imagem_pet" class="mb-1 fs-5">Link da Foto do Pet</label>
                                <input type="text" name="imagem_pet" class="form-control mb-3" required value="https://cdn.discordapp.com/attachments/763432460570329150/918382455516430436/Mel250px.jpg">
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                                <input type="submit" value="Criar Nova Ficha" class="btn btn-primary">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>