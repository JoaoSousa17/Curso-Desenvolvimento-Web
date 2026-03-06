<?php

    if(!empty($_POST['user']) && !empty($_POST['senha'])){
        $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=php_com_pdo;charset=utf8';
        $user = 'root';
        $senha = '';

        try{
            $conexao = new PDO($dsn, $user, $senha);

            $query = "select * from tb_usuarios where";
            $query .= " email = :user ";
            $query .= "AND senha = :senha";

            echo $query;

            $stmt = $conexao->prepare($query);

            $stmt->bindValue(':user', $_POST['user']);
            $stmt->bindValue(':senha', $_POST['senha']);

            $stmt -> execute();

            $user = $stmt->fetch();

            echo '<pre>';
            print_r($user);
            echo '</pre>';

        } catch (PDOException $e){
            echo 'Erro: ' . $e->getCode() . '. Mensagem: ' . $e ->getMessage();
        }
    }

    /*
    $dsn = 'mysql:host=127.0.0.1;port=3306;dbname=php_com_pdo;charset=utf8';
    $user = 'root';
    $senha = '';

    try{
        $conexao = new PDO($dsn, $user, $senha);

        
        $query = '
            select * from tb_usuarios
        ';

        foreach($conexao -> query($query) as $key => $value){
            echo $value['nome'];
            echo '<hr>';
        }

        
        $stmt = $conexao -> query($query);
        $lista = $stmt -> fetchAll(PDO::FETCH_ASSOC);

        foreach($lista as $key=>$value){
            echo $value['nome'];
            echo '<hr>';
        }

        
    } catch (PDOException $e){
        echo 'Erro: ' . $e->getCode() . '. Mensagem: ' . $e ->getMessage();
    }*/
    
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <form action="index.php" method="post">
            <input type="text" name="user" id="" placeholder="User">
            <input type="password" name="senha" id="" placeholder="Senha">
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>