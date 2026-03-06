<html>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP - OO - Pilar da Abstração</title>
    </head>

    <body>
        <?php
             
            class Funcionario{
                public $nome = null;
                public $telefone = null;
                public $numFilhos = null;
                public $cargo = null;
                public $salario = null;

                

                function __set($atributo, $valor){
                    $this->$atributo = $valor;
                }

                function __get($atributo){
                    return $this->$atributo;
                }

                function resumirCadFunc(){
                    return $this->__get('nome') . " possui " . $this->__get('numFilhos') . " filhos e o nr de telefone " . $this->__get('telefone');
                }

                function modificarNumFilhos($numFilhos){
                    $this->numFilhos = $numFilhos;
                }

                function setNome($nome){
                    $this->nome = $nome;
                }

                function setTelefone($telefone){
                    $this->telefone = $telefone;
                }

                function setNumFilhos($numFilhos){
                    $this->numFilhos = $numFilhos;
                }

                function getNome(){
                    return $this->nome;
                }

                function getNumFilhos(){
                    return $this->numFilhos;
                }
            }

            $y = new Funcionario();
            $y->__set('nome', 'José');
            $y->__set('numFilhos', 2);
            echo $y->resumirCadFunc();
            //echo $y->__get('nome') . ' possui ' . $y->__get('numFilhos') . ' filho(s) ';
            echo '<br />';
            $x = new Funcionario();
            $x->__set('nome', 'Maria');
            $x->__set('numFilhos', 0);
            echo $x->resumirCadFunc();
            //echo $x->__get('nome') . ' possui ' . $x->__get('numFilhos') . ' filho(s) ';
             
        ?>

    </body>

</html>