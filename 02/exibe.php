<?php

    $con = mysqli_connect("localhost", "root", "", "dbpw");

    if(mysqli_connect_errno()){
        echo "Erro: " . mysqli_connect_error();
    } else {
        $sql = "SELECT * FROM pessoa";
        $resultado = mysqli_query($con, $sql);

        echo "<h2>Pessoas cadastradas</h2>";
        echo "<hr>";

        while($pessoa = mysqli_fetch_array($resultado)){
            echo $pessoa['nome'] . " " . $pessoa['sobrenome'] . " - ". $pessoa['idade'] . " anos <br/><br/>";
        }

        mysqli_close($con);
    }

    echo "<hr>";

?>