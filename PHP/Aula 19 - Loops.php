<html>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP - Loops</title>
    </head>

    <body>
        <?php
             echo "<h2> While </h2><hr>";
             
             echo '-- Ínicio do Loop -- <br>';
             $num = 1;
             while($num < 50){
                echo $num . ', ';
                $num+= 5;
             }
             echo $num . '<br>';

             echo '-- Fim do Loop -- <br>';

             echo '-- Ínicio do Loop Continue -- <br>';
             $num = 0;
             while($num < 50){
                $num+= 5;
                if ($num % 2 == 0) continue;
                echo $num . ', ';
             }
             echo $num . '<br>';

             echo '-- Fim do Loop -- <br>';

             echo '-- Ínicio do Loop Break -- <br>';
             $num = 1;
             while($num < 50){
                echo $num . ', ';
                if ($num % 2 == 0) break;
                $num+= 5;
             }
             echo $num . '<br>';

             echo '-- Fim do Loop -- <br>';

             echo "<h2> Do While </h2><hr>";
             
             $x = 10;
             do{
                echo "$x <br>";
                // Continue;
                // Break;
             } while( $x < 9);

             echo "<h2> For </h2><hr>";

             for($x = 0; $x <=10; $x++){
                echo 'X = ' . $x . '<br>';
                // Continue;
                // Break; 
             }

             echo "<h2> Praticando um pouco - Arrays </h2><hr>";
             $registos = array(array('titulo' => 'Título Notícia 1', 'conteudo' => 'Conteúdo Notícia 1'), array('titulo' => 'Título Notícia 2', 'conteudo' => 'Conteúdo Notícia 2'), array('titulo' => 'Título Notícia 3', 'conteudo' => 'Conteúdo Notícia 3'), array('titulo' => 'Título Notícia 4', 'conteudo' => 'Conteúdo Notícia 4'));

             echo "O array possui " . count($registos) . " registos.";

             $idx = 0;
             while($idx < count($registos)){
                echo "<h3>" . $registos[$idx]['titulo'] . "</h3>";
                echo "<p>" . $registos[$idx]['conteudo'] . "</p>";
                echo '<hr/>';
                $idx++;
             }

             $idx = 0;
             do {
                echo "<h3>" . $registos[$idx]['titulo'] . "</h3>";
                echo "<p>" . $registos[$idx]['conteudo'] . "</p>";
                echo '<hr/>';
                $idx++;
             }while($idx < count($registos));

             for($idx = 0; $idx < count($registos); $idx++){
                echo "<h3>" . $registos[$idx]['titulo'] . "</h3>";
                echo "<p>" . $registos[$idx]['conteudo'] . "</p>";
                echo '<hr/>';
             }

             echo "<h2> Foreach </h2><hr>";

             $itens = ['sofá', 'mesa', 'cadeira', 'fogão', 'frigorífico'];
             echo '<pre>';
             print_r($itens);
             echo '</pre>';

             foreach($itens as $item){
                echo $item;

                if($item == 'mesa') echo "(* Compre uma mesa e ganhe 25% desconto na compra de 4 cadeiras *)";

                echo '<br>';
             }

             echo "<h2> Praticando Foreach em arrays e Foreach encadeados</h2><hr>";
             $funcionarios = array('João', 'Maria', 'Júlia');

             echo '<pre>';
             print_r($funcionarios);
             echo '</pre>';

             foreach($funcionarios as $idx => $nome_funcionario){
                echo $idx . ' - ' . $nome_funcionario . '<br>';
             }

             $funcionarios2 = array(array('João', 2500), array('Maria', 3000), array('Júlia', 2200));

             echo '<pre>';
             print_r($funcionarios2);
             echo '</pre>';

             foreach($funcionarios2 as $idx => $funcionario){
                echo "ID $idx: ";
                foreach($funcionario as $idx2 => $data){
                    switch($idx2){
                        case 0:
                            echo "NOME - $data; ";
                            break;
                        case 1:
                            echo "SALARIO - $data.";
                            break;
                        default:
                            echo "$idx2 - $data";
                            break;
                    }
                }
                echo '<br>';
             }
             
        ?>

    </body>

</html>