<?php
    // Exemplo apagando banco de dados

    $con = mysqli_connect("localhost", "root");

    $sql = "DROP DATABASE dbpw";

    if(mysqli_query($con, $sql)){
        echo "Base de dados removida com sucesso.";
    } else {
        echo "Erro: " . mysqli_error($con);
    }

    mysqli_close($con);
    
?>