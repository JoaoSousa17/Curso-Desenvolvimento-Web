<html>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP - Switch</title>
    </head>

    <body>
        <?php

            $parametro = 2;

            switch ($parametro){
                case 1:
                    echo'Entrou no case 1';
                    break;
                
                case 2:
                    echo'Entrou no case 2';
                    break;
                    
                case 3:
                    echo'Entrou no case 3';
                    break;

                default:
                    echo'Entrou no default';
                    break;
            }
        ?>

    </body>

</html>