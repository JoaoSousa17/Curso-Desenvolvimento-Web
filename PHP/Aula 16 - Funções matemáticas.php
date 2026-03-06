<html>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP - Funções Matemáticas</title>
    </head>

    <body>
        <?php
             $num = 9.999;
             $num2 = 9.01;

             echo ceil($num) . '<br/>';
             echo floor($num) . '<br/>';
             echo '<hr>';
             echo round($num) . '<br/>';
             echo round($num2) . '<br/>';
             echo '<hr>';
             echo rand(10, 20) . '<br/>';
             echo sqrt($num) . '<br/>';

        ?>

    </body>

</html>