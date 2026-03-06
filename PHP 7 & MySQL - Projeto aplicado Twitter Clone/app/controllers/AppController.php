<?php

    namespace app\controllers;

    use MF\Controller\Action;
    use MF\Model\Container;

    class AppController extends Action{

        public function timeline(){
            $this->validaAutenticacao();

            $tweet = Container::getModel('Tweet');
            $tweet->__set('id_usuario', $_SESSION['id']);

            $total_registos_pagina = 10;
            $pagina = isset($_GET['pagina']) ? $_GET['pagina'] : 1;
            $deslocamento = ($pagina - 1) * $total_registos_pagina;

            $this->view->tweets = $tweet->getPorPagina($total_registos_pagina, $deslocamento);
            $total_tweets = $tweet->getTotalRegistos();
            $this->view->total_paginas =ceil($total_tweets['total'] / $total_registos_pagina);
            $this->view->pagina_ativa = $pagina;

            $user = Container::getModel('Usuario');
            $user->__set('id', $_SESSION['id']);

            $this->view->total_tweets = $user->getTotalTweets();
            $this->view->total_seguindo =$user->getTotalSeguindo();
            $this->view->total_seguidores =$user->getTotalSeguidores();

            $this->render('timeline');          
        }

        public function tweet(){
            $this->validaAutenticacao();
                
            $tweet = Container::getModel('Tweet');
            $tweet->__set('tweet', $_POST['tweet']);
            $tweet->__set('id_usuario', $_SESSION['id']);
            $tweet->salvar();

            header('Location: /timeline');
        }

        public function validaAutenticacao(){
            // Inicia a sessão se ela ainda não tiver sido iniciada
            if(!isset($_SESSION)) {
                session_start();
            }
        
            if(!isset($_SESSION['id']) || empty($_SESSION['id']) || !isset($_SESSION['nome']) || empty($_SESSION['nome'])){
                header('Location: /?login=erro');
                exit; // <--- OBRIGATÓRIO para parar a execução do script
            } 
            // Não precisa de else return true, pois se não entrar no if, o código segue normal
        }

        public function quemSeguir(){
            $this->validaAutenticacao();

            $pesquisarPor = isset($_GET['pesquisarPor']) ? $_GET['pesquisarPor'] : '';
            $usuarios = array();

            if(!empty($pesquisarPor)){
                $usuario = Container::getModel('Usuario');
                $usuario->__set('nome', $_GET['pesquisarPor']);
                $usuario->__set('id', $_SESSION['id']);
                $usuarios = $usuario->getAll();
            }

            $this->view->usuarios = $usuarios;
            $this->render('quemSeguir');
            
        }

        public function acao(){
            $this->validaAutenticacao();

            $acao = isset($_GET['acao']) ? $_GET['acao'] : '';
            $id_usuario_seguindo = isset($_GET['id_usuario']) ? $_GET['id_usuario'] : '';

            $usuario = Container::getModel('Usuario');
            $usuario->__set('id', $_SESSION['id']);

            if ($acao == 'seguir') {
                $usuario->seguirUsuario($id_usuario_seguindo);
            } else if($acao == 'deixar_de_seguir'){
                $usuario->deixarSeguirUsuario($id_usuario_seguindo);
            }

            $pesquisarPor = isset($_GET['pesquisarPor']) ? $_GET['pesquisarPor'] : '';
            header('Location: /quem_seguir?pesquisarPor=' . $pesquisarPor);
        }
    }

?>