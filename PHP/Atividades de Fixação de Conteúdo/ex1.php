<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Exercício 1</title>
</head>

<body>
    <?php
        $idade = 19;
        $peso = 90;

        echo ($idade > 15 && $idade < 70 && $peso >= 50)
            ? 'Atende aos requisitos'
            : 'Não atende aos requisitos';
    ?>

</body>

</html>