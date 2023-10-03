<?php

class Funcionario
{
    /**
     * Código de cadastro do funcionário
     *
     * @var integer
     */
    private   $codigo;

    /**
     * Nome do funcionário
     *
     * @var string
     */
    private   $nome;

    /**
     * Data de nascimento do funcionário
     *
     * @var string
     */
    private   $nascimento;

    /**
     * Salário do funcionário
     *
     * @var float
     */
    private   $salario;

    /**
     * Método responsável por atribuir o código
     *
     * @param integer $codigo
     * @return void
     */
    function setCodigo($codigo)
    {
        $this->codigo = $codigo;
    }

    /**
     * Método responsável por retornar o código do funcionário
     *
     * @return void
     */
    function getCodigo()
    {
        return $this->codigo;
    }

    /**
     * Método responsável por atribuir o nome
     *
     * @param string $nome
     * @return void
     */
    function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * Método responsável por retornar o nome do funcionário
     *
     * @return void
     */
    function getNome()
    {
        return $this->nome;
    }

    /**
     * Método para atribuir da data de nascimento
     *
     * @param string $nascimento
     * @return void
     */
    function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    /**
     * Método responsável por obter a data de nascimento
     *
     * @return void
     */
    function getNascimento()
    {
        return $this->nascimento;
    }

    /**
     * Método responsável por atribuir o parametro $salario
     *
     * @param integer $salario
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
