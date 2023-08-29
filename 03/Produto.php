<?php

/**
 * Exemplo de uma classe em PHP
 * @author LBorgess
 */
class Produto
{
    var $codigo;
    var $descricao;
    var $preco;
    var $quantidade;

    /**
     * Método responsável por imprimir uma etiqueta
     * @return string
     */
    function imprimeEtiqueta()
    {
        print 'Código: ' . $this->codigo . '<br/>';
        print 'Descrição: ' . $this->descricao . '<br/>';
    }
}
