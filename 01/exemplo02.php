<?php

    // Criando uma conexão com o banco de dados
    $con = mysqli_connect("localhost", "etec", "123456", "db_exemplo");

    if(mysqli_connect_errno()){
    echo "Erro ao conectar com  base de dados: " . mysqli_connect_error();
    } else {
        echo "Conexão Aberta";
    }

?>