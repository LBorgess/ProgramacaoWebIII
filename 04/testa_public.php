<?php

# carraga as classes

include 'Funcionario.php';
include 'Estagiario.php';

$pedrinho = new Funcionario();
$pedrinho->nome = 'Pedrinho';

$mariana = new Estagiario();
$mariana->nome = 'Mariana';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Publico</title>
</head>
<body>
    <p><?=$pedrinho->nome?></p>
    <p><?=$mariana->nome?></p>
</body>
</html>
