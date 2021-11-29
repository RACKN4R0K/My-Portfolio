<?php

    //Cria as variaveis para acessar o banco de dados
    $host = "localhost" ;
    $usuario  = "root" ;
    $banco = "projeto";
    $senha = "";

    //Cria a conexao com o banco de dados
    $conexao = new mysqli($host, $usuario, $senha, $banco);


?>