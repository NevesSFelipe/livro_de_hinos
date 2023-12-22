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

            <h1><?= $nome_grupo ?></h1>
            
            <div class="accordion" id="accordionExample">
                
                <?php foreach($hinos as $k => $v): ?>

                    <div class="card mb-3">
                        <div class="card-header bg-dark" id="heading_<?= $k ?>">
                            <h2 class="mb-0">
                                <button class="btn" type="button" data-toggle="collapse" data-target="#collapse_<?= $k ?>" aria-expanded="true" aria-controls="collapse_<?= $k ?>">
                                    <h5 class="text-info"><?= $hinos[$k]->titulo_hino ?></h5>
                                </button>
                            </h2>
                        </div>

                        <div id="collapse_<?= $k ?>" class="collapse collapsed" aria-labelledby="heading_<?= $k ?>" data-parent="#accordionExample">
                            <div class="card-body">
                                <?php 
                                    echo nl2br($hinos[$k]->letra_hino) 
                                ?>
                            </div>
                        </div>
                    </div>
                    
                <?php endforeach ?>

            </div>

        </div>

        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <script src="<?= URL_BASE ?>/assets/js/index.js"></script>
    </body>
</html>
