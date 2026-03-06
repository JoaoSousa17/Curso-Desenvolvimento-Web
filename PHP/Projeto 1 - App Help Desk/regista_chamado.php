<?php
    // Trabalhando na montagem do texto
    session_start();

    $titulo = str_replace('#', '-', $_POST['titulo']);
    $categoria = str_replace('#', '-', $_POST['categoria']);
    $descricao = str_replace('#', '-', $_POST['descricao']);
    $texto = $_SESSION['id'] . '#' . $titulo . '#' . $categoria . '#' . $descricao . PHP_EOL;

    // Trabalhando no arquivo
    $file = fopen('arquivo.txt', 'a');
    fwrite($file, $texto);
    fclose($file);

    header('Location: consultar_chamado.php')
?>
