<?php

    $busca = 5;

    $retorno = match($busca){   // Comparação por identidade (===)
        '1' => 'Encontrou o texto 1',
        1 => 'Encontrou o número 1',
        5, 8, 12, 'X' => 'Encontrou o valor 5 ou 12 ou os textos 8 ou x',
        default => 'Não encontrou'
    };

    echo $retorno;
    echo "<hr>";
?>


