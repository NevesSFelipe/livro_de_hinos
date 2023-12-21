<?php

    namespace app\controller;

    use app\classes\Controller;

    class IndexController extends Controller {

        public function index(): void
        {            
            $this->carregarView("index/index");
        }



    }