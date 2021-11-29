<?php
    include "../conectarBanco.php";

    $nome  = $_REQUEST["txtnome"]  ;
    $email = $_REQUEST["txtemail"] ;
    $pwd = $_REQUEST["txtpassword"] ; 
    
    $sql = "INSERT INTO login (nome,email,senha) values('$nome','$email','$pwd')";

    if (mysqli_query( $conexao, $sql ) ) {
        header("Location:./../../entrar.html");
    }
    else {
        echo "Erro ao gravar" ;
    }