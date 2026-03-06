<?php
    class Tarefa{
        private $id;
        private $id_status;
        private $tarefa;
        private $data_cadastro;

        public function __get($atrib){
            return $this->$atrib;
        }

        public function __set($atrib, $valor){
            return $this->$atrib = $valor;
        }
    }

?>