<?php

    namespace app\controller;

    use app\classes\Controller;
    use app\model\IndexModel;

    class IndexController extends Controller {

        public function index(): void
        {            
            $this->carregarView("index/index");
        }

        public function listar_hinos(): void
        {
            $this->carregarView("index/listar_hinos");
        }

        public function retornar_lista_hinos_js(string $grupo_hino)
        {
            $dados['nome_grupo'] = strtoupper(str_replace("_", " ", $grupo_hino));

            $model = new IndexModel;
            $dados['hinos'] = $model->listar_hinos($grupo_hino);

            $retornoJS = [
                "status" => 200,
                "msgs" => ["nome_grupo" => $dados["nome_grupo"], "hinos" => $dados["hinos"]]
            ];

            print_r(json_encode($retornoJS));
        }

    }