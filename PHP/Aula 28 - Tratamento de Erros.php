<?php
    try{
        echo '<h3> TRY </h3>';

        /*$sql = 'SELECT * FROM CLIENTES';
        mysql_query($sql);*/

        if(!file_exists('arquivo.txt')){
            throw new Exception('O arquivo em questão deveria estar disponivel as ' . date('d/m/Y H:i:s') . ' mas não estava. Vamos prosseguir na mesma!');
        }
    } catch(Error $e){
        echo '<h3> CATCH </h3>';
        echo $e;
    } catch(Exception $e){
        echo '<h3> CATCH </h3>';
        echo $e;
    } finally {
        echo '<h3> FINALLY </h3>';
    }
?>