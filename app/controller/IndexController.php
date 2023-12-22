<?php

    namespace app\controller;

    use app\classes\Controller;
    use app\model\IndexModel;

    class IndexController extends Controller {

        public function index(): void
        {            
            $this->carregarView("index/index");
        }

        public function listar_hinos(string $grupo_hino)
        {
            $dados['nome_grupo'] = strtoupper(str_replace("_", " ", $grupo_hino));

            $model = new IndexModel;
            $dados['hinos'] = $model->listar_hinos($grupo_hino);

            $this->carregarView("index/listar_hinos", $dados);
        }


    }