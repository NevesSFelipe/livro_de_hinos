<?php

    namespace app\classes;

    class Controller {

        protected function carregarView(string $nomeView, array $valoresView = []): void
        {
            extract($valoresView);
            include "app/view/{$nomeView}.php";
        }

    }