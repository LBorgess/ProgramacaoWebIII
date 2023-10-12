<?php

class Gorjeta
{
    private $valor;
    private $qualidade;

    function setValor($valor)
    {
        $this->valor = $valor;
    }

    function getValor()
    {
        return $this->valor;
    }

    function setQualidade($qualidade)
    {
        $this->qualidade = $qualidade;
    }

    function getQualidade()
    {
        return $this->qualidade;
    }

    function excelente()
    {
        return $this->valor * 1.10;
    }

    function otimo()
    {
        return $this->valor * 1.08;
    }

    function bom()
    {
        return $this->valor * 1.05;
    }

    function ruim()
    {
        return $this->valor * 1.02;
    }
}
