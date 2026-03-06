<?php
    class Veiculo{
        public $placa = null;
        public $cor = null;

        function acelerar(){
            echo 'Acelerar';
        }

        function freiar(){
            echo 'Freiar';
        }
    }

    class Carro extends Veiculo{
        public $teto_solar = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function abrirTetoSolar(){
            echo 'Abrir teto solar';
        }

        function alterarPosicaoVolante(){
            echo 'Alterar posição volante';
        }
    }

    class Mota extends Veiculo{
        public $contrapeso = true;

        function __construct($placa, $cor){
            $this->placa = $placa;
            $this->cor = $cor;
        }

        function empinar(){
            echo 'Empinar';
        }
    }

    $carro = new Carro('ABC-1234', 'Branco');
    $mota = new Mota('DEF-122', 'Preto');

    echo '<pre>';
    print_r($carro);
    echo '<br>';
    print_r($mota);
    echo '</pre>';
    echo '<hr>';
    $carro->abrirTetoSolar();
    echo '</br>';
    $carro->acelerar();
    echo '</br>';
    $carro->freiar();
    echo '</br>';

    $mota->empinar();
    echo '</br>';
    $mota->acelerar();
    echo '</br>';
    $mota->freiar();
    echo '</br>';
?>