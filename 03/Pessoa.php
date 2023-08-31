<?php

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
}
