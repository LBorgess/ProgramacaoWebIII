<?php

class Conversor
{
    private $de;
    private $para;
    private $valor;

    function setDe($de)
    {
        $this->de = $de;
    }

    function getDe()
    {
        return $this->de;
    }

    function setPara($para)
    {
        $this->para = $para;
    }

    function getPara()
    {
        return $this->para;
    }

    function setValor($valor)
    {
        $this->valor = $valor;
    }

    function getValor()
    {
        return $this->valor;
    }

    function milimetro($para, $valor)
    {
        $valor = $this->valor;
        $para = $this->para;

        if ($para == 2) {
            $valor = $valor / 10;
        } elseif ($para == 3) {
            $valor = $valor / 1000;
        } elseif ($para == 4) {
            $valor = $valor / 1000000;
        } else {
            $valor = $valor;
        }

        return $valor;
    }

    function centimetro($para, $valor)
    {
        $valor = $this->valor;
        $para = $this->para;

        if ($para == 1) {
            $valor = $valor * 10;
        } elseif ($para == 3) {
            $valor = $valor / 100;
        } elseif ($para == 4) {
            $valor = $valor / 100000;
        } else {
            $valor = $valor;
        }

        return $valor;
    }

    function metro($para, $valor)
    {
        $valor = $this->valor;
        $para = $this->para;

        if ($para == 1) {
            $valor = $valor * 1000;
        } elseif ($para == 2) {
            $valor = $valor * 100;
        } elseif ($para == 4) {
            $valor = $valor / 1000;
        } else {
            $valor = $valor;
        }

        return $valor;
    }

    function quilometro($para, $valor)
    {
        $valor = $this->valor;
        $para = $this->para;

        if ($para == 1) {
            $valor = $valor * 1000000;
        } elseif ($para == 2) {
            $valor = $valor * 100000;
        } elseif ($para == 3) {
            $valor = $valor * 1000;
        } else {
            $valor = $valor;
        }

        return $valor;
    }
}
