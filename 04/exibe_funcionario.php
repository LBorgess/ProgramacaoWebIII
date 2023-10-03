<?php

# carrega a classe
include_once 'Funcionario.php';

$fun = new Funcionario();

$fun->setCodigo($_GET['codigo']);
$fun->setNome($_GET['nome']);
$fun->setNascimento($_GET['nascimento']);
$fun->setSalario($_GET['salario']);

echo "Dados do Funcionário";
echo "<hr>";

echo "Código: "     . $fun->getCodigo() . "<br>";
echo "Nome: "       . $fun->getNome() . "<br>";
echo "Nascimento: " . $fun->getNascimento() . "<br>";
echo "Salário: "    . $fun->getSalario() . "<br>";