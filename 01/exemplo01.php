<?php

    // Criando uma conexão com o banco de dados
    $con = mysqli_connect("localhost", "etec", "123456");

    // chegando a conexão
    // 1º Numero do erro
    // 2º O erro que
    // Sem parametro
    if(mysqli_connect_errno()){
    echo "Erro ao conectar com  base de dados: " . mysqli_connect_error();
    } else {
        echo "Conexão Aberta";
    }

?>