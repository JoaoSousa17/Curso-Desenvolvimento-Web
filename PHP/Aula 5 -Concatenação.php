<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP - Concatenação</title>
    </head>
    <body>
        <?php
            $nome = 'Jorge';
            $cor = 'verde';
            $idade = 29;
            $hobby = 'jogar videogame';

            // operador .
            echo ' Olá, '. $nome . ', vi que sua cor preferida é '. $idade .', estou vendo também que você possui ' . $idade .' anos e que gosta de '. $hobby . '.';   

            //aspas duplas
            echo '<br/>';

            echo "Olá $nome";
        ?>
    </body>
</html>