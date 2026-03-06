<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Curso PHP - Variáveis Constantes</title>
    </head>
    <body>
        <?php
            define('BD_URL', 'endereco_cd_dev');
            define('BD_USUARIO', 'usuario_dev');
            define('BD_SENHA', 'senha_dev');

            //... lógica ...//

            echo BD_URL . '<br/>';
            echo BD_USUARIO . '<br/>';
            echo BD_SENHA;
        ?>
    </body>
</html>