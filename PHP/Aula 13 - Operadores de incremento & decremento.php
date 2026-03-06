<html>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP - Operadores Incremento e Decremento</title>
    </head>

    <body>
        <h3>Pós incremento</h3>
        <?php
            $a = 7;

            echo "O valor contido em a é $a <br />";

            echo "O valor contido em a, no pós incremento é ". $a++ . " <br />";
            echo "O valor atualizado de a é $a <br />";
        ?>

        <h3>Pré incremento</h3>
        <?php
            $a = 7;

            echo "O valor contido em a é $a <br />";

            echo "O valor contido em a, no pré incremento é ". ++$a . " <br />";
            echo "O valor atualizado de a é $a <br />";
        ?>

        <h3>Pós decremento</h3>
        <?php
            $a = 7;

            echo "O valor contido em a é $a <br />";

            echo "O valor contido em a, no pós decremento é ". $a-- . " <br />";
            echo "O valor atualizado de a é $a <br />";
        ?>

        <h3>Pré decremento</h3>
        <?php
            $a = 7;

            echo "O valor contido em a é $a <br />";

            echo "O valor contido em a, no pré decremento é ". --$a . " <br />";
            echo "O valor atualizado de a é $a <br />";
        ?>

    </body>

</html>