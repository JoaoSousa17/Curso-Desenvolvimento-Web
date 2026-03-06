<?php

    namespace app\controllers;

    use MF\Controller\Action;
    use MF\Model\Container;

    class AuthController extends Action{

        public function autenticar(){
            $usuario = Container::getModel('Usuario');

            $usuario->__set('email', $_POST['email']);
            $usuario->__set('senha', md5($_POST['senha']));

            /*echo '<pre>';
            print_r($usuario);
            echo '</pre>';*/
            $retorno = $usuario->autenticar();
            echo 'Aqui 1';

            if(!empty($usuario->__get('id')) && !empty($usuario->__get('nome'))){
                echo 'Aqui 2';
                echo md5('1234');
                echo md5('123456');
                echo md5('12345678');
                session_start();

                $_SESSION['id'] = $usuario->__get('id');
                $_SESSION['nome'] = $usuario->__get('nome');

                header('Location: /timeline');
            } else {
                header('Location: /?login=erro');
            }
        }

        public function sair(){

            session_start();
            session_destroy();
            header('Location: /');
        }
    }

?>