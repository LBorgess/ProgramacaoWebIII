<?php

    // Criando conexão com o banco de dados 
    $con = mysqli_connect("localhost", "root", "", "dbpw");

    $sql = "CREATE TABLE Pessoa(nome CHAR(30), sobrenome CHAR(30), idade INT)";

    if(mysqli_query($con, $sql)){
        echo "Tabela criada com sucesso";
    } else {
        echo "Erro: " . mysqli_error($con);
    }

    mysqli_close($con);

?>