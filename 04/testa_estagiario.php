<?php

# carrega as classes

include 'Funcionario.php';
include 'Estagiario.php';

$pedrinho = new Estagiario();

$pedrinho->setSalario(248);

echo 'O salário do pedrinho é R$ ' . $pedrinho->getSalario() . "<br/>";