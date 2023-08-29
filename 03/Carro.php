<?php

class Carro
{
    var $cor;
    var $ano;
    var $numeroPortas;
    var $peso;

    /**
     * Acelera o carro
     * @return void
     */
    function acelerar()
    {
        echo 'Vrummmm <br/>';
    }

    /**
     * Cor do carro
     * @return string
     */
    function informarCor()
    {
        echo 'Cor do carro ' . $this->cor . '<br/>';
    }
}