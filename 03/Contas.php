<?php

class Contas
{
    var $numAge;
    var $numConta;
    var $nome;
    var $saldo;
    
    /**
     * Exibe dados da conta
     * @return void
     */
    function exibeDados()
    {
        echo 'Nome do cliente: ' . $this->nome . '<br/>';
        echo 'Idade do cliente: ' . $this->numAge . '<br/>';
        echo 'Número da conta: ' . $this->numConta . '<br/>';
        echo 'Saldo da conta: ' . $this->saldo . '<br/>';
    }
}