<html>

    <head>
        <meta charset="UTF-8">
        <title>Curso PHP - Funções Datas</title>
    </head>

    <body>
        <?php
             echo date('d') . '/' . date('m') . '/' . date('Y') . ' - ' . date('D') . ' - ' .date('H') . ':' . date('i') . '<br/>';
             echo date_default_timezone_get() . '<br/>';
             date_default_timezone_set('America/Curacao');
             echo date('d') . '/' . date('m') . '/' . date('Y') . ' - ' . date('D') . ' - ' .date('H') . ':' . date('i') . '<br/>';
             echo date_default_timezone_get() . '<br/>';
             echo '<hr/>';

             $data_inicial = "2018-04-24";
             $data_final = "2018-05-15";

             $time_inicial = strtotime($data_inicial);
             $time_final = strtotime($data_final);
             
             echo $data_inicial . ' - ' . $time_inicial . '<br/>';
             echo $data_final . ' - ' . $time_final . '<br/>';

             echo (($time_final - $time_inicial) / (3600 * 24));
        ?>

    </body>

</html>