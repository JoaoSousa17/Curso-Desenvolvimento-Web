<?php
    class Pai{
        private $nome = 'Jorge';
        protected $sobrenome = 'Silva';
        public $humor = 'feliz';

        public function __get($attr){
            return $this->$attr;
        }

        public function __set($attr, $value){
            $this->$attr = $value;
        }

        private function executarMania(){
            echo 'Assobiar';
        }

        protected function responder(){
            echo 'Oi';
        }

        public function executarAcao(){

        }
    }

    class Filho extends Pai{
        /*public function getAtributo($attr){
            return $this->$attr;
        }

        public function setAtributo($attr, $val){
            return $this->$attr = $val;
        }*/
    }

    /*$pai = new Pai();
    /*echo $pai->humor;
    $pai->humor = 'triste';
    echo '</br>';
    echo $pai->humor;
    echo '<hr>';
    echo $pai->getNome();
    echo '</br>';
    $pai->setNome('Jamilton');
    echo $pai->getNome();
    echo '<hr>';
    echo $pai->getSobrenome();
    echo '</br>';
    $pai->setSobrenome('Oliveira');
    echo $pai->getSobrenome();
    echo '<hr>';
    echo $pai->nome;
    echo '<hr>';
    echo $pai->sobrenome;
    $pai->sobrenome = 'Oliveira';
    echo '</br>';
    echo $pai->sobrenome;
    echo '<hr>';*/

    $filho = new Filho();
    /*echo $filho->getAtributo('humor');
    echo '</br>';
    echo $filho->getAtributo('sobrenome');
    echo '</br>';
    $filho->setAtributo('humor', 'Triste');
    echo $filho->getAtributo('humor');
    echo '</br>';
    $filho->setAtributo('nome', 'TrisCarloste');
    echo $filho->getAtributo('nome');*/
    echo '<pre>';
    print_r(get_class_methods($filho));
    echo '</pre>';
?>