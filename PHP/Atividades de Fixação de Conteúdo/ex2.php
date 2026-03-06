<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Exercício 1</title>
</head>

<body>
    <?php
        function calcularImposto($salario){
            if($salario < 1903.98){
                return 0.0;
            } else if($salario < 2826.65){
                return 7.5;
            } else if($salario < 3751.05){
                return 15.0;
            } else if($salario < 4664.68){
                return 22.5;
            } else{
                return 27.5;
            }
        }
    ?>

</body>

</html>