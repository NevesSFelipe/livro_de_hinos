<?php

    namespace app\classes;

    use PDO;
    class Model {

        private $conexao;

        public function __construct()
        {
            $this->conexao =  new PDO("mysql:host=" . SERVIDOR . ";dbname=" . BANCODADOS, USUARIO, SENHA);
        }

        public function buscar_registros($sql) {

            $db = $this->conexao->query($sql);
            return $db->fetchAll(PDO::FETCH_OBJ);
        
        }

    }