<?php

# carrega a classe
include_once 'Funcionario.php';

$fun = new Funcionario();

if (isset($_POST['codigo'], $_POST['nome'], $_POST['nascimento'], $_POST['salario'])) {
    $fun->setCodigo($_POST['codigo']);
    $fun->setNome($_POST['nome']);
    $fun->setNascimento($_POST['nascimento']);
    $fun->setSalario($_POST['salario']);
} else {
    
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css" media="screen,projection" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Cadastro - Funcionario</title>
</head>

<body>

    <div class="row">
        <div class="col s12 m6 push-m3">
            <h3 class="center">Dados</h3>

            <div class="col s12">
                <label for="codigo">Codigo</label>
                <input type="number" name="codigo" id="codigo" placeholder="<?= $fun->getCodigo() ?>" readonly>
            </div>

            <div class="col s12">
                <label for="nome">Nome</label>
                <input type="text" name="nome" id="nome" placeholder="<?= $fun->getNome() ?>" readonly>
            </div>

            <div class="col s12">
                <label for="nascimento">Data de nascimento</label>
                <input type="text" name="nascimento" id="nascimento" placeholder="<?= $fun->getNascimento() ?>" readonly>
            </div>

            <div class="col s12">
                <label for="salario">Salário</label>
                <input type="number" name="salario" id="salario" placeholder="R$ <?= $fun->getSalario() ?>" readonly>
            </div>

            <div class="col s12">
                <a type="submit" class="waves-effect waves-light btn-small" href="index.php">
                    <i class="material-icons left">arrow_back</i>
                    Voltar
                </a>
            </div>

        </div>
    </div>

    <script type="text/javascript" src="js/materialize.min.js"></script>
</body>

</html>