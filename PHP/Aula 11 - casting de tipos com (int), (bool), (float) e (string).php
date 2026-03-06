<html>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP - Switch</title>
    </head>

    <body>
        <?php

            $valor = 1;
            // $valor2 = (float) $valor;
            // $valor2 = (string) $valor;
            $valor2 = (bool) $valor;

            echo $valor . ' ' . gettype($valor);
            echo '<br>';
            echo $valor2 . ' ' . gettype($valor2);
        ?>

    </body>

</html>