<?php

    namespace app\classes;

    use PDO;

    class Model {

        protected PDO $conexao;

        public function __construct()
        {
            $this->conexao = new PDO("mysql:dbname=" . BANCODADOS . ";host=" . SERVIDOR, USUARIO, SENHA);
        }

    }