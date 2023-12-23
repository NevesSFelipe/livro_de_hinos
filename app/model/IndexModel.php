<?php

    namespace app\model;

    use app\classes\Model;

    class IndexModel {

        public function listar_hinos(string $grupo_hino, string $string_busca)
        {


            if($string_busca !== "1") {

                $sql = "SELECT * FROM $grupo_hino WHERE titulo_hino LIKE '%$string_busca%' OR letra_hino LIKE '%$string_busca%'";
                $model = new Model;
                return $model->buscar_registros($sql);
            }

            $sql = "SELECT * FROM $grupo_hino";
            $model = new Model;
            return $model->buscar_registros($sql);
        }

        public function carregar_hino(int $id_hino)
        {
            $sql = "SELECT * FROM hinos WHERE id_hino = $id_hino";
            
            $model = new Model;
            return $model->buscar_registros($sql);
        }

    }