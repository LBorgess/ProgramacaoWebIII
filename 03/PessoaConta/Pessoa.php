<?php

/**
 * Classe responsável por detalhes da Pessoa
 */
class Pessoa
{
    var $codigo;
    var $nome;
    var $altura;
    var $idade;
    var $nascimento;
    var $escolaridade;
    var $salario;

    /**
     * Aumenta a altura em centimetros
     * @param integer $centimetro
     */
    function crescer($centimetro)
    {
        if ($centimetro > 0) {
            $this->altura += $centimetro;
        }
    }

    /**
     * Altera a escolaridade da pessoa
     *
     * @param integer $titulacao
     * @return void
     */
    function formar($titulacao)
    {
        $this->escolaridade = $titulacao;
    }

    /**
     * Altera a idade da pessoa
     *
     * @param integer $anos
     * @return void
     */
    function envelhecer($anos)
    {
        if ($anos > 0) {
            $this->idade += $anos;
        }
    }

    /**
     * Classe construtora
     */
    function __construct($codigo, $nome, $altura, $idade, $nascimento, $escolaridade, $salario)
    {
        $this->codigo       = $codigo;
        $this->nome         = $nome;
        $this->altura       = $altura;
        $this->idade        = $idade;
        $this->nascimento   = $nascimento;
        $this->escolaridade = $escolaridade;
        $this->salario      = $salario;
    }

    function __destruct()
    {
        echo "<br/>Objeto {$this->nome} finalizado... <br/>";
    }
}
