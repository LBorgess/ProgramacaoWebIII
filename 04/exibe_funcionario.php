<?php

# carrega a classe
include_once 'Funcionario.php';

$fun = new Funcionario();

if (!isset($_POST['codigo'], $_POST['nome'], $_POST['nascimento'], $_POST['salario'])) {
    echo 'Erro. <br/>';
    echo 'Dados não recebidos via POST';
    exit;
} else {
    $fun->setCodigo($_POST['codigo']);
    $fun->setNome($_POST['nome']);
    $fun->setNascimento($_POST['nascimento']);
    $fun->setSalario($_POST['salario']);
}


echo "Dados do Funcionário";
echo "<hr>";

echo "Código: "     . $fun->getCodigo() . "<br>";
echo "Nome: "       . $fun->getNome() . "<br>";
echo "Nascimento: " . $fun->getNascimento() . "<br>";
echo "Salário: "    . $fun->getSalario() . "<br>";
