<?php

    namespace app\core;

    class Core {

        private string $controller;
        private string $metodo;
        private array $parametros = [];

        public function __construct()
        {
            $this->lerURL();
        }

        public function executarCore(): void
        {
            $controllerCorrente = $this->controller;
            $c = new $controllerCorrente;

            call_user_func_array([$c, $this->metodo], $this->parametros);
        }

        public function lerURL():void
        {

            $url = explode("index.php", $_SERVER["PHP_SELF"]);
            $url = end($url);

            if(empty($url)) {
                $this->setController(CONTROLLER_PADRAO);
                $this->setMetodo(METODO_PADRAO);
                return;
            }
            
            $url = explode("/", $url);
            array_shift($url);
            
            if(count($url) < 2) {
                $this->setController($url[0]);
                $this->setMetodo(METODO_PADRAO);
                return;
            }

            $this->setController($url[0]);
            array_shift($url);

            if(isset($url[0])) {
                $this->setMetodo($url[0]);
                array_shift($url);
            }

            if(isset($url[0])) {
                $this->setParametros($url);
            }
            
        }

        private function setController(string $controller): void
        {
            $this->controller = 
                class_exists(NAMESPACE_CONTROLLER_PADRAO . ucfirst($controller) . "Controller") ? 
                    NAMESPACE_CONTROLLER_PADRAO . ucfirst($controller) . "Controller" : 
                    NAMESPACE_CONTROLLER_PADRAO . ucfirst(CONTROLLER_PADRAO) . "Controller"; 
        }

        private function setMetodo(string $metodo): void
        {
            $this->metodo = 
                method_exists($this->controller, $metodo) ? 
                    $metodo : 
                    METODO_PADRAO;

        }

        private function setParametros(array $parametros): void
        {
            $this->parametros = array_filter($parametros);
        }


    }