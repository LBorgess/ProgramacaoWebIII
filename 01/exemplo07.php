<?php

    // Criando conexão com o banco de dados
    $con = mysqli_connect("localhost", "root", "", "dbpw");

    // Verificando a conexão
    if(mysqli_connect_errno()){
        echo "Falha ao conectar com o MySQL: " . mysqli_connect_error();
    }

    $sql1 = "INSERT INTO pessoa VALUES('Ana', 'Souza', 20)";
    mysqli_query($con, $sql1);

    $sql2 = "INSERT INTO pessoa(nome, sobrenome, idade) VALUES('Carlos', 'Costa', 21)";
    mysqli_query($con, $sql2);

    mysqli_close($con);
?>