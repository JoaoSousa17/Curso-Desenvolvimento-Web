<?php
    /*class Produto{
        public string $nome = "";
        public float $valor = 0;

        public function __construct($nome, $valor){
            $this->nome = $nome;
            $this->valor = $valor;
        }
    }*/

    class Produto {
        public function __construct(public string $nome = "", public float $valor = 0){
            
        }
    }

    $produto = new Produto(valor: 1500, nome:"Smartphone");

    echo "Produto: " . $produto->nome;
    echo "<br>";
    echo "Valor: " . $produto->valor;





/*
2.87u - 3v


500 = 

*/
?>


