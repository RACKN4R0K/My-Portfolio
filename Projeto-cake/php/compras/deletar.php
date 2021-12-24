<?php

    $id = $_REQUEST["id"] ;

    include "../conectarBanco.php";
    
    $sql = "DELETE from cake where id=$id";

    $resultado = mysqli_query( $conexao, $sql ) ;

    header('Location: consultar_card.php');

?>