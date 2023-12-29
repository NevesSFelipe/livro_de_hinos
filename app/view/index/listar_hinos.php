<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Hinos de Louvor</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= URL_BASE ?>/assets/css/index.css">
    </head>
    <body class="bg-dark text-light">

        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Louvores
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Cantor Cristão</a>
                        </div>
                    </li>
                </ul>
                <div class="modo_escuro">
                    <span id="texto_modo_escuro">Modo Escuro</span>
                    <label class="switch">
                        <input onclick="mudar_modo_tela()" id="input_dark_mode" type="checkbox">
                        <span class="slider"></span>
                    </label>
                </div>
            </div>
        </nav>

        <div class="container mt-3 text-center">

            <div id="titulo" style="display: flex; justify-content: center; align-items: center;">
                <h1 style="display: inline-block"; id="titulo_hino"></h1>       
                <img class="icone-tamanho-fonte" onclick="aumentar_tamanho_fonte()" title="Aumentar Fonte do Hino" src="<?= URL_BASE ?>/assets/img/a_mais.png" style="cursor: pointer; width: 25px;" alt="">
                <img class="icone-tamanho-fonte" onclick="diminuir_tamanho_fonte()" title="Diminuir Fonte do Hino" src="<?= URL_BASE ?>/assets/img/a_menos.png" style="cursor: pointer; width: 25px;" alt="">
            </div>

            <input onkeyup="listar_hinos()" id="pesquisar_hino" class="form-control w-100 mb-3" type="text" placeholder="Pesquisa o hino por número do hino, titulo ou letra">
            
            <div class="accordion" id="dropdown_hinos">
                <!-- itens listados dinamicamentes pela função listar_hinos -->
            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="<?= URL_BASE ?>/assets/js/listar_hinos.js"></script>
        <script src="<?= URL_BASE ?>/assets/js/main.js"></script>
    </body>
</html>
