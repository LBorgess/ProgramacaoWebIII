<?php

    $localhost = "localhost";
    $user_name = "root";
    $senha     = "";
    $db        = "dbpw";

    $con = mysqli_connect($localhost, $user_name, $senha, $db);

    if(mysqli_connect_errno()){
        echo "Erro: " . mysqli_connect_error();
    } else {
        $sql = "SELECT nome, sobrenome
                FROM pessoa
                WHERE (idade > 19)";
        
        $resultado = mysqli_query($con, $sql);

        echo "<h2>Pessoas</h2>";

        while($pessoa = mysqli_fetch_array($resultado)){
            echo $pessoa['nome'] . " " . $pessoa['sobrenome'] . "<br>";
        }
        mysqli_close($con);
    }

?>