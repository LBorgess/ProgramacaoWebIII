<?php

    // Criando uma conexão com o banco de dados
    $con = mysqli_connect("localhost", "etec", "123456", "db_exemplo");

    if(mysqli_connect_errno()){
        echo "Erro ao conectar com  base de dados: " . mysqli_connect_error();
    } else {
        
        // CRIANDO TABELA/BANCO DE DADOS

        $sql = "CREATE DATABASE db_PW3";

        if(mysqli_query($con, $sql)){
            echo "Banco de dados criado com sucesso.";
        } else {
            echo "Erro: " . mysqli_error($con);
        }

        mysqli_close($con);
    }

?>