<html>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP - Array</title>
    </head>

    <body>
        <?php
            echo "<h2> Array Simples </h2>";
             $lista_frutas = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');      //Eme vez de array, pode se usar []

             $lista_frutas[] = 'Abacaxi';

             echo '<pre>';
             var_dump($lista_frutas);
             echo '<hr/>';
             print_r($lista_frutas);
             echo '</pre>';

             echo $lista_frutas[2];
             echo '<hr/>';

             echo "<h2> Array Multidimensional </h2>";
             $lista_coisas['frutas'] = array('Banana', 'Maçã', 'Morango', 'Uva');
             $lista_coisas['pessoas'] = array('João', 'Maria', 'José');

             echo '<pre>';
             var_dump($lista_coisas);
             echo '<pre/>';
             echo '<hr>';

             echo $lista_coisas['frutas'][2] . '<br>';
             echo $lista_coisas['pessoas'][1];

             echo '<hr>';
             echo "<h2> Métodos de pesquisa </h2>";

             echo '<pre>';
             print_r($lista_frutas);
             echo '</pre>';

             $existe = in_array('Maçã', $lista_frutas);
             echo ($existe ? 'Sim, o valor existe' : 'O valor não existe') . '<br>';

             $existe2 = in_array('Pera', $lista_frutas);
             echo ($existe2 ? 'Sim, o valor existe' : 'O valor não existe') . '<br>';

             $existe3 = array_search('Uva', $lista_frutas);

             if($existe3 != null){
                echo "Sim, o valor existe na posição $existe3." . '<br>';
             } else{
                echo 'O valor não existe' . '<br>';
             }

             echo '<hr>';

             echo '<pre>';
             print_r($lista_coisas);
             echo '</pre>';

             echo in_array('Uva', $lista_coisas['frutas']);
             echo '<hr/>';

             echo "<h2> Valores False, Null e Empty </h2>";
             $func1 = null;
             $func2 = '';
             $func3 = false;

             if(is_null($func1)){
                echo 'Sim, a variável é null.';
             } else {
                echo 'Não, a variável não é null.';
             }
             echo '<br>';

             if(is_null($func2)){
                echo 'Sim, a variável é null.';
             } else {
                echo 'Não, a variável não é null.';
             }
             echo '<br>';

             if(is_null($func3)){
                echo 'Sim, a variável é null.';
             } else {
                echo 'Não, a variável não é null.';
             }
             echo '<br>';

             if(empty($func1)){
                echo 'Sim, a variável está vazia.';
             } else {
                echo 'Não, a variável não está vazia.';
             }
             echo '<br>';

             if(empty($func2)){
                echo 'Sim, a variável está vazia.';
             } else {
                echo 'Não, a variável não está vazia.';
             }
             echo '<br>';

             if(empty($func3)){
                echo 'Sim, a variável está vazia.';
             } else {
                echo 'Não, a variável não está vazia.';
             }
             echo '<br>';

             echo '<hr>';
             echo "<h2> Funções PHP de manipulação de arrays </h2>";

            $array = 'String';
            $ret = is_array($lista_frutas);

            echo ($ret ? 'Sim, é um array.' : 'Não, não é um array.');

            echo '<pre>';
            print_r (array_keys($lista_frutas));
            echo '</pre>';

            sort($lista_frutas);

            echo '<pre>';
            print_r ($lista_frutas);
            echo '</pre>';

            $lista_frutas2 = array('Banana', 'Maçã', 'Morango', 'Uva', 'Abacate');      //Eme vez de array, pode se usar []

            $lista_frutas2[] = 'Abacaxi';

            asort($lista_frutas2);

            echo '<pre>';
            print_r ($lista_frutas2);
            echo '</pre>';

            echo 'Lista Frutas tem ' . count($lista_frutas) . ' frutas. <br>';

            $array1 = ['osx', 'windows'];
            $array2 = array('linux');
            $array3 = ['solaris'];

            $novo_array = array_merge($array1, $array2, $array3);

            echo '<pre>';
            print_r ($novo_array);
            echo '</pre>';

            $string = "26/04/2018";
            echo $string . '<br>';
            $array_ret = explode('/', $string);

            echo '<pre>';
            print_r ($array_ret);
            echo '</pre>';

            $array_js = ['b', 'x', 'y', 'z'];
            $string_ret = implode(',', $array_js);
            echo $string_ret;

        ?>

    </body>

</html>