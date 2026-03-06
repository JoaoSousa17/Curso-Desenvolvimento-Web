<?php
    $objeto = null;

    $objeto?->total();

    class FolhaPagamento{
        public function getTotalFuncionarios(){
            return 25;
        }
    }

    // $folhaPagamento = new FolhaPagamento();
    $folhaPagamento = null;
    echo $folhaPagamento?->getTotalFuncionarios();
?>


