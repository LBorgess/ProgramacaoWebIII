<?php

    $con = mysqli_connect("localhost", "root", "", "dbpw");

    if(mysqli_connect_errno()){
        echo "Erro: " . mysqli_connect_error();
    } else {
        $sql = "INSERT INTO pessoa VALUES('$_POST[nome]', '$_POST[sobrenome]', $_POST[idade])";

        if(mysqli_query($con, $sql)){
            echo "<h2>Pessoa cadastrada com sucesso.</h2>";
        } else {
            echo "Erro ao inserir: " . mysqli_error($con);
        }

        mysqli_close($con);
    }

?>