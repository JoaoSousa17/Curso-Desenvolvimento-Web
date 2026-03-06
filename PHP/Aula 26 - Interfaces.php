<?php
    interface EquipamentoEletronicoInterface{
        public function ligar();
        public function desligar();
    }

    class Geladeira implements EquipamentoEletronicoInterface{
        public function abrirPorta(){
            echo 'Abrir Porta';
        }

        public function ligar(){
            echo 'Ligar';
        }

        public function desligar(){
            echo 'Desligar';
        }
    }

    class TV implements EquipamentoEletronicoInterface{
        public function trocarCanal(){
            echo 'Trocar Canal';
        }

        public function ligar(){
            echo 'Ligar';
        }

        public function desligar(){
            echo 'Desligar';
        }
    }

    $x = new Geladeira();
    $y = new TV();
?>