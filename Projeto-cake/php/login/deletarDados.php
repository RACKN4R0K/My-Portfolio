<?php

    $codigo = $_REQUEST["codigo"] ;

    include "../conectarBanco.php";
    
    $sql = "DELETE from login where codigo=$codigo";

    $resultado = mysqli_query( $conexao, $sql ) ;

    header("Location: consultarDados.php");

?>