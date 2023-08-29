<?php

// INSERE A CLASSE
include_once 'Produto.php';
include_once 'Carro.php';
include_once 'Contas.php';

// CRIA UM OBJETO
$valor1 = new Produto();
$valor2 = new Produto();

// ATRIBUI VALORES
$valor1->codigo = 4001;
$valor1->descricao = 'CD - The Best of Eric Clapton';

$valor2->codigo = 4002;
$valor2->descricao = 'CD - The Eagles Hotel California';

// IMPRIMINDO OS VALORES DE ETIQUETA
$valor1->imprimeEtiqueta();
$valor2->imprimeEtiqueta();

echo '<hr/>';
echo 'CARRO<br/>';

$carro = new Carro();

$carro->acelerar();
$carro->cor = "Azul";
$carro->informarCor();

echo '<hr/>';
echo 'CONTAS<br/>';

$conta = new Contas();
$conta->nome = 'Ryan';
$conta->numAge = 25;
$conta->numConta = 66778899;
$conta->saldo = 'R$ 1500,00';
$conta->exibeDados();

