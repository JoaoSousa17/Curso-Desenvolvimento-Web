<?php

    namespace app\controllers;

    use MF\Controller\Action;
    use MF\Model\Container;

    use app\Model\Produto;
    use app\models\Info;

    class IndexController extends Action{

        public function index(){
            $produto = Container::getModel('Produto');

            $this->view->dados = $produto->getProdutos();
            
            $this->render("index", 'layout3');
        }

        public function sobreNos(){
            $info = Container::getModel('Info');

            $this->view->dados = $info->getInfo();

            $this->render("sobreNos", 'layout2');
        }
    }

?>