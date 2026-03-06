<html>

<head>
    <meta charset="UTF-8">
    <title>Curso PHP - Exercício 3</title>
</head>

<body>
    <?php
        $list = array();

        for($idx = 0; $idx < 6; $idx++){
            $val = rand(1, 60);
            if(in_array($val, $list)){
                $idx--;
                continue;
            }
            $list[$idx] = $val;
        }

        echo '<pre>';
        print_r($list);
        echo '</pre>';
    ?>

</body>

</html>