<?php
    class Pessoa{
        public $nome = null;

        function __construct($name){
            echo 'Objeto iniciado' . '<br>';
            $this->nome = $name;
        }

        function __destruct(){
            echo 'Objeto removido';
        }

        function __get($atributo){
            return $this->$atributo;
        }

        function correr(){
            return $this->nome . '? está correndo' . '<br>';
        }

    }

    $pessoa = new Pessoa('Jorge');
    echo "Nome: " . $pessoa->__get('nome') . '<br>';
    echo $pessoa->correr();

    unset($pessoa);
?>