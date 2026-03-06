<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP - Variáveis</title>
    </head>
    <body>
        <?php
            // string
            $nome = "Jorge Sant Ana";

            // int
            $idade = 29;

            // float
            $peso = 82.5;

            // boolean
            $fumante = true;

            // ... lógica ...//
            $idade = 'trinta';
        ?>

        <h1>Ficha cadastral</h1>
        <p>Nome: <?= $nome ?></p>
        <p>Idade: <?= $idade ?></p>
        <p>Peso: <?= $peso ?></p>
        <p>Fumante: <?= $fumante ?></p>
    </body>
</html>