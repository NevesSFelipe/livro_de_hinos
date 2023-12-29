<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Hinos de Louvor</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" />
        <link rel="stylesheet" href="<?= URL_BASE ?>/assets/css/index.css">
    </head>
    <body>

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
            <h1>CANTICOS DE LOUVOR</h1>

            <div class="mt-3 mb-3">
                <button onclick="listar_hinos(this)" class="btn btn-light border-dark w-50" name="cantor_cristao">Cantor Cristão</button>
            </div>

            <p>
                Deus é a minha força e o meu cântico, e se tornou a minha salvação. <br />
                Isaías 12:2b
            </p>
        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="<?= URL_BASE ?>/assets/js/main.js"></script>
        <script src="<?= URL_BASE ?>/assets/js/index.js"></script>
    </body>
</html>