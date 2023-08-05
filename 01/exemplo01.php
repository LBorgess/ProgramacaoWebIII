<?php

    // Criando uma conexão com o banco de dados
    $con = mysqli_connect("localhost", "root", "");

    // Chegando a conexão
    if (mysqli_connect_errno()) {
        echo "Erro ao conectar com o banco de dados : " . mysqli_connect_error();
    } else {
        echo "Conexão Aberta";
    }

?>