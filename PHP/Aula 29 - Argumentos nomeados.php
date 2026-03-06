<?php
    function sendMail($destinatarios="", $cc = "", $assunto ="", $mensagem = ""){
        echo "Destinatários: " . $destinatarios . "<br>";
        echo "CC: " . $cc . "<br>";
        echo "Assunto: " . $assunto . "<br>";
        echo "Mensagem: " . $mensagem . "<br>";
    }

    // convencional
    sendMail("joaopedro.2004@teste.com.br", "teste@teste.com.br", "Argumentos nomeados", "Dominando a feature argumentos nomeados");

    echo "<hr>";
    sendMail("joaopedro.2004@teste.com.br", "Argumentos nomeados", "Dominando a feature argumentos nomeados");
    echo "<hr>";
    
    // moderna
    sendMail(destinatarios: "joaopedro.2004@teste.com.br", assunto: "Argumentos nomeados", mensagem: "Dominando a feature argumentos nomeados");
?>