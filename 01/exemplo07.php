<?php

    $con = mysqli_connect("localhost", "root", "", "dbpw3");

    if(mysqli_connect_errno()){
        echo "Falha ao conectar com o MySQL " . mysqli_connect_error();
    } else {
        $sql = "SELECT * FROM tbpessoa";

        $resultado = mysqli_query($con, $sql);
    
        echo "<h2>Pessoas - Dados</h2>";
  
        while($pessoa = mysqli_fetch_array($resultado)){
            echo $pessoa['nome'] . " " . $pessoa['sobrenome'] . " " . $pessoa['idade']. "<br/>";
        }

        mysqli_close($con);
    }

?>