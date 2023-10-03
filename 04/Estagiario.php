<?php

class Estagiario extends Funcionario
{
    /**
     * Define o salário do Estagiário com 12% de bônus
     *
     */
    function getSalario()
    {
        return $this->salario * 1.12;
    }
}