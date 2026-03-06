<html>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP - Funções</title>
    </head>

    <body>
        <?php
             function exibirBoasVindas(){
                echo 'Seja Bem-vindo ao curso PHP! <br />';
             }

             function calcularArea($comprimento, $largura){
                return $comprimento * $largura;
             }

             exibirBoasVindas();
             echo calcularArea(3, 4);
        ?>

    </body>

</html>