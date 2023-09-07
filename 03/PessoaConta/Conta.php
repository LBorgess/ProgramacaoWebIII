<?php

/**
 * Definições da classe da conta
 */
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

    /**
     * Método construtor da classe
     */
    function __construct($agencia, $codigo, $datadecriacao, $titular, $senha, $saldo)
    {
        $this->agencia = $agencia;
        $this->codigo = $codigo;
        $this->datadecriacao = $datadecriacao;
        $this->titular = $titular;
        $this->senha = $senha;

        $this->depositar($saldo);
        $this->cancelada = false;
    }

    function __destruct()
    {
        echo "<br/>Objeto Conta {$this->codigo} de {$this->titular->nome} finalizado... <br/>";
    }
}
