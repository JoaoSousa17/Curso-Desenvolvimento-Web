<html>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP - Operadores Aritméticos</title>
    </head>

    <body>
        <?php

            $num1 = 13;
            $num2 = 4;
            echo "A soma entre $num1 e $num2 é " . ($num1 + $num2);
            echo '<br>';
            echo "A subtração entre $num1 e $num2 é " . ($num1 - $num2);
            echo '<br>';
            echo "A multiplicação entre $num1 e $num2 é " . ($num1 * $num2);
            echo '<br>';
            echo "A divisão entre $num1 e $num2 é " . ($num1 / $num2);
            echo '<br>';
            echo "O módulo entre $num1 e $num2 é " . ($num1 % $num2);
            echo '<br>';

            $x = 10;

            $x += 5;

            echo "Adicionando 5 o valor é: $x";
            echo '<br>';
        ?>

    </body>

</html>