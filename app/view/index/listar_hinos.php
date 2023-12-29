<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Hinos de Louvor</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
    </head>
    <body>

        <div class="container mt-3 text-center">

            <div id="titulo" style="display: flex; justify-content: center; align-items: center;">
                <h1 style="display: inline-block"; id="titulo_hino"></h1>       
                <img onclick="aumentar_tamanho_fonte()" title="Aumentar Fonte do Hino" src="<?= URL_BASE ?>/assets/img/a_mais.png" style="cursor: pointer; width: 25px;" alt="">
                <img onclick="diminuir_tamanho_fonte()" title="Diminuir Fonte do Hino" src="<?= URL_BASE ?>/assets/img/a_menos.png" style="cursor: pointer; width: 25px;" alt="">
            </div>

            <input onkeyup="listar_hinos()" id="pesquisar_hino" class="form-control w-100 mb-3" type="text" placeholder="Pesquisa o hino por número do hino, titulo ou letra">
            
            <div class="accordion" id="dropdown_hinos">
                <!-- itens listados dinamicamentes pela função listar_hinos -->
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/910e6444fa.js"></script>
        <script src="<?= URL_BASE ?>/assets/js/listar_hinos.js"></script>
    </body>
</html>
