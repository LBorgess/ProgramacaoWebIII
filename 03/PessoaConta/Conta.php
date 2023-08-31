<?php

class Conta
{

    var $agencia;
    var $codigo;
    var $datadecriacao;
    var $titular;
    var $senha;
    var $saldo;
    var $cancelada;

    /**
     * Diminui o saldo da conta
     *
     * @param integer $quantia
     * @return void
     */
    function retirar($quantia)
    {
        if ($quantia) {
            $this->saldo -= $quantia;
        }
    }

    /**
     * Aumenta o saldo a conta
     *
     * @param integer $quantia
     * @return void
     */
    function depositar($quantia)
    {
        if ($quantia > 0) {
            $this->saldo += $quantia;
        }
    }

    /**
     * Retorna o saldo atual da conta
     *
     * @return void
     */
    function obterSaldo()
    {
        return $this->saldo;
    }
}
