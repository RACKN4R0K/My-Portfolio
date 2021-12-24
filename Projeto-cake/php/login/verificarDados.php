<?php

    $email    = $_REQUEST["txtemail"] ;
    $password = $_REQUEST["txtsenha"] ;


    include "../conectarBanco.php";

    $sql = "SELECT * from login where email='$email' and senha='$password'" ;

    $resultado = mysqli_query( $conexao, $sql ) ;

    $quantidade = mysqli_num_rows($resultado) ;

    if ($quantidade == 0 ) {
        echo "<script>alert('Email/Senha errada')</script>";
    }else{
        header("Location: ./../../index.html");
        
    }

?>