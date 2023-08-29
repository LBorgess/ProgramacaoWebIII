<?php

class Carro
{
    var $cor;
    var $ano;
    var $numeroPortas;
    var $peso;
    var $velocidade = 0;
    

    /**
     * Acelera o carro em uma velocidade
     * @return void
     */
    function acelerar()
    {   
        $this->velocidade = 1;
        echo 'Velocidade atual do Carro: ' . $this->velocidade++ . '<br/>';
    }

    /**
     * Cor do carro
     * @return string
     */
    function informarCor()
    {
        echo 'Cor do carro'  . $this->cor . '<br/>';
    }
}