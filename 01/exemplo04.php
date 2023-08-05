<?php
    $con = mysqli_connect("localhost", "root");

    if(mysqli_connect_errno()){
        echo "<br/>Erro ao conectar com a base de dados: " . mysqli_connect_error();
    } else {
        // Criando o banco de dados

        $sql = "CREATE DATABASE dbpw";

        if(mysqli_query($con, $sql)){
            echo "<br/> Banco de dados criado com sucesso.";
        } else {
            echo "<br/>Erro: " . mysqli_error($con);
        }

        mysqli_close($con);
    }
?>