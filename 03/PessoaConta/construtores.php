<?php

include_once "Pessoa.php";
include_once "Conta.php";

$carlos = new Pessoa(
    10,
    "Carlos da Silva",
    1.85,
    25,
    "25/02/1990",
    "Ensino médio",
    850.00
);

echo "Manipulando o objeto {$carlos->nome}: <br/>";
echo "<br/>";

echo "{$carlos->nome} é formado em: {$carlos->escolaridade} <br/>";
$carlos->formar('Técnico em desenvolvimento de sistemas');
echo "{$carlos->nome} é formado em: {$carlos->escolaridade} <br/>";

echo "{$carlos->nome} possui {$carlos->idade} anos <br/>";
$carlos->envelhecer(1);
echo "{$carlos->nome} possui {$carlos->idade} anos <br/>";

$conta_carlos = new Conta(
    6677,
    "CC. 1234.56",
    "10/07/02",
    $carlos,
    9876,
    567.89
);

echo "<br>";

echo "Manipulando a conta de: {$conta_carlos->titular->nome} <br/>";
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br/>";

$conta_carlos->depositar(20);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br/>";

$conta_carlos->retirar(10);
echo "O saldo atual é R\$ {$conta_carlos->obterSaldo()} <br/>";
