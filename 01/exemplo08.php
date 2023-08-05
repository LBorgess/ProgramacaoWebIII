<?php

    $con = mysqli_connect("localhost", "root", "", "dbpw");

    if(mysqli_connect_errno()){
        echo "Erro: " . mysqli_connect_error();
    } else {
        $sql = "SELECT nome, sobrenome FROM pessoa";
        $resultado = mysqli_query($con, $sql);

        echo "<h2>Pessoas</h2>";

        while($pessoa = mysqli_fetch_array($resultado)){
            echo $pessoa['nome'] . " " . $pessoa['sobrenome'] . "<br/><br/>";
        }

        mysqli_close($con);
    }

?>