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

<body class="text-center {{ strtolower(strtok($ficha->nome, ' ')) . 'Body' }}">
    <h1 class='my-5 display-1'><strong>{{ $ficha->nome }}</strong></h1>

    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
            @include('vida')
            @include('modal/vidaModal')
            @include('infos')
            @include('modal/infosModal')
            @include('atributos')
            @include('modal/atributosModal')
            @include('pericias')
            @include('modal/periciasModal')
            @include('armasArmaduras')
            @include('modal/armasArmadurasModal')
            @include('itens')
            @include('modal/itensModal')
            @include('poderes')
            @include('modal/poderesModal')
            @include('magias')
            @include('modal/magiasModal')
        </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>

</html>