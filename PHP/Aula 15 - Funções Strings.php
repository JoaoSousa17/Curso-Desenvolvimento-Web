<html>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP - Funções Strings</title>
    </head>

    <body>
        <?php
             $texto = 'Curso Completo de PHP';

             echo $texto . '<br/>';
             echo strtolower($texto);

             echo '<hr>';

             echo $texto . '<br/>';
             echo strtoupper($texto);

             echo '<hr>';

             echo $texto . '<br/>';
             echo ucfirst($texto);

             echo '<hr>';

             echo $texto . '<br/>';
             echo strlen($texto);

             echo '<hr>';

             echo $texto . '<br/>';
             echo str_replace('PHP', 'Web Dev', $texto);

             echo '<hr>';

             echo $texto . '<br/>';
             echo substr($texto, 0, 5);
        ?>

    </body>

</html>