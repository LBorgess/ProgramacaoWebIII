<?php

    $con = mysqli_connect("localhost", "root", "", "dbpw3");

    if(mysqli_connect_errno()){
        echo "Falha ao conectar com o MySQL " . mysqli_connect_error();
    }

    echo "Dados inseridos </br>";

    $sql1 = "INSERT INTO tbpessoa VALUES('Ana', 'Souza', 30)";
    mysqli_query($con, $sql1);

    $sql2 = "INSERT INTO tbpessoa(nome, sobrenome, idade) VALUES('Carlos', 'Costa', 21)";
    mysqli_query($con, $sql2);

    mysqli_close($con);
?>