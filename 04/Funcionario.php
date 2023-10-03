<?php

class Funcionario
{
    private   $codigo;
    private   $nome;
    private   $nascimento;
    private   $salario;

    function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    function getCodigo()
    {
        return $this->codigo;
    }

    function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }

    function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * Método responsável por atribuir o parametro $salario
     *
     * @param numeric $salario
     */
    function setSalario($salario)
    {
        if (is_numeric($salario) && ($salario > 0)) {
            $this->salario = $salario;
        }
    }

    /**
     * Método responsável por retornar o valor de salário
     *
     * @return void
     */
    function getSalario()
    {
        return $this->salario;
    }
}
